@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Danh mục loại sản phẩm</h1>
 
@stop

@section('content')
        {{-- Setup data for datatables --}}
        @php
        $heads = [
            'ID',
            'Name',
            'Phone',
            'Email',
            'Địa chỉ',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        
        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <a href="http://localhost:8000/admin/orders/create">
             <button class="btn btn-xs btn-default text-teal   shadow" title="Details">
                    <i class="fa fa-plus "></i>
            </button> 
        </a>  
       
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>
                        <nobr>
                            <a href="/admin/orders/{{$order->id}}/edit">
                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <form method="post" action="/admin/orders/{{$order->id}}" >
                                @method('delete')
                                @csrf
                                <button  class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                       
                        </nobr>

                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
@stop