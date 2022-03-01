formulario de los datos en comun entre el create y el edit
<label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" value="{{isset($tutor->Nombre)?$tutor->Nombre:''}}" id="Nombre">
    <br>
    <label for="Apellidos"> Apellidos </label>
    <input type="text" name="Apellidos" value="{{isset($tutor->Apellidos)?$tutor->Apellidos:''}}" id="Apellidos">
    <br>
    <label for="Correo"> Correo </label>
    <input type="text" name="Correo" value="{{isset($tutor->Correo)?$tutor->Correo:''}}" id="Correo">
    <br>
    <label for="Contraseña"> Contraseña </label>
    <input type="text" name="Contraseña" value="{{isset($tutor->Contraseña)?$tutor->Contraseña:'' }}" id="Contraseña">
    <br>
    <input type="submit" value="Guardar datos">
    <a href="{{url('empleado/empleado')}}">regresar</a>
