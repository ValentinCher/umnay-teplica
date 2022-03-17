@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Теплица #2</h1>
@stop

@section('content')
<div id="graph">
<div class="mb-2">
    <div class="form-group mb-3">
        <select class="form-control" id="inlineFormCustomSelectPref">
            <option value="1" selected>Температура</option>
        </select>
    </div>
</div>
<div>
<div id="finances-div"></div>
<?= $lava->render('ComboChart', 'Finances', 'finances-div') ?>
</div>

<div class="row">
    <div class="col">
        <a href="/home" class="btn m-2 btn-primary">К теплицам</a>
    </div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop