@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Danh mục sản phẩm</h1>
@stop

@section('content')
{{-- Setup data for datatables --}}
        @php
        $heads = [
            'ID',
            'Name',
            'Giá',
            'Số lượng',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <a href="http://localhost:8000/admin/products/create">
             <button class="btn btn-xs btn-default text-teal   shadow" title="Details">
                    <i class="fa fa-plus "></i>
            </button> 
        </a>  
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>
                        <nobr>
                            <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>
                        
                            <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </button>
                       
                            <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>
                        </nobr>

                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
@stop