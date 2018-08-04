<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Session;
use Mail;


class loginController extends Controller
{
public function userSign(Request $request) {
    $this->validate($request, [
        'email_address' => ' email|unique:clients,email_address', /*   email|unique:clients,email_address */
        'first_name' => 'required',
        'last_name' => 'required',
        'password' => 'required',
        'phone_number' => 'required',
        'address' => 'required'

    ]);
  $client = new Client();

    $client->first_name = $request->first_name;
    $client->last_name = $request->last_name;
    $client->email_address = $request->email_address;
    $client->password = bcrypt($request->password);
    $client->phone_number = $request->phone_number;
    $client->address = $request->address;
    $client->save();

    $clientId = $client->id;
    Session::put('clientId',$clientId);
    Session::put('clientName',$client->first_name.' '.$client->last_name);
    $data = $client->toArray();


     Mail::send('front-end.mail.confirmation-mail',$data, function ($message) use ($data){
         $message->to($data['email_address']);
         $message->subject('Confirmation mail');
     });


     return redirect('resume-user/builder');
}
public function ResumeForm() {
    return view('front-end.resume.resume-form');
}
public function userLogin(Request $request) {
   $client = Client::where('email_address', $request->email_address)->first();

    if (password_verify($request->password, $client->password)) {
        Session::put('clientId',$client->id);
        Session::put('clientName',$client->first_name.' '.$client->last_name);

        return redirect('resume-user/builder');
    } else {
        return redirect('/login-register')->with('messege', 'Password not matched ! Insert a valid Passord!');
    }


}
public function DeleteClientLoginInfo($id) {
   $clients = Client::find($id);
    $clients->delete();

    return redirect('admin/ResumeLoginInfo')->with('message', 'Client ID deleted Succesfully');
}

}
