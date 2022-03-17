@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Удобрения</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header">Удобрение Биогумус рассадный</h5>
            <div class="card-body">
                <h5 class="card-title">Количество (г): 20</h5>
                <div class="card-text">Дата поставки: 15.10.20</div>
                <div class="card-text">Посаженные растения: Помидоры</div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Комплект минеральных удобрений</h5>
            <div class="card-body">
                <h5 class="card-title">Количество (л): 1</h5>
                <div class="card-text">Дата поставки: 22.10.20</div>
                <div class="card-text">Посаженные растения: Помидоры</div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Сульфат магния</h5>
            <div class="card-body">
                <h5 class="card-title">Количество (г): 900</h5>
                <div class="card-text">Дата поставки: 08.11.20</div>
                <div class="card-text">Посаженные растения: Кабачки</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="/add-felts" class="btn btn-primary">Добавить удобрения</a>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop