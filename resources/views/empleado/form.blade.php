    <h1>{{$modo}} Empleados</h1>
    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group my-3">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" class="form-control" name="Nombre"
        value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" id="Nombre">
    </div>
    
    
    <div class="form-group my-3">
        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text" name="ApellidoPaterno" class="form-control" name="ApellidoPaterno"
        value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
    </div>
    
    
    <div class="form-group my-3">
        <label for="ApellidoMaterno">Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" class="form-control" name="ApellidoMaterno"
        value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
    </div>
    
    
    <div class="form-group my-3">
        <label for="Correo">Correo</label>
        <input type="email" name="Correo" class="form-control" name="Correo"
        value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" id="Correo">
    </div>
    

    <div class="form-group my-3">
        @if (isset($empleado->Foto))
            <img class="img-thumbnail img-fluid my-3" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="foto"/>
        @endif
        <input type="file" name="Foto" class="form-control" id="Foto" name="Foto">
    </div>
    
    <br>
    <input type="submit" class="btn btn-success" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{url('empleado/')}}">Regresar</a>
    <br>

    