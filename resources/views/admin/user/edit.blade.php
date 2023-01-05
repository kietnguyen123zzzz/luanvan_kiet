@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sửa Tài Khoản</h1>
@stop

@section('content')
<form action="http://localhost:8000/admin/users/{{$user->user_id}}/" method="post">
        @csrf
        @method("PUT")
        <x-adminlte-input value="{{$user->username}}" name="username" label="Tài khoản" placeholder="Tài khoản" />
      
        <x-adminlte-input value="{{$user->password}}" name="password" label="Mật khẩu" placeholder="Mật khẩu" />

        <x-adminlte-input value="{{$user->name}}" name="name" label="Tên" placeholder="Tên" />
   
        <x-adminlte-input value="{{$user->email}}" name="email" label="email" placeholder="email" />
      
        <x-adminlte-input value="{{$user->remember_token}}" name="remember_token" label="Ghi nhớ" placeholder="remember_token" />
       
        <x-adminlte-input value="{{$user->theme}}" name="theme"  label="Vai trò" placeholder="theme" />
      
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   
@stop