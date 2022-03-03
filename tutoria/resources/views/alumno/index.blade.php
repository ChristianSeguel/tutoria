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




        <a href="{{url('alumno/create')}}" class="btn btn-success">Registrar nuevo alumno</a>
        <br/>
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->Nombre}}</td>
                    <td>{{$alumno->Apellidos}}</td>
                    <td>{{$alumno->Correo}}</td>
                    <td>
                        <a href="{{url('/alumno/'.$alumno->id.'/edit')}}"class="btn btn-warning">
                            Editar
                        </a>

                        |
                        <form action="{{ url('/alumno/'.$alumno->id)}}" class="d-inline" method="post">
                            @csrf
                            {{ method_field ('DELETE')}}
                            <input class="btn btn-danger"type="submit" onclick="return confirm('deseas borrar?')" value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        {!! $alumnos->links() !!}
    </div>
@endsection
