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
      
        <x-adminlte-input  value="{{$category->title}}" name="title" label="Tiêu Đề" placeholder="Tiêu đề" />

        <x-adminlte-textarea value="{{$category->description}}" name="description" label="Mô Tả" placeholder="Mô tả" />
   
        <x-adminlte-input value="{{$category->keyword}}" name="keyword" label="Từ Khoá" placeholder="Từ khoá" />
      
        <x-adminlte-input value="{{$category->alias}}" name="alias" label="URL" placeholder="url" />
    
        <x-adminlte-input value="{{$category->images}}" type="file"  name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
       
        <x-adminlte-input value="{{$category->status}}" type="checkbox" name="status" label="Trạng Thái" placeholder="Trạng thái" />
      
        <x-adminlte-input value="{{$category->sort}}" name="sort" label="Thứ Tự" placeholder="Sắp xếp" />
        
        <x-adminlte-input value="{{$category->home}}" type="checkbox" name="home" label="Hiển Thị Silde Trang Chủ" placeholder="Hiển thị slide trang chủ" />
        
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   
@stop