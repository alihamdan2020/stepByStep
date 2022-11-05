<?php
use Illuminate\Support\Facades\Session;
?>
@extends('mainLayout')

@section('content')

<div class="maincontent">
    <div class="form">
        <h3>Sign In</h3>
        <form action="{{route('checkuser')}}" method="POST">
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
                <button type="submit">Sing In</button>
            </div>
            <div class="message" style="height:30px">
                <span>
                    {{
                        session()->get("message")
                    }}
                </span>
            </div>

            <div class="newuser">
                <a href="{{route('register')}}">Have no account ? register</a>
            </div>
        </form>
    </div>
</div>



@endsection