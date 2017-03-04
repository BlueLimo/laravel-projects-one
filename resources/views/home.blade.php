@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    <div class="add-staff">
                        <a href="{{ url('/create') }}">Add new staff</a><br/>
                    </div>
                        <table width="95%">
                                <thead class="">
                                    <tr>
                                        <th>Name:</th>
                                        <th></th>
                                        <th>S-Number:</th>
                                        <th>Email:</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($staff as $staffs)
                                    <tr>
                                        <td> {{ $staffs->firstname }}</td>
                                        <td> {{ $staffs->secondname }}</td>
                                        <td> {{ $staffs->staffno }}</td>
                                        <td> {{ $staffs->email }}</td>
                                        <td>
                                            <span class="remove"><a href="{{url('view_staff_' .$staffs->id)}}">View</a></span>
                                            <span class="update"><a href="{{url('update_staff_' .$staffs->id)}}">Update</a></span>
                                            <span class="remove"><a href="{{url('delete_staff_' .$staffs->id)}}">Remove</a></span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">Staff's lists</td>
                                        <td colspan="2">@ 2017</td>
                                        <td colspan="1">Laravel CRUD</td>
                                    </tr>
                                </tfoot>

                        </table>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
