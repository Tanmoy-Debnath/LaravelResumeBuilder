@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="msg">{{ Session::get('message')  }}</h3>

                    <table class="table table-bordered table-responsive">

                        <tr class="bg-primary">
                            <th>Sl. No.</th>
                            <th>Full Name</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Action</th>

                        </tr>
                        @php($i=1)
                        @foreach($resume as $resumes)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $resumes->full_name }}</td>
                                <td>{{ $resumes->present_address }}</td>
                                <td>{{ $resumes->permanent_address }}</td>
                                <td>{{ $resumes->phone_number }}</td>
                                <td>{{ $resumes->email }}</td>
                                <td>{{ $resumes->created_at }}</td>
                                <td>







                                    <a href="{{ route('delete-cvInfo', ['id'=>$resumes->id]) }}" class="btn btn-danger btn-sm">
                                  <span class="glyphicon glyphicon-trash">

                                  </span>
                                    </a>
                                </td>


                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection