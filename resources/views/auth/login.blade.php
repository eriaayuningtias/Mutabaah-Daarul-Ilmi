@extends('layouts.mutabaah')

@section('title', 'Login')

@section('push_css')

@endsection

@section('content')
    <div class="row justify-content-md-center my-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-mutabaah text-white">
                    <h4 class="my-3">LOGIN</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <!-- <label for="username" class="col-md-12 control-label">Username</label> -->

                            <div class="col-md-12">
                                <input id="username" type="textl" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username ..." required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-12 control-label">Password</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password ..." required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('push_js')
@endsection