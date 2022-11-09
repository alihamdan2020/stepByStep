@extends("mainLayout")

@section('title')
sow Page
@endsection

@section('content')
<h1>details page</h1>

@foreach($users as $user)
<span>user name</span>{{$user->name}}<br>
<span>user email</span>{{$user->email}} <br>
<span>user password</span>{{$user->password}}<br>
@endforeach




@endsection