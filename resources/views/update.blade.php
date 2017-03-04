@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ Auth::user()->name }} <span class=""><a href="{{ url('/register') }}">Go back</a></span></div>

                    <div class="panel-body">

                        <div class="top-title1" style="text-align: center; margin-bottom: 20px;">
                            Update staff details:
                        </div>


                        {{--{!! Form::model($staffdet, ['url' =>url('update_staff_details') ]) !!}--}}
                        {{----}}
                        {{--{!! Form::hidden('id', null) !!}--}}
                        {{----}}
                        {{--{!! Form::text('name', null, []) !!}--}}
                        {{----}}
                        {{--{!! Form::close() !!}--}}




                        <form class="form-horizontal" role="form" method="POST" action="{{ url('update_staff_details') }}">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" name="id" value="{{ $staffdet->id }}">
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">First Name:</label>
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname"  value="{{ $staffdet->firstname }}" required autofocus placeholder="Enter Staff First Name">

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('secondname') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Second Name:</label>
                                <div class="col-md-6">
                                    <input id="secondname" type="text" class="form-control" name="secondname"  value="{{ $staffdet->secondname }}" required placeholder="Enter Staff Second Name">

                                    @if ($errors->has('secondname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('secondname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('staffno') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Staff Number:</label>
                                <div class="col-md-6">
                                    <input id="staffno" type="text" class="form-control" name="staffno" required value="{{ $staffdet->staffno }}" placeholder="Enter Staff Number">

                                    @if ($errors->has('staffno'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('staffno') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $staffdet->email }}" required placeholder="Enter Staff Email">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Contact</label>
                                <div class="col-md-6">
                                    <input id="contact" type="text" class="form-control" name="contact" required value="{{ $staffdet->contact }}" placeholder="Enter Staff Contact">
                                    @if ($errors->has('contact'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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
