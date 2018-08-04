<?php

namespace App\Http\Controllers;


use App\Resume;
use Illuminate\Http\Request;
use Image;
use Session;
use PDF;

class ResumeController extends Controller
{


    protected function clientImageUpload($request) {
        $clientImage =$request->file('client_image');
        $fileType = $clientImage->getClientOriginalExtension();
        $imageName = $request->full_name.'.'.$fileType;
        $directory = 'client-image/';
        $imgUrl = $directory.$imageName;
        Image::make($clientImage)->save($imgUrl);
        return $imgUrl;
    }
 protected function saveBasicInfo($request, $imgUrl) {
       $resume = new Resume();
     $resume->full_name = $request->full_name;
     $resume->present_address = $request->present_address;
     $resume->permanent_address = $request->permanent_address;
     $resume->phone_number = $request->phone_number;
     $resume->email = $request->email;
     $resume->client_image = $imgUrl;
     $resume->looking_for = $request->looking_for;
     $resume->available_for = $request->available_for;
     $resume->expected_salary = $request->expected_salary;
     $resume->preferred_job = $request->preferred_job;
     $resume->preferred_district = $request->preferred_district;
     $resume->career_objective = $request->career_objective;
     $resume->career_summary = $request->career_summary;
     $resume->father_name = $request->father_name;
     $resume->mother_name = $request->mother_name;
     $resume->nationality = $request->nationality;
     $resume->date_of_birth = $request->date_of_birth;
     $resume->gender = $request->gender;
     $resume->maritial_status = $request->maritial_status;
     $resume->national_id = $request->national_id;
     $resume->religion = $request->religion;
     $resume->g_exam = $request->g_exam;
     $resume->g_major = $request->g_major;
     $resume->g_institute = $request->g_institute;
     $resume->g_result = $request->g_result;
     $resume->g_year = $request->g_year;
     $resume->g_duration = $request->g_duration;
     $resume->g_achivement = $request->g_achivement;
     $resume->h_exam = $request->h_exam;
     $resume->h_major = $request->h_major;
     $resume->h_institute = $request->h_institute;
     $resume->h_result = $request->h_result;
     $resume->h_year = $request->h_year;
     $resume->h_duration = $request->h_duration;
     $resume->h_achivement = $request->h_achivement;
     $resume->s_exam = $request->s_exam;
     $resume->s_major = $request->s_major;
     $resume->s_institute = $request->s_institute;
     $resume->s_result = $request->s_result;
     $resume->s_year = $request->s_year;
     $resume->s_duration = $request->s_duration;
     $resume->s_achivement = $request->s_achivement;
     $resume->save();

    $resumeId = $resume->id;
   Session::put('resumeId',$resumeId);
    Session::put('resumeName',$resume->full_name);






 }

 protected function resumeValidate($request) {
        $this->validate($request, [
            'full_name' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'client_image' => 'required',
            'looking_for' => 'required',
            'available_for' => 'required',
            'expected_salary' => 'required',
            'preferred_job' => 'required',
            'preferred_district' => 'required',
            'career_objective' => 'required',
            'career_summary' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'maritial_status' => 'required',
            'national_id' => 'required',
            'religion' => 'required',
            'g_exam' => 'required',
            'g_major' => 'required',
            'g_institute' => 'required',
            'g_result' => 'required',
            'g_year' => 'required',
            'g_duration' => 'required',
            'g_achivement' => 'required',
            'h_exam' => 'required',
            'h_major' => 'required',
            'h_institute' => 'required',
            'h_result' => 'required',
            'h_year' => 'required',
            'h_duration' => 'required',
            'h_achivement' => 'required',
            's_exam' => 'required',
            's_major' => 'required',
            's_institute' => 'required',
            's_result' => 'required',
            's_year' => 'required',
            's_duration' => 'required',
            's_achivement' => 'required',

        ]);
 }




    public function cvForm(Request $request) {
           $this->resumeValidate($request);
        $imgUrl = $this->clientImageUpload($request);
        $this->saveBasicInfo($request, $imgUrl);






        return redirect('user/CompleteCv');



    }

    public function completeCv() {

        return view('front-end.resume.complete-resume');
    }
    public function downloadCvPdf() {
        $resumeId = Resume::find(Session::get('resumeId'));

        $pdf = PDF::loadView('front-end.resume.download-resume',[
            'resumeId' => $resumeId
        ]);
        return $pdf->download('ResumeBuilder_CV.pdf');


    }

    public function previewCvPdf() {
        $resumeId = Resume::find(Session::get('resumeId'));

        $pdf = PDF::loadView('front-end.resume.download-resume',[
            'resumeId' => $resumeId
        ]);
        return $pdf->stream('ResumeBuilder_CV.pdf');
    }
}
