@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome {{ auth()->check() ? auth()->user()->name : ''  }} <span class=""><a href="{{ url('/register') }}">Go back</a></span></div>

                    <div class="panel-body">

                        <div class="top-title1" style="text-align: center; margin-bottom: 20px;">
                            Add staff here:
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('add_staff') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">First Name:</label>
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="Enter Staff First Name">

                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('secondname') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">second Name:</label>
                                <div class="col-md-6">
                                    <input id="secondname" type="text" class="form-control" name="secondname" value="{{ old('secondname') }}" required placeholder="Enter Staff Second Name">

                                    @if ($errors->has('secondname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('secondname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Staff Email">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('staffno') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Staff Number:</label>
                                <div class="col-md-6">
                                    <input id="staffno" type="text" class="form-control" name="staffno" required placeholder="Enter Staff Number">

                                    @if ($errors->has('staffno'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('staffno') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Contact:</label>
                                <div class="col-md-6">
                                    <input id="contact" type="text" class="form-control" name="contact" required placeholder="Enter Staff Contact">
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
                                        Add staff
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
