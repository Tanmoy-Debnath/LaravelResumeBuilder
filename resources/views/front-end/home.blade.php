@extends('front-end.master')
@section('icon')
    <link rel="shortcut icon" href="{{ asset('/') }}/front-end/manual/feedback.png"/>
@endsection
@section('title')
    <title>Resume Builder :: Free,Safe,Efficient</title>
    @endsection


@section('body')

    <body>
    <div class="container">

        <div class="row">

            <div class="well col-md-5 col-md-offset-3" id="td">
                <p  style="font-family: 'Kaushan Script', cursive; cursor:none ; font-size: 30px; text-shadow: 6px 6px 3px grey;" class="btn btn-success">Online Resume Builder!</p>
                <br>
                <p class="pnew">Build your Resume Now!</p>

                <p class="pnew">It's Free ,Efficient and Save your Time.</p>

                <a href="{{ route('sign-in') }}">
                    <input style="letter-spacing: 4px;" type="button" value="Click Here" class="btn pnew simpleCart_empty btn-primary form-control"/>
                </a>

            </div>
        </div>
    </div>

    </body>

    @endsection

