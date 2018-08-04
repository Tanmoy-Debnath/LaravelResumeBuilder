<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['full_name', 'present_address', 'permanent_address','phone_number','email','client_image','looking_for','available_for','expected_salary','preferred_job','preferred_district','career_objective','career_summary','father_name','mother_name','nationality','date_of_birth','gender','maritial_status','national_id','religion','g_exam','g_major','g_institute','g_result','g_year','g_duration','g_achivement','h_exam','h_major','h_institute','h_result','h_year','h_duration','h_achivement','s_exam','s_major','s_institute','s_result','s_year','s_duration','s_achivement'];
}
