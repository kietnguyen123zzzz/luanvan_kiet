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
            'Số thứ tự',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        
        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <a href="http://localhost:8000/admin/categories/create">
             <button class="btn btn-xs btn-default text-teal   shadow" title="Details">
                    <i class="fa fa-plus "></i>
            </button> 
        </a>  
       
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->sort}}</td>
                    <td>
                        <nobr>
                            <a href="/admin/categories/{{$category->id}}/edit">
                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <form method="post" action="/admin/categories/{{$category->id}}" >
                                @method('delete')
                                @csrf
                                <button  class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                       
                            <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>
                        </nobr>

                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
@stop