@extends('layout.app')

@section('title') Register @stop

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-4 offset-4 mt-4 shadow">

                @if(Session('Info'))
                    <div class="alert alert-success">{{Session('Info')}}</div>
                    @endif

                <h1 class="text-center text-primary">Sign Up</h1>

                <form method="post" action="{{route('register')}}">

                <div class="form-group">
                    <label for="name">Username</label>
                    <input value="{{old('name')}}" type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif " id="name">
                    @if($errors->has('name'))<span class="invalid-feedback">{{$errors->first('name')}}</span> @endif
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid @endif ">
                    @if($errors->has('email'))<span class="invalid-feedback">{{$errors->first('email')}}</span> @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                    @if($errors->has('password'))<span class="invalid-feedback">{{$errors->first('password')}}</span> @endif
                </div>

                <div class="form-group">
                    <label for="password_confirm">Password Confirmation</label>
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control @if($errors->has('password_confirm')) is-invalid @endif">
                    @if($errors->has('password_confirm'))<span class="invalid-feedback">{{$errors->first('password_confirm')}}</span> @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Save</button>
                </div>

                    @csrf

                </form>
            </div>
        </div>
    </div>

@stop