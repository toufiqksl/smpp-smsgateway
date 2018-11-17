<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;
use App\Http\Models\Admin;
use App\Http\Utils\Helper;
use App\Http\Models\SmsInformationLog;
use Session;
session_start();
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $this->authCheck();
        $login= view('admin.login');
        return view('loginMaster')->with('main_content',$login);
    }
    public function loginCheck(Request $request){
        $admin_id=$request->admin_id;
        $password=md5($request->password);
        $admin=Admin::where('admin_id',$admin_id)->where('password',$password)->first();
        if($admin){
            Session::put('id',$admin->id);
            Session::put('name',$admin->name);

            return redirect()->action('Admin\AdminController@logReportCheck');
        }else{
            Session::put('message',"Invalid ID Or Password");
            return redirect()->action('Admin\AdminController@index');
        }
       
    }
    public function logoutCheck(){
        
            Session::flush();
            Session::put('message','successfully Logout');
            return redirect()->action('Admin\AdminController@index');
      

    }
    public function profileCheck(){
        $id= Session::get('id');
        $admin=Admin::where('id',$id)->first();
        // print_r($admin);
        // exit();
        if($admin){
          $adminData = view('admin.profile')->with('adminProfileData',$admin);
            return view('dashboardMaster')->with('main_dashboard_content',$adminData);
        }
       
    }
    public function profileEdit(){
        $id= Session::get('id');
        $getAdminData=Admin::where('id',$id)->first();
        $getAdmin= view('admin.editProfile')->with('getAdminData',$getAdminData);
        return view('dashboardMaster')->with('main_dashboard_content',$getAdmin);
    }
    public function profileUpdate(request $request){
        $helper   = new Helper();
        $admin_id = Session::get('id');
        $first_name =$request->first_name;
        $last_name =$request->last_name;
        $email =$request->email;
        $phone_number =$request->phone_number;
        $password =$request->password;
        $confirm_password =$request->confirm_password;
        if ($password==$confirm_password) {
           $data=array(
                'id'=>$admin_id,
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'phone_number'=>$phone_number,
                'password'=>$password
            );
           $validator = $helper->dataValidation_2($data);
          
           if ($validator) {
            $admin = Admin::where('id',$admin_id)
                    ->update([
                        'first_name' =>$first_name,
                        'last_name' =>$last_name,
                        'email' =>$email,
                        'phone_number' =>$phone_number,
                        'password' =>md5($password),
                    ]);
            session::put('message','Data successfully Updated!');
            return redirect()->action('Admin\AdminController@profileCheck');
           }else{
            session::put('message','Invalid Data, Please provide valid data!');
            return redirect()->action('Admin\AdminController@profileEdit');
           }
        }else{
            session::put('message','Password and Confirm password not Match!');
            return redirect()->action('Admin\AdminController@profileEdit');
        }
    }
    
    public function logReportCheck(){
        $logData = SmsInformationLog::orderBy('id','DESC')->get();
        if(!$logData->isEmpty()){
            $allData=$logData;
            // Session::put('data',$allData);
            $getAll= view('admin.logReport')->with('data',$allData);
            return view('dashboardMaster')->with('main_dashboard_content',$getAll);
        }else{
            $allData=NULL;
            // Session::put('data',$allData);
            $getAll= view('admin.logReport')->with('data',$allData);
            return view('dashboardMaster')->with('main_dashboard_content',$getAll);
        }
    }
public function authCheck(){
        $id = Session::get('id');
        if($id!=NULL){
            return redirect()->action('Admin\AdminController@logReportCheck')->send();
        } else{
            return ;
        }
    }

}
