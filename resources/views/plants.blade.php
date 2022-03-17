@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Растения</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header">Помидоры</h5>
            <div class="card-body">
                <h5 class="card-title">Количество: 20</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Тыква</h5>
            <div class="card-body">
                <h5 class="card-title">Количество: 20</h5>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop