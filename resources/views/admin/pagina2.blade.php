@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

        <div class="btn-container">
            <button class="btn btn-primary" type="button">Agregar vacantes</button>
        <form method= "POST" action="">
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            

                <input type="text" name="nombre" id="nombre"><br><br>
            <input type="text" name="representante" id="representante"><br><br>
            <select name="estado" id="estado">
                <option value=""> Estado</option>
                <option value="Aguascalientes"> Aguascalientes </option>
                <option value="Baja California"> Baja California</option>
                <option value="Baja California Sur"> Baja California Sur </option>
                <option value="Campeche"> Campeche </option>
                <option value="Chiapas "> Chiapas  </option>
                <option value="Chihuahua"> Chihuahua</option>
                <option value="Ciudad de México"> Ciudad de México</option>
                <option value="Coahuila"> Coahuila </option>
                <option value="Colima"> Colima  </option>
                <option value="Durango"> Durango</option>
                <option value="Guanajuato"> Guanajuato </option>
                <option value="Guerrero"> Guerrero </option>
                <option value="Hidalgo"> Hidalgo </option>
                <option value="Jalisco "> Jalisco </option>
                <option value="Veracruz"> Veracruz </option>
                <option value="Yucatán"> Yucatán</option>
                <option value=""> Zacatecas </option>


            </select><br><br>
            <select name="ciudad" id="ciudad">
                <option value=""> Ciudad  </option>
                <option value="Campeche"> Campeche </option>
                <option value="Cancún"> Cancún </option>
                <option value="Chetumal"> Chetumal </option>
                <option value="Chihuahua"> Chihuahua</option>
                <option value="Ciudad del Carmen"> Ciudad del Carmen</option>
                <option value="Colima"> Colima</option>
                <option value="Durango"> Durango</option>
                <option value="Orizaba"> Orizaba</option>
                <option value="Playa del Carmen"> Playa del Carmen</option>
                <option value="Veracruz"> Veracruz</option>
                <option value=" Villahermosa"> Villahermosa</option>
            </select><br><br>
            <button class="btn btn-primary" type="button">Agregar departamento</button><br><br>
        

            @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop