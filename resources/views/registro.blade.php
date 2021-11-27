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
    <input type="text" id="input" placeholder="Nombre de la empresa"><br></br>
    <input type="text" id="input" placeholder="Representante">
    </div>

    <div class="col-sm">
  
    </div>

    <div class="col-sm">
    <button class="btn btn-primary" type="button">guardar</button>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop