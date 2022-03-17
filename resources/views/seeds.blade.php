@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Семена</h1>
@stop

@section('content')
<div class="row">
@foreach ($seeds as $seed)
    <div class="col-4">
        <div class="card">
            <h5 class="card-header">{{ $seed->name }}</h5>
            <div class="card-body">
                <h5 class="card-title">Количество: {{ $seed->number }}</h5>
                <div class="card-text">Дата поставки: {{ $seed->arrive_date }}</div>
                <div class="mt-2 mb-2"><button class="btn w-100 btn-danger btn-modal" data-toggle="modal" data-id="{{ $seed->id }}" data-target="#exampleModal">Высадка</button></div>
            </div>
        </div>
    </div>
@endforeach
</div>

<div class="row">
    <div class="col">
        <a href="/add-seeds" class="btn btn-primary">Добавить партию семян</a>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Высадка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('add-rassada') }}" method="POST"></form>
      <div class="modal-body">
        <input type="hidden" name="id">

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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить</button>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop