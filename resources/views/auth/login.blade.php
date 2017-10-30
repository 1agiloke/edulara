@extends('layouts.master')

@section('styles')
    body{padding-top:80px;}
@endsection

@section('main')
<div class="container" id="loginView">
        <div class="col-sm-6 col-sm-offset-3">
            <h1><span class="fa fa-sign-in"></span> Login</h1>

            

            <!-- LOGIN FORM -->
            <form action="{{ route('login') }}" method="POST">

                {{ csrf_field() }}
                <div class="form-group">
                    @if($errors->has('username')) 
                        <div class="alert alert-danger">{{ $errors->first('username') }}</div>
                    @endif 
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                </div>
                <div class="form-group">
                    @if($errors->has('password')) 
                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                    @endif
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" >
                </div>
<!--
                <div class="form-group">
                    <label>Remember Me</label>
                    <input type="checkbox" class="form-control" name="remember" value="yes">
                </div>
-->

                <button type="submit" class="btn btn-flat btn-default hijau form-control">Login</button>
            </form>

            <hr>

            <p>Need an account? <a href="/register" class="textHijau">Signup</a></p>

        </div>

    </div>
@endsection
