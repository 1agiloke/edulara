@extends('layouts.master')

@section('styles')
 body{padding-top: 80px}
@endsection

@section('main')
    <div class="container">

        <div class="col-sm-6 col-sm-offset-3">

            <h1><span class="fa fa-sign-in"></span> Signup</h1>

            

                    <!-- LOGIN FORM -->
                    <form action="/register" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            @if($errors->has('email'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('username') }}
                                </div>
                            @endif
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                        </div>
                        <div class="form-group">
                            @if($errors->has('password'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            @if($errors->has('password_confirmation'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-flat btn-default hijau form-control">Daftar</button>
                    </form>

                    <hr>

                    <p>Already Have Account? <a href="/login" class="textHijau">Login</a></p>

        </div>

    </div>

@endsection