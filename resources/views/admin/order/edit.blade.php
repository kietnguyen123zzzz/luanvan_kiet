@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sửa đơn hàng</h1>
@stop

@section('content')
<form action="http://localhost:8000/admin/orders/{{$order->id}}/" method="post">
        @csrf
        @method("PUT")
        <x-adminlte-input value="{{$order->name}}" name="name" label="Tên " placeholder="Tên " />
   
        <x-adminlte-input  value="{{$order->address}}" name="address" label="Địa chỉ" placeholder="Địa chỉ" />
        
        <x-adminlte-input  value="{{$order->price}}" name="price" label="Giá" placeholder="Giá" />
        
        <x-adminlte-input  value="{{$order->phone}}" name="phone" label="Số điện thoại" placeholder="Số điện thoại" />

        <x-adminlte-input  value="{{$order->email}}" name="email" label="email" placeholder="email" />
        
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   
@stop