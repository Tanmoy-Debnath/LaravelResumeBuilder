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
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Created at</th>
                            <th>Action</th>

                        </tr>
                        @php($i=1)
                        @foreach($user as $users)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->created_at }}</td>
                                <td>







                                    <a href="{{ route('delete-admin', ['id'=>$users->id]) }}" class="btn btn-danger btn-sm">
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