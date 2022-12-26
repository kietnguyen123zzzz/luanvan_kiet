@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm Sản Phẩm</h1>
@stop

@section('content')
    <form action="http://localhost:8000/admin/products/" method="post">
        @csrf
    
        <x-adminlte-input name="name" label="Tên Sản Phẩm" placeholder="Tên sản phẩm" />
        <label>Mô tả </label>
        <x-adminlte-textarea name="description" placeholder="Mô tả" />
        <label>Nội dung</label>
        <x-adminlte-textarea name="content" placeholder="Nội dung" />
        <label>Từ khoá </label>
        <x-adminlte-input name="keyword" placeholder="Từ khoá" />
        <label>URL </label>
        <x-adminlte-input name="alias" placeholder="url" />
        <x-adminlte-input type="file"  name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
        <label>Giá </label>
        <x-adminlte-input name="price" placeholder="Giá" />
        <label>Số lượng kho </label>
        <x-adminlte-input name="stock" placeholder="Số lượng kho" />
        <label>Tối thiểu </label>
        <x-adminlte-input name="minium" placeholder="Tối thiểu" />
        <label>Trạng thái </label>
        <x-adminlte-input name="status" placeholder="Trạng thái" />
        <label>Thứ tự </label>
        <x-adminlte-input name="sort" placeholder="Sắp xếp" />
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form> 
@stop