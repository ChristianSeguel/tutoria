
<h1>{{$modo}} alumno</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($alumno->Nombre)?$alumno->Nombre:old('Nombre')}}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="Apellidos"> Apellidos </label>
    <input type="text" class="form-control" name="Apellidos" value="{{isset($alumno->Apellidos)?$alumno->Apellidos:old('Apellidos')}}" id="Apellidos">
    <br>
</div>

<div class="form-group">
    <label for="Correo"> Correo </label>
    <input type="text" class="form-control" name="Correo" value="{{isset($alumno->Correo)?$alumno->Correo:old('Correo')}}" id="Correo">
    <br>
</div>


<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{url('/alumno')}}">regresar</a>
</div>
