@extends('front-end.master')
@section('icon')
    <link rel="shortcut icon" href="{{ asset('/') }}/front-end/manual/form.png"/>
@endsection
@section('title')
    <title>Resume Builder :: FORM</title>
@endsection


@section('body')

    <body>
    <div class="content" style="margin-top: 30px; margin-left: 6%;"  >
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row" style="width: 115%;">
                    <div class="col-md-10 well">
                        <h3 class="text-center text-success" style="font-family: 'Kaushan Script', cursive;">Dear <span style="color: black;">{{ Session::get('clientName') }}</span> Give all Information correctly below in the form to generate your CV</h3>
                    </div>



                    <div class="col-md-10 well">

                        <h3 style="font-family: 'Chonburi', cursive;">Online Resume Builder Form</h3>
                        <br/>
                        {{ Form::open(['route' => 'cv-info', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}


                                                  <!-- -----------Personal Info------------------ -->




                           <button type="button" style="font-family: 'Chonburi', cursive;" class="btn btn-info" data-toggle="collapse" data-target="#grid1">Basic Information+</button>
                            <div id="grid1" class="collapse">

                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Full Name :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="full_name" class="form-control" placeholder="ex. Example Debnath"/>
                                        <span class="text-danger">{{ $errors->has('full_name') ? $errors->first('full_name') : ' ' }}</span>
                                    </div>
                                </div>
                                <br> <br> <br>

                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Present Address :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="present_address" class="form-control" placeholder="ex. House no. Holding number. area"/>
                                        <span class="text-danger">{{ $errors->has('present_address') ? $errors->first('present_address') : ' ' }}</span>
                                    </div>
                                </div>
                                <br> <br>


                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Permanent Address :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="permanent_address" class="form-control" placeholder="ex. House no. Holding number. area"/>
                                        <span class="text-danger">{{ $errors->has('permanent_address') ? $errors->first('permanent_address') : ' ' }}</span>
                                    </div>
                                </div>
                                <br> <br>

                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Mobile No. :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="phone_number" class="form-control" placeholder="ex.016---------"/>
                                        <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Email :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="email" class="form-control" placeholder="ex. someone@example.com"/>
                                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Image :</label>
                                    <div class="col-md-5">
                                        <input type="file" name="client_image" accept="image/*"/>
                                        <span class="text-danger">{{ $errors->has('client_image') ? $errors->first('client_image') : ' ' }}</span>
                                    </div>
                                </div>
                            </div>


                                         <br> <br>             <!-- Career and Application Information-->


                        <button type="button" style="font-family: 'Chonburi', cursive;" class="btn btn-info" data-toggle="collapse" data-target="#grid2">Career and Application Information+</button>
                        <div id="grid2" class="collapse">


                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Looking For :</label>
                                <div class="col-md-9">
                                    <input type="text" name="looking_for" class="form-control" placeholder="ex. Mid/Entry/Expert level job"/>
                                    <span class="text-danger">{{ $errors->has('looking_for') ? $errors->first('looking_for') : ' ' }}</span>
                                </div>
                            </div>

                            <br><br> <br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Available For :</label>
                                <div class="col-md-9">
                                    <input type="text" name="available_for" class="form-control" placeholder="ex. Part Time/Full time job"/>
                                    <span class="text-danger">{{ $errors->has('available_for') ? $errors->first('available_for') : ' ' }}</span>
                                </div>
                            </div>


                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Expected Salary :</label>
                                <div class="col-md-9">
                                    <input type="text" name="expected_salary" class="form-control" placeholder="ex. 15000"/>
                                    <span class="text-danger">{{ $errors->has('expected_salary') ? $errors->first('expected_salary') : ' ' }}</span>
                                </div>
                            </div>



                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Preferred Job Category :</label>
                                <div class="col-md-9">
                                    <input type="text" name="preferred_job" class="form-control" placeholder="IT job/Bank job etc."/>
                                    <span class="text-danger">{{ $errors->has('preferred_job') ? $errors->first('preferred_job') : ' ' }}</span>
                                </div>
                            </div>




                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Preferred District:</label>
                                <div class="col-md-9">
                                    <input type="text" name="preferred_district" class="form-control" placeholder="ex. Gazipur"/>
                                    <span class="text-danger">{{ $errors->has('preferred_district') ? $errors->first('preferred_district') : ' ' }}</span>
                                </div>
                            </div>

                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Career Objective  :</label>
                                <div class="col-md-9">
                                    <textarea type="text" name="career_objective" class="form-control" placeholder="ex. Briefly describe your Career objective"></textarea>

                                    <span class="text-danger">{{ $errors->has('career_objective') ? $errors->first('career_objective') : ' ' }}</span>
                                </div>
                            </div>


                            <br><br>      <br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Career Summary  :</label>
                                <div class="col-md-9">

                                    <textarea type="text" name="career_summary" class="form-control" placeholder="ex. Briefly describe your Career summary"></textarea>
                                    <span class="text-danger">{{ $errors->has('career_summary') ? $errors->first('career_summary') : ' ' }}</span>
                                </div>
                            </div>


                            <br><br>


                        </div>



                                                          <!-- Personal Detail -->

                                                 <br><br>
                        <button type="button" style="font-family: 'Chonburi', cursive;" class="btn btn-info" data-toggle="collapse" data-target="#grid3">Personal Detail and Information+</button>
                        <div id="grid3" class="collapse">


                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Father's Name :</label>
                                <div class="col-md-9">
                                    <input type="text" name="father_name" class="form-control" placeholder="ex. Father Name"/>
                                    <span class="text-danger">{{ $errors->has('father_name') ? $errors->first('father_name') : ' ' }}</span>
                                </div>
                            </div>

                            <br><br> <br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Mother's Name :</label>
                                <div class="col-md-9">
                                    <input type="text" name="mother_name" class="form-control" placeholder="ex. Mother Name"/>
                                    <span class="text-danger">{{ $errors->has('mother_name') ? $errors->first('mother_name') : ' ' }}</span>
                                </div>
                            </div>


                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Nationality :</label>
                                <div class="col-md-9">
                                    <input type="text" name="nationality" class="form-control" placeholder="ex. Bangladeshi"/>
                                    <span class="text-danger">{{ $errors->has('nationality') ? $errors->first('nationality') : ' ' }}</span>
                                </div>
                            </div>



                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Date of birth :</label>
                                <div class="col-md-9">
                                    <input type="text" name="date_of_birth" class="form-control" placeholder="dd-mm-yr"/>
                                    <span class="text-danger">{{ $errors->has('date_of_birth') ? $errors->first('date_of_birth') : ' ' }}</span>
                                </div>
                            </div>




                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Gender  :</label>
                                <div class="col-md-9">
                                    <input type="text" name="gender" class="form-control" placeholder="ex. Male/Female">
                                    <span class="text-danger">{{ $errors->has('gender') ? $errors->first('gender') : ' ' }}</span>
                                </div>
                            </div>


                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Maritial status  :</label>
                                <div class="col-md-9">
                                    <input type="text" name="maritial_status" class="form-control" placeholder="ex. Married/Unmarried"/>
                                    <span class="text-danger">{{ $errors->has('maritial_status') ? $errors->first('maritial_status') : ' ' }}</span>
                                </div>
                            </div>



                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">National id no  :</label>
                                <div class="col-md-9">
                                    <input type="text" name="national_id" class="form-control" placeholder="0147825121156-----"/>
                                    <span class="text-danger">{{ $errors->has('national_id') ? $errors->first('national_id') : ' ' }}</span>
                                </div>
                            </div>



                            <br><br>
                            <div class="form-group">
                                <label style="font-family: 'Chonburi', cursive;" class="control-label col-md-2">Religion :</label>
                                <div class="col-md-9">
                                    <input type="text" name="religion" class="form-control" placeholder="ex. Hindu/Muslim/other"/>
                                    <span class="text-danger">{{ $errors->has('religion') ? $errors->first('religion') : ' ' }}</span>
                                </div>
                            </div>







                        </div>
                                                                <!-- Academic Qualification -->





                        <br><br>




                                                        <!-- For Graduation -->
                        <button type="button" style="font-family: 'Chonburi', cursive;" class="btn btn-info" data-toggle="collapse" data-target="#grid4">Academic Qualification +</button>
                        <div id="grid4" class="collapse">
                            <br>

                            <div class="row" style="font-family: 'Chonburi', cursive;">


                              <table style="margin-left: 3%;">
                                  <tr>
                                      <th >Graduation Degree Info:</th>
                                  </tr>
                                  <tr>
                                      <th style="color: #F5F5F5;">-----------------------------------</th>
                                  </tr>

                                  <tr style="margin-top: 1%">
                                      <th>      <div class="form-group">
                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_exam" placeholder="ex. B.Sc in CSE"/>
                                                  <span class="text-danger">{{ $errors->has('g_exam') ? $errors->first('g_exam') : ' ' }}</span>
                                              </div>

                                          </div>
                                      </th>
                                      <th> <div class="form-group">

                                              <div class="col-md-2">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_major" placeholder="ex. Computer Science" class=""/>
                                                  <span class="text-danger">{{ $errors->has('g_major') ? $errors->first('g_major') : ' ' }}</span>
                                              </div>

                                          </div></th>
                                      <th> <div class="form-group">

                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_institute" placeholder="Institute" />
                                                  <span class="text-danger">{{ $errors->has('g_institute') ? $errors->first('g_institute') : ' ' }}</span>
                                              </div>

                                          </div></th>
                                      <th> <div class="form-group">

                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_result" placeholder="Result" />
                                                  <span class="text-danger">{{ $errors->has('g_result') ? $errors->first('g_result') : ' ' }}</span>
                                              </div>

                                          </div></th>

                                  </tr>
                                  <tr>
                                      <th style="color: #F5F5F5;">-----------------------------------</th>
                                  </tr>
                                  <tr>
                                      <th> <div class="form-group">

                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_year" placeholder="Passing year"/>
                                                  <span class="text-danger">{{ $errors->has('g_year') ? $errors->first('g_year') : ' ' }}</span>
                                              </div>

                                          </div></th>

                                      <th> <div class="form-group">

                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_duration" placeholder="Duration"/>
                                                  <span class="text-danger">{{ $errors->has('g_duration') ? $errors->first('g_duration') : ' ' }}</span>
                                              </div>

                                          </div></th>
                                      <th> <div class="form-group">

                                              <div class="col-md-4">
                                                  <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="g_achivement" placeholder="Achievement"/>
                                                  <span class="text-danger">{{ $errors->has('g_achivement') ? $errors->first('g_achivement') : ' ' }}</span>
                                              </div>

                                          </div></th>
                                  </tr>
                              </table>










                        </div>


                                <br><br>
                                                            <!-- For HSC -->
                            <div class="row" style="font-family: 'Chonburi', cursive;">


                                <table style="margin-left: 3%;">
                                    <tr>
                                        <th>HSC Info:</th>
                                    </tr>
                                    <tr>
                                        <th style="color: #F5F5F5;">-----------------------------------</th>
                                    </tr>

                                    <tr style="margin-top: 1%">
                                        <th>      <div class="form-group">
                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_exam" placeholder="Exam Title"/>
                                                    <span class="text-danger">{{ $errors->has('h_exam') ? $errors->first('h_exam') : ' ' }}</span>
                                                </div>

                                            </div>
                                        </th>
                                        <th> <div class="form-group">

                                                <div class="col-md-2">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_major" placeholder="Major" class=""/>
                                                    <span class="text-danger">{{ $errors->has('h_major') ? $errors->first('h_major') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_institute" placeholder="Institute" />
                                                    <span class="text-danger">{{ $errors->has('h_institute') ? $errors->first('h_institute') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_result" placeholder="Result" />
                                                    <span class="text-danger">{{ $errors->has('h_result') ? $errors->first('h_result') : ' ' }}</span>
                                                </div>

                                            </div></th>

                                    </tr>
                                    <tr>
                                        <th style="color: #F5F5F5;">-----------------------------------</th>
                                    </tr>
                                    <tr>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_year" placeholder="Passing year"/>
                                                    <span class="text-danger">{{ $errors->has('h_year') ? $errors->first('h_year') : ' ' }}</span>
                                                </div>

                                            </div></th>

                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_duration" placeholder="Duration"/>
                                                    <span class="text-danger">{{ $errors->has('h_duration') ? $errors->first('h_duration') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="h_achivement" placeholder="Achievement"/>
                                                    <span class="text-danger">{{ $errors->has('h_achivement') ? $errors->first('h_achivement') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                    </tr>
                                </table>










                            </div>

    <br><br>

                                                                       <!-- For SSC -->
                            <div class="row" style="font-family: 'Chonburi', cursive;">


                                <table style="margin-left: 3%;">
                                    <tr>
                                        <th>SSC Info:</th>
                                    </tr>
                                    <tr>
                                        <th style="color: #F5F5F5;">-----------------------------------</th>
                                    </tr>

                                    <tr style="margin-top: 1%">
                                        <th>      <div class="form-group">
                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_exam" placeholder="Exam Title"/>
                                                    <span class="text-danger">{{ $errors->has('s_exam') ? $errors->first('s_exam') : ' ' }}</span>
                                                </div>

                                            </div>
                                        </th>
                                        <th> <div class="form-group">

                                                <div class="col-md-2">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_major" placeholder="Major" class=""/>
                                                    <span class="text-danger">{{ $errors->has('s_major') ? $errors->first('s_major') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_institute" placeholder="Institute" />
                                                    <span class="text-danger">{{ $errors->has('s_institute') ? $errors->first('s_institute') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_result" placeholder="Result" />
                                                    <span class="text-danger">{{ $errors->has('s_result') ? $errors->first('s_result') : ' ' }}</span>
                                                </div>

                                            </div></th>

                                    </tr>
                                    <tr>
                                        <th style="color: #F5F5F5;">-----------------------------------</th>
                                    </tr>
                                    <tr>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_year" placeholder="Passing year"/>
                                                    <span class="text-danger">{{ $errors->has('s_year') ? $errors->first('s_year') : ' ' }}</span>
                                                </div>

                                            </div></th>

                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_duration" placeholder="Duration"/>
                                                    <span class="text-danger">{{ $errors->has('s_duration') ? $errors->first('s_duration') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                        <th> <div class="form-group">

                                                <div class="col-md-4">
                                                    <input type="text" style="padding: 5px; border-radius: 4px; border: 1px solid #ccc;" name="s_achivement" placeholder="Achievement"/>
                                                    <span class="text-danger">{{ $errors->has('s_achivement') ? $errors->first('s_achivement') : ' ' }}</span>
                                                </div>

                                            </div></th>
                                    </tr>
                                </table>










                            </div>





                        </div>









































                           <br><br><br><br>
                        <div class="col-md-9 col-md-offset-1">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="SAVE">

                        </div>





                        {{ Form::close() }}
                    </div>







                </div>
            </div>



        </div>
        <!--single-->

        <!--new-arrivals-->
    </div>


    </body>

@endsection

