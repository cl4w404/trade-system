@extends('layouts.app')

@section('content')



<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css.map') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css.map') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map') }}">



<div class="flex justify-center">

    <p><div class="w-7/12 bg-white p-4 rounded-lg">
      <div class="container" style="float:left;">
        <h1>REGISTER</h1>
      </div>

      <form action="{{route('register')}}" method="post" class="w-5/12 "style="float:right;">
        @csrf
        <div class="md-4">
          <label for="name" class"sr-only">Name</label>

          <input type="text" name="name" id="name" placeholder="Your Name" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('name')border-red-500 @enderror" value="">
          @error('name')
            <div class="text-red-500 mt-2 text-sm">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="md-4">
          <label for="username" class"sr-only">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter Username" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('username')border-red-500 @enderror" value="">
          @error('username')
            <div class="text-red-500 mt-2 text-sm">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="md-4">
          <label for="email" class"sr-only">Email</label>
          <input type="email" name="email" id="email" placeholder="Your Email" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('email')border-red-500 @enderror" value="">
          @error('email')
            <div class="text-red-500 mt-2 text-sm">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="md-4">
          <label for="password" class"sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Your Password" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password')border-red-500 @enderror" value="">
          @error('password')
            <div class="text-red-500 mt-2 text-sm">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="md-4">
          <label for="password" class"sr-only">Password Again</label>
          <input type="password" name="password_confirmation" id="password" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-3 rounded-lg @error('password')border-red-500 @enderror" value="">


        </div>
        <div>
          <label for="password" class"sr-only ">.</label>
          <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-medium w-full"> Register</button>
        </div>
        <a class="text-indigo-600 hover:text-indigo-500" href="{{route('login')}}">Already Registered?? <b>click here!!</b></a>
      </form>
    </div>
</div></p>
@endsection
