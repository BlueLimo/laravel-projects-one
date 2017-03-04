@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }} <span class=""><a href="{{ url('/register') }}">Go back</a></span></div>

                    <div class="panel-body">
                        <div class="top-title1" style="text-align: center; margin-bottom: 20px;">
                            Assign task to <b>{{ $staffdet->firstname }} {{ $staffdet->secondname }}</b>:
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('add_task') }}">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="id" value="{{ $staffdet->id }}">
                            <input type="hidden" class="form-control" name="email" value="{{ $staffdet->email }}">
                            <input type="hidden" class="form-control" name="staff_id" value="{{$staffdet->id  }}">


                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Task Title</label>
                                <div class="col-md-6">

                                    <input id="title" type="text" class="form-control" name="title"  required placeholder="Enter the task title here">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Description</label>
                                <div class="col-md-6">

                                    <textarea id="description" type="text" class="form-control" name="description"  required placeholder="Enter the task description here"></textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Assign
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
