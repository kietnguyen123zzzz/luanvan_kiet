@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm Danh Mục</h1>
@stop

@section('content')
 
    <form action="http://localhost:8000/admin/categories/" method="post">
        @csrf
        
        <x-adminlte-input name="name" label="Tên Danh Mục" placeholder="Tên danh mục" />
      
        <x-adminlte-input name="title" label="Tiêu Đề" placeholder="Tiêu đề" />

        <x-adminlte-textarea name="description" label="Mô Tả" placeholder="Mô tả" />
   
        <x-adminlte-input name="keyword" label="Từ Khoá" placeholder="Từ khoá" />
      
        <x-adminlte-input name="alias" label="URL" placeholder="url" />
    
        <x-adminlte-input type="file"  name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
       
        <x-adminlte-input type="checkbox" name="status" label="Trạng Thái" placeholder="Trạng thái" />
      
        <x-adminlte-input name="sort" label="Thứ Tự" placeholder="Sắp xếp" />
        
        <x-adminlte-input type="checkbox" name="home" label="Hiển Thị Silde Trang Chủ" placeholder="Hiển thị slide trang chủ" />
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>

     </form>   

@stop