@extends('layouts.layout')
@section('titulo', 'Audi')

@section('Navbar')
@endsection

@section('contenido')
<br>
<div class="container" style="background-color: blue;">
    <br><br>
    <table class="table table-bordered table-secondary">
        <tbody class="normal">
            <!--con el foreach cargo la vista de la consulta 
            ($equipos es la tabla y $equipo la consulta del controller)-->
            @foreach($modelo as $Modelo)
            <tr>
                <th scope="row">Modelo</th>
                <td>{{$Modelo->Modelo}}</td>
            </tr>
            <br>
            <tr>
                <th scope="row">Tipo de Carrocería</th>
                <td>{{$Modelo->Tipo}}</td>
            </tr>
            <br>
            <tr>
                <th scope="row">Año de Producción</th>
                <td>{{$Modelo->Año}}</td>
            </tr>
            <br>
            <tr>
                <th scope="row">Numero de Puertas</th>
                <td>{{$Modelo->Puertas}}</td>
            </tr>
            <br>
            @endforeach
        </tbody>
    </table>
    <br>
</div>
@endsection