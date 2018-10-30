
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="clave" class="col-form-label text-md-right">Clave</label>
                            <div class="col-md-12">
                                <input id="clave" type="text" class="form-control{{ $errors->has('clave') ? ' is-invalid' : '' }}" name="clave" value="{{ old('clave') }}" required autofocus>
                                @if ($errors->has('clave'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('clave') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">Nombre</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidoP" class="col-form-label text-md-right">Apellido Paterno</label>
                            <div class="col-md-12">
                                <input id="apellidoP" type="text" class="form-control{{ $errors->has('apellidoP') ? ' is-invalid' : '' }}" name="apellidoP" value="{{ old('apellidoP') }}" required autofocus>
                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidoM" class="col-form-label text-md-right">Apellido Materno</label>
                            <div class="col-md-12">
                                <input id="apellidoM" type="text" class="form-control{{ $errors->has('apellidoM') ? ' is-invalid' : '' }}" name="apellidoM" value="{{ old('apellidoM') }}" required autofocus>
                                @if ($errors->has('apellidoM'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellidoM') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">Contraseña</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar nuevo usuario',['class'=>'btn btn-primary form-control color02'])!!}
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
</div>
