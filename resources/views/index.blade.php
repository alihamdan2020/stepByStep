@extends("mainLayout")

@section('title')
Main Page
@endsection

@section('content')
<h1>index page</h1>

@foreach($users as $user)
<span>user name</span>{{$user->name}}<br>
<span>user email</span>{{$user->email}} <br>
<span>user password</span>{{$user->password}}<br>
<a href="{{route('showDetails',$user->id)}}">details</a><br>
@endforeach




@endsection