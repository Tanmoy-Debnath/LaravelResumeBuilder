@extends('front-end.master')
@section('icon')
    <link rel="shortcut icon" href="{{ asset('/') }}/front-end/manual/login.png"/>
@endsection
@section('title')
    <title>Resume Builder :: Login-Register</title>
@endsection


@section('body')

    <body>
    <div class="content" style="margin-top: 30px; margin-left: 10%;">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 well">
                        <h3 class="text-center text-success" style="font-family: 'Kaushan Script', cursive;">You have login to complete the Process. If you are not registered then registered faster.</h3>
                    </div>



                    <div class="col-md-5 well">

                        <h3 style="font-family: 'Chonburi', cursive;">Register if you are not register yet!</h3>
                        <br/>
                        {{ Form::open(['route' => 'user-sign-up', 'method'=>'POST']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" >
                            <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" >
                            <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="something@gmail.com" >
                            <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" >
                            <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="+880*********" >
                            <span class="text-danger">{{ $errors->has('phone_number') ? $errors->first('phone_number') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <textarea name="address" placeholder="address" class="form-control"></textarea>
                            <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Register" name="btn" class="form-control btn btn-success">
                        </div>






                        {{ Form::close() }}
                    </div>



                    <div class="col-md-5 well" style="margin-left: 25px;">
                        <h3 class="text-center head" style="font-family: 'Chonburi', cursive;">Already Register ! Login here!</h3>
                      <h3 class="text-center text-danger"> {{ Session::get('messege') }}</h3>

                        {{ Form::open(['route' => 'user-sign-in', 'method'=>'POST']) }}
                        <br>
                        <h3 class="text-center text-danger">{{ Session::get('message') }}</h3>

                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="something@gmail.com" >
                            <span class="text-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" >
                            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" name="btn" class="form-control  btn-success">
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

