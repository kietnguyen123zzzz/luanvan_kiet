@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sửa Danh Mục</h1>
@stop

@section('content')
<form action="http://localhost:8000/admin/categories/{{$category->id}}/" method="post">
        @csrf
        @method("PUT")
        <x-adminlte-input  value="{{$category->name}}" name="name" label="Tên Danh Mục" placeholder="Tên danh mục" />
   
        <x-adminlte-input value="{{$category->keyword}}" name="keyword" label="Từ Khoá" placeholder="Từ khoá" />
      
        <x-adminlte-input value="{{$category->alias}}" name="alias" label="URL" placeholder="url" />
    
        
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   
@stop