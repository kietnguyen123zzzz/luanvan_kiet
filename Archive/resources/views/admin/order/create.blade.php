@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm đơn hàng</h1>
@stop

@section('content')
 
    <form action="http://localhost:8000/admin/orders/" method="post">
        @csrf
        
        <x-adminlte-input name="name" label="Tên " placeholder="Tên " />
   
        <x-adminlte-input name="address" label="Địa chỉ" placeholder="Địa chỉ" />
      
        <x-adminlte-input name="price" label="Giá" placeholder="Giá" />

        <x-adminlte-input name="phone" label="Số điện thoại" placeholder="Số điện thoại" />

        <x-adminlte-input name="mail" label="mail" placeholder="mail" />
       
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   

@stop