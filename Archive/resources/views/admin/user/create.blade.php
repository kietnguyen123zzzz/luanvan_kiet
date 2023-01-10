@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<form action="http://localhost:8000/admin/users/" method="post">
        @csrf
        
        <x-adminlte-input name="username" label="Tài khoản" placeholder="Tài khoản" />
      
        <x-adminlte-input name="password" label="Mật khẩu" placeholder="Mật khẩu" />

        <x-adminlte-input name="name" label="Tên" placeholder="Tên" />
   
        <x-adminlte-input name="email" label="email" placeholder="email" />
      
        <x-adminlte-input name="remember_token" label="Ghi nhớ" placeholder="remember_token" />
       
        <x-adminlte-input name="theme"  label="Vai trò" placeholder="theme" />
      
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   
@stop