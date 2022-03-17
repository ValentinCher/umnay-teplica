@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>График полива</h1>
@stop

@section('content')
<div>

</div>


<div id="graph">
<div class="mb-2">
    <div class="form-group mb-3">
        <select class="form-control" id="inlineFormCustomSelectPref">
            <option value="1" selected>График удобрения</option>
        </select>
    </div>
</div>
<div>
<div id="finances-div"></div>
<?= $lava->render('BarChart', 'water', 'finances-div') ?>
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