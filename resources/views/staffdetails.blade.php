@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }} <span class=""><a href="{{ url('/register') }}">Go back</a></span></div>

                    <div class="panel-body">
                        <div class="add-staff">
                            <tr>
                                <td><a href="{{url('update_staff_' .$staffdet->id)}}">Edit Details</a><br/></td>
                            </tr>
                        </div>
                        <table width="95%">
                            <thead class="">
                            <tr>
                                <th>First Name:</th>
                                <th>Second Name:</th>
                                <th>Staff Number:</th>
                                <th>Email Address:</th>
                                <th>Phone:</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{ $staffdet->firstname }}</td>
                                    <td> {{ $staffdet->secondname }}</td>
                                    <td> {{ $staffdet->staffno }}</td>
                                    <td> {{ $staffdet->email }}</td>
                                    <td> {{ $staffdet->contact }}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2">Staff details</td>
                                <td colspan="2">@ 2017</td>
                                <td colspan="1">Laravel CRUD</td>
                            </tr>
                            </tfoot>

                        </table>
                        <div class="add-staff">
                            <tr>
                                <td><a href="{{url('assign_task_' .$staffdet->id)}}">Assign new task</a><br/></td>
                            </tr>
                        </div>
                        <table width="95%">
                            <thead class="">
                            <tr>
                                <th>Task Title:</th>
                                <th>Description:</th>
                                <th>Date Posted:</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staffdet['task'] as $task)
                            <tr>
                                <td> {{ $task->title }}</td>
                                <td> {{ $task->description }}</td>
                                <td> {{ $task->updated_at }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="1">Staff tasks</td>
                                <td colspan="1">@ 2017</td>
                                <td colspan="1">Task Manager</td>
                            </tr>
                            </tfoot>

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
