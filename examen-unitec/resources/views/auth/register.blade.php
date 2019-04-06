@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre(s)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellidop') ? ' has-error' : '' }}">
                            <label for="apellidop" class="col-md-4 control-label">Apellido paterno</label>
                            <div class="col-md-6">
                                <input id="apellidop" type="text" class="form-control" name="apellidop" value="{{ old('apellidop') }}" required autofocus>
                                @if ($errors->has('apellidop'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidop') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellidom') ? ' has-error' : '' }}">
                            <label for="apellidom" class="col-md-4 control-label">Apellido materno</label>
                            <div class="col-md-6">
                                <input id="apellidom" type="text" class="form-control" name="apellidom" value="{{ old('apellidom') }}" required autofocus>
                                @if ($errors->has('apellidom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label for="gender" class="col-md-4 control-label">Genero</label>
                            <div class="col-md-6">
                            <select id="gender" class="form-control" name="gender">
                                <option value="0" selected>Seleccionar</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>
                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control" name="edad" value="{{ old('edad') }}" required autofocus>
                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('civil_state') ? ' has-error' : '' }}">
                        <label for="civil_state" class="col-md-4 control-label">Estado civil</label>
                            <div class="col-md-6">
                            <select id="civil_state" class="form-control" name="civil_state">
                                <option value="0" selected>Seleccionar</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
                            </select>
                            @if ($errors->has('civil_state'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('civil_state') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('interest') ? ' has-error' : '' }}">
                        <label for="interest" class="col-md-4 control-label">Nivel de interes</label>
                            <div class="col-md-6">
                            <select id="interest" class="form-control" name="interest">
                                <option value="0" selected>Seleccionar</option>
                                <option value="1">Preparatoria</option>
                                <option value="2">Licenciatura</option>
                                <option value="3">Posgrado</option>
                            </select>
                            @if ($errors->has('interest'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('interest') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Dirección de correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        

</div>

@endsection
