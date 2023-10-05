@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-3">
        <h2>Register</h2>
        <form action="{{route('register.process')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <div class="text-danger mt-2">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="phone_number" class="form-control" id="phone_number" placeholder="Enter phone number" name="phone_number" value="{{old('phone_number')}}">
                @if ($errors->has('phone_number'))
                    <div class="text-danger mt-2">{{ $errors->first('phone_number') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                @if ($errors->has('password'))
                    <div class="text-danger mt-2">{{ $errors->first('password') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('login')}}" class="text-end">Login Here</a>
        </form>
    </div>
</div>
@endsection