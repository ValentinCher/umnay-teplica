@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Теплицы</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #1</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 100</h5>
                <div class="card-text">Дата высадки: 15.10.20</div>
                <div class="card-text">Посаженные растения: Помидоры</div>
                <div class="mt-2 mb-2"><a href="/microclimat" class="btn w-100 btn-danger">Журнал микроклимата</a></div>
                <div class="mb-2"><a href="/felts" class="btn w-100 btn-success">Журнал удобрения</a></div>
                <div class="mb-2"><a href="/grow" class="btn w-100 btn-primary">Журнал хода выращивания</a></div>
                <div class="mb-2"><a href="/water" class="btn w-100 btn-warning">Журнал полива</a></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #2</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 120</h5>
                <div class="card-text">Дата высадки: 22.10.20</div>
                <div class="card-text">Посаженные растения: Помидоры</div>
                <div class="mt-2 mb-2"><a href="/microclimat" class="btn w-100 btn-danger">Журнал микроклимата</a></div>
                <div class="mb-2"><a href="/felts" class="btn w-100 btn-success">Журнал удобрения</a></div>
                <div class="mb-2"><a href="/grow" class="btn w-100 btn-primary">Журнал хода выращивания</a></div>
                <div class="mb-2"><a href="/water" class="btn w-100 btn-warning">Журнал полива</a></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #3</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 140</h5>
                <div class="card-text">Дата высадки: 08.11.20</div>
                <div class="card-text">Посаженные растения: Кабачки</div>
                <div class="mt-2 mb-2"><a href="/microclimat" class="btn w-100 btn-danger">Журнал микроклимата</a></div>
                <div class="mb-2"><a href="/felts" class="btn w-100 btn-success">Журнал удобрения</a></div>
                <div class="mb-2"><a href="/grow" class="btn w-100 btn-primary">Журнал хода выращивания</a></div>
                <div class="mb-2"><a href="/water" class="btn w-100 btn-warning">Журнал полива</a></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #4</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 200</h5>
                <div class="card-text">Дата высадки: 15.11.20</div>
                <div class="card-text">Посаженные растения: Томат черри</div>
                <div class="mt-2 mb-2"><a href="/microclimat" class="btn w-100 btn-danger">Журнал микроклимата</a></div>
                <div class="mb-2"><a href="/felts" class="btn w-100 btn-success">Журнал удобрения</a></div>
                <div class="mb-2"><a href="/grow" class="btn w-100 btn-primary">Журнал хода выращивания</a></div>
                <div class="mb-2"><a href="/water" class="btn w-100 btn-warning">Журнал полива</a></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #5</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 40</h5>
                <div class="card-text">Дата высадки: 20.12.20</div>
                <div class="card-text">Посаженные растения: Перец</div>
                <div class="mt-2 mb-2"><a href="/microclimat" class="btn w-100 btn-danger">Журнал микроклимата</a></div>
                <div class="mb-2"><a href="/felts" class="btn w-100 btn-success">Журнал удобрения</a></div>
                <div class="mb-2"><a href="/grow" class="btn w-100 btn-primary">Журнал хода выращивания</a></div>
                <div class="mb-2"><a href="/water" class="btn w-100 btn-warning">Журнал полива</a></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <h5 class="card-header">Теплица #6</h5>
            <div class="card-body">
                <h5 class="card-title">Количество посадочных мест: 80</h5>
                <div class="card-text">Дата высадки: -</div>
                <div class="card-text">Посаженные растения: -</div>
                <div class="mt-2 mb-2"><a href="/plants" class="btn w-100 btn-danger">Высадка</a></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="/add-home" class="btn btn-primary">Добавить теплицу</a>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop