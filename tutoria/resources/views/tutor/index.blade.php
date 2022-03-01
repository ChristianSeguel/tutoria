Mostrar kista de tutores
<a href="{{url('empleado/create')">Registrar nuevo tutor</a>
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
            <a href="{{url('/tutor/'.$tutor->id.'/edit')}}">
                Editar
            </a>
            a    
            | 
                <form action="{{ url('/tutor/'.$tutor->id)}}" method="post">
                    @csrf
                    {{ method_field ('DELETE')}}
                    <input type="submit" onclick="return confirm('deseas borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
