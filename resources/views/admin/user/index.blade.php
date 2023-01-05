@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tài Khoản</h1>
 
@stop

@section('content')
        {{-- Setup data for datatables --}}
        @php
        $heads = [
            'ID',
            'Username',
            'Mật khẩu',
            'Email',
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
        ];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        
        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered compressed>
        <a href="http://localhost:8000/admin/users/create">
             <button class="btn btn-xs btn-default text-teal   shadow" title="Details">
                    <i class="fa fa-plus "></i>
            </button> 
        </a>  
       
            @foreach($users as $user)
                <tr>
                    <td>{{$user->user_id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <nobr>
                            <a href="/admin/users/{{$user->user_id}}/edit">
                                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                            </a>
                            <form method="post" action="/admin/users/{{$user->user_id}}" >
                                @method('delete')
                                @csrf
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </nobr>

                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
@stop