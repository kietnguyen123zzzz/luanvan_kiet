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
        <x-adminlte-textarea name="keyword" placeholder="Mô tả" />
        <label>Nội dung</label>
        <x-adminlte-textarea name="content" placeholder="Nội dung" />
        
        <x-adminlte-select label="Chọn Danh Mục"  name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach        
        </x-adminlte-select>
        <label>URL </label>
        <x-adminlte-input name="alias" placeholder="url" />
        <x-adminlte-input   name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
        <label>Giá </label>
        <x-adminlte-input name="price" placeholder="Giá" />
        <label>Gía giảm </label>
        <x-adminlte-input name="discount" placeholder="Giá" />
        <label>Số lượng kho </label>
        <x-adminlte-input name="stock" placeholder="Số lượng kho" />
      
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form> 
@stop