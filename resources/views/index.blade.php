@extends('templates.principal')

@section('contenido')

<div class="divcard">
    <form class="col-sm-6" style="padding-top: 30%; margin-left:10%" action="{{action([App\Http\Controllers\UsuariController::class,'login'])}}" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" id="username"  placeholder="Usuario" value="{{ old('usuari')}}" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Contraseña" value="{{ old('contrasenya')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

@endsection
