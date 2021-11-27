@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section>
<div class="container">
  <div class="row">
    <div class="col-sm">
    <input type="text" id="input" placeholder="Nombre">
    </div>
    <div class="col-sm">
    <input type="text" id="input" placeholder="Status">
    </div>
    <div class="col-sm">
            <select name="" id="">
                <option selected disabled="">Carrera</option>
                <option value="">Ing. Sistemas</option>
            </select>
   
    </div>
    <div class="col-sm">
    <a href="pagina2.blade.php"><button class="btn btn-primary" type="button">Nuevo</button>
    </div>
  </div>
</div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop