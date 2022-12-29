@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Sửa Sản Phẩm</h1>
@stop

@section('content')
<form action="http://localhost:8000/admin/products/{{$product->id}}" method="post">
        @csrf
        @method("PUT")
        <x-adminlte-input value="{{$product->name}}" name="name" label="Tên Sản Phẩm" placeholder="Tên sản phẩm" />

        <x-adminlte-textarea   label="Mô tả" name="keyword" placeholder="Mô tả" >{{$product->keyword}}</x-adminlte-textarea>

        <x-adminlte-textarea  label="Nội Dung" name="content" placeholder="Nội dung" >{{$product->content}}</x-adminlte-textarea>

        <x-adminlte-select value="{{$product->category_id}}" label="Chọn Danh Mục"  name="category_id">
            @foreach($categories as $category)
            <option  value="{{$category->id}}">{{$category->name}}</option>
            @endforeach        
        </x-adminlte-select>
    
        <x-adminlte-input value="{{$product->alias}}" label="URL" name="alias" placeholder="url" />

        <x-adminlte-input value="{{$product->images}}" label="Images"   name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
       
        <x-adminlte-input value="{{$product->price}}" label="Giá" name="price" placeholder="Giá" />

        <x-adminlte-input value="{{$product->discount}}" label="Giá giảm" name="discount" placeholder="Giá" />
     
        <x-adminlte-input value="{{$product->stock}}" label="Số Lượng" name="stock" placeholder="Số lượng kho" />
       
    
     
        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form> 
@stop