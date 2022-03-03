
<h1>{{$modo}} tutor</h1>

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
    <input type="text" class="form-control" name="Nombre" value="{{isset($tutor->Nombre)?$tutor->Nombre:old('Nombre')}}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="Apellidos"> Apellidos </label>
    <input type="text" class="form-control" name="Apellidos" value="{{isset($tutor->Apellidos)?$tutor->Apellidos:old('Apellidos')}}" id="Apellidos">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo"> Correo </label>
    <input type="text" class="form-control" name="Correo" value="{{isset($tutor->Correo)?$tutor->Correo:old('Correo')}}" id="Correo">
    <br>
    </div>


    <div class="form-group">
    <input class="btn btn-success" type="submit" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{url('/tutor')}}">regresar</a>
    </div>
