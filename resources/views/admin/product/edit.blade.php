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
       
        <x-adminlte-textarea value="{{$product->description}}" label="Mô Tả" name="description" placeholder="Mô tả" />
       
        <x-adminlte-textarea value="{{$product->content}}" label="Nội Dung" name="content" placeholder="Nội dung" />
        
        <x-adminlte-input value="{{$product->keywork}}" label="Từ Khoá" name="keyword" placeholder="Từ khoá" />
    
        <x-adminlte-input value="{{$product->alias}}" label="URL" name="alias" placeholder="url" />

        <x-adminlte-input value="{{$product->images}}" label="Images" type="file"  name="images" label="Hình Ảnh"  placeholder="Hình ảnh" />
       
        <x-adminlte-input value="{{$product->price}}" label="Giá" name="price" placeholder="Giá" />
     
        <x-adminlte-input value="{{$product->stock}}" label="Số Lượng" name="stock" placeholder="Số lượng kho" />
       
        <x-adminlte-input value="{{$product->minium}}" label="Tối Thiểu" name="minium" placeholder="Tối thiểu" />
     
        <x-adminlte-input value="{{$product->status}}" label="Trạng Thái" name="status" placeholder="Trạng thái" />
      
        <x-adminlte-input value="{{$product->sort}}" label="Sắp xếp" name="sort" placeholder="Sắp xếp" />

        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form> 
@stop