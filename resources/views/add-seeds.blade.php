@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Теплицы</h1>
@stop

@section('content')
    <form action="{{ route('add-seeds') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label>Наименование</label>
                <input name="name" type="text" required class="form-control"/>
            </div>
            <div class="col-md-6 col-sm-12">
                <label>Код</label>
                <input name="code" type="number" required class="form-control"/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <label>Дата поставки</label>
                <input name="arrive_date" type="date" required class="form-control"/>
            </div>
            <div class="col-md-6 col-sm-12">
                <label>Количество</label>
                <input name="number" type="number" required class="form-control"/>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>

        <a href="{{ route('home') }}" class="btn btn-danger mt-3">Назад</a>

    </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop