<?php
use Illuminate\Support\Facades\Session;
?>
@extends('mainLayout')

@section('content')

<div class="maincontent">
    <div class="form">
        <h3>Sign Up</h3>
        <form action="{{route('signup')}}" method="POST">
            @CSRF
            
            <div class="username">
                <label for="username">User Name</label>
                <input type="text" name="email" value="{{old('email')}}">
                <span>
                   @error('email') 
                    {{$message}}
                   @enderror
                </span>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password">
                <span>
                @error('password')
                {{$message}}
                @enderror
                </span>
            </div>
            <div class="submit">
                <button type="submit">Sing Up</button>
            </div>
            
        </form>
    </div>
</div>



@endsection