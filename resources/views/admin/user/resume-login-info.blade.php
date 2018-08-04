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
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>

                            <th>Address</th>
                            <th>Created at</th>
                            <th>Action</th>

                        </tr>
                        @php($i=1)
                        @foreach($client as $clients)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $clients->first_name }}</td>
                                <td>{{ $clients->last_name }}</td>
                                <td>{{ $clients->email_address }}</td>
                                <td>{{ $clients->phone_number }}</td>
                                <td>{{ $clients->address }}</td>
                                <td>{{ $clients->created_at }}</td>
                                <td>







                                    <a href="{{ route('delete-client', ['id'=>$clients->id]) }}" class="btn btn-danger btn-sm">
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