@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm Danh Mục</h1>
@stop

@section('content')
 
    <form action="http://localhost:8000/admin/categories/" method="post">
        @csrf
        
        <x-adminlte-input name="name" label="Tên Danh Mục" placeholder="Tên danh mục" />
   
        <x-adminlte-input name="keyword" label="Từ Khoá" placeholder="Từ khoá" />
      
        <x-adminlte-input name="alias" label="URL" placeholder="url" />
       
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   

@stop