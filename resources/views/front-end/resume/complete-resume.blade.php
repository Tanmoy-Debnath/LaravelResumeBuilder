@extends('front-end.master')
@section('icon')
   <link rel="shortcut icon" href="{{ asset('/') }}/front-end/manual/download.png"/>
@endsection
@section('title')
   <title>Resume Builder :: Download,Preview</title>
@endsection


@section('body')

   <body>
   <div class="container">

      <div class="row">

         <div class="well col-md-5 col-md-offset-3" id="td">
            <p  style="font-family: 'Kaushan Script', cursive; cursor:none ; font-size: 30px; text-shadow: 6px 6px 3px grey;" class="btn btn-success">We have done!</p>
            <br>
            <p class="pnew" style="text-shadow: 6px 6px 3px grey;">Download your Resume Now!</p>



            <a href="{{ route('download-cv') }}" target="_blank">
               <input type="button" value="Download" class="btn pnew simpleCart_empty btn-primary"/>
            </a>
            <a href="{{ route('preview-cv') }}" target="_blank">
               <input type="button" value="Preview" class="btn pnew simpleCart_empty btn-success"/>
            </a>
            <a href="{{ route('resume-builder') }}">
               <input type="button" value="<<Back" class="btn pnew simpleCart_empty btn-danger"/>
            </a>

         </div>
      </div>
   </div>

   </body>

@endsection

