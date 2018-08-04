<?php

namespace App\Http\Controllers;

use App\Client;
use App\Resume;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ResumeLoginInfo() {
        $client = Client::all();
        return view('admin.user.resume-login-info',[
            'client' => $client
        ]);
    }
    public function AdminLoginInfo() {
        $user = User::all();
        return view('admin.user.admin-login-info',[
            'user' => $user
        ]);
    }
 public function DeleteAdminLoginInfo($id) {
       $users = User::find($id);
       $users->delete();
     return redirect('admin/AdminLoginInfo')->with('message', 'Admin ID deleted Successfully');
 }

 public function ShowResumeInfo() {
        $resume = Resume::all();
        return view('admin.user.created-resume-info',[
            'resume' => $resume
        ]);
 }

 public function DeletedResumeInfo($id){
     $resumes =   Resume::find($id);
     $resumes->delete();

     return redirect('admin/show-resume/info')->with('message', 'Client Resume Info deleted Successfully');
 }

}
