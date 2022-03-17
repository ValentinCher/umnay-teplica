@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Теплица #2</h1>
@stop

@section('content')
<div id="pnlTemp" class="pnl-visible">
<form></form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Минимальная температура внутри, &#8451;:</label>
                <input id="edtMinInsideTemp" type="number" class="form-control" placeholder="">
                <span id="errminInsideTemp"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Максимальная температура внутри, &#8451;:</label>
                <input id="edtMaxInsideTemp" type="number" class="form-control" placeholder="">
                <span id="errmaxInsideTemp"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Минимальная температура снаружи, &#8451;:</label>
                <input id="edtMinOutsideTemp" type="number" class="form-control" placeholder="">
                <span id="errminOutsideTemp"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Максимальная температура снаружи, &#8451;:</label>
                <input id="edtMaxOutsideTemp" type="number" class="form-control" placeholder="">
                <span id="errmaxOutsideTemp"></span>
            </div>
        </div>
    </div>
</div>

<div id="pnlHumidity" class="pnl-visible">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Минимальная влажность внутри, %:</label>
                <input id="edtMinInsideHumidity" type="number" class="form-control" placeholder="">
                <span id="errminInsideHumidity"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Максимальная влажность внутри, %:</label>
                <input id="edtMaxInsideHumidity" type="number" class="form-control" placeholder="">
                <span id="errmaxInsideHumidity"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Минимальная влажность снаружи, %:</label>
                <input id="edtMinOutsideHumidity" type="number" class="form-control" placeholder="">
                <span id="errminOutsideHumidity"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Максимальная влажность снаружи, %:</label>
                <input id="edtMaxOutsideHumidity" type="number" class="form-control" placeholder="">
                <span id="errmaxOutsideHumidity"></span>
            </div>
        </div>
    </div>
</div>

<div id="pnlRest" class="pnl-visible">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Интерсивность освещения:</label>
                <input id="edtLightIntensity" type="number" class="form-control" placeholder="">
                <span id="errlightIntensity"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Минимальный уровень CO2, %:</label>
                <input id="edtMinCo2Levels" type="number" class="form-control" placeholder="">
                <span id="errminCo2Levels"></span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Максимальный уровень CO2, %:</label>
                <input id="edtMaxCo2Levels" type="number" class="form-control" placeholder="">
                <span id="errmaxCo2Levels"></span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="/home" class="btn m-2 btn-secondary">К теплицам</a>
        <a href="/env-graph" class="btn m-2 btn-info">Графики</a>
        <a href="/home" class="btn m-2 btn-primary">Сохранить</a>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop