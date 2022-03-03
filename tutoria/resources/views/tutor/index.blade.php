@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
    <button type="button" class="close" data-dimiss="alert" arial-label="Close">
    <span aria-hidden="true">&times;</span>
</button> 
</div>
@endif




<a href="{{url('tutor/create')}}" class="btn btn-success">Registrar nuevo tutor</a>
<br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($tutors as $tutor)
        <tr>
            <td>{{$tutor->id}}</td>
            <td>{{$tutor->Nombre}}</td>
            <td>{{$tutor->Apellidos}}</td>
            <td>{{$tutor->Correo}}</td>
            <td>{{$tutor->Contraseña}}</td>
            <td>
            <a href="{{url('/tutor/'.$tutor->id.'/edit')}}"class="btn btn-warning">
                Editar
            </a>
            
            |
                <form action="{{ url('/tutor/'.$tutor->id)}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field ('DELETE')}}
                    <input class="btn btn-danger"type="submit" onclick="return confirm('deseas borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
{!! $tutors->links() !!}
</div>
@endsection
