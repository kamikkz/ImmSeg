
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body ">

                        <div class="card DatosDelVehiculo">
                            <div class="card-header"><h4 align="right"><strong>Datos del Vehiculo</strong></h4></div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="chofer" class="col-form-label text-md-right">Nombre del chofer</label>
                                    <div class="col-md-12">
                                        <input id="chofer" type="text" class="form-control{{ $errors->has('chofer') ? ' is-invalid' : '' }}" name="chofer" value="{{ old('chofer') }}" required autofocus>
                                        @if ($errors->has('chofer'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('chofer') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="gafeteV" class="col-form-label text-md-right">Gafete</label>
                                        <input id="gafeteV" type="text" class="form-control{{ $errors->has('gafeteV') ? ' is-invalid' : '' }}" name="gafeteV" value="{{ old('gafeteV') }}" required autofocus>
                                        @if ($errors->has('gafeteV'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gafeteV') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tipo" class="col-form-label text-md-right">Tipo</label>
                                        <input id="tipo" type="text" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" name="tipo" value="{{ old('tipo') }}" required autofocus>
                                        @if ($errors->has('tipo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tipo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="placa" class="col-form-label text-md-right">Placas</label>
                                        <input id="placa" type="text" class="form-control{{ $errors->has('placa') ? ' is-invalid' : '' }}" name="placa" value="{{ old('placa') }}" required autofocus>
                                        @if ($errors->has('placa'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('placa') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="card Tramitador">
                            <div class="card-header"><h4 align="right"><strong>Tramitador</strong></h4></div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="nombre" class="col-form-label text-md-right">Nombre del tramitador</label>
                                        <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gafeteT" class="col-form-label text-md-right">Gafete</label>
                                        <input id="gafeteT" type="text" class="form-control{{ $errors->has('gafeteT') ? ' is-invalid' : '' }}" name="gafeteT" value="{{ old('gafeteT') }}" required autofocus>
                                        @if ($errors->has('gafeteT'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gafeteT') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="card Carga">
                            <div class="card-header"><h4 align="right"><strong>Carga</strong></h4></div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="operador" class="col-form-label text-md-right">Operador IMM</label>
                                    <div class="col-md-12">
                                        <input id="operador" type="text" class="form-control{{ $errors->has('operador') ? ' is-invalid' : '' }}" name="operador" value="{{ old('operador') }}" required autofocus>
                                        @if ($errors->has('operador'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('operador') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="g_master" class="col-form-label text-md-right">Guia Master</label>
                                        <input id="g_master" type="text" class="form-control{{ $errors->has('g_master') ? ' is-invalid' : '' }}" name="g_master" value="{{ old('g_master') }}" required autofocus>
                                        @if ($errors->has('g_master'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('g_master') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="piezas" class="col-form-label text-md-right">Piezas</label>
                                        <input id="piezas" type="text" class="form-control{{ $errors->has('piezas') ? ' is-invalid' : '' }}" name="piezas" value="{{ old('piezas') }}" required autofocus>
                                        @if ($errors->has('piezas'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('piezas') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="kilos" class="col-form-label text-md-right">Kilos</label>
                                        <input id="kilos" type="text" class="form-control{{ $errors->has('kilos') ? ' is-invalid' : '' }}" name="kilos" value="{{ old('kilos') }}" required autofocus>
                                        @if ($errors->has('kilos'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('kilos') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="card Hora">
                            <div class="card-header"><h4 align="right"><strong>Hora</strong></h4></div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="hr_entrada" class="col-form-label text-md-right">Hora de Entrada</label>
                                        <input id="hr_entrada" type="time" class="form-control{{ $errors->has('hr_entrada') ? ' is-invalid' : '' }}" name="hr_entrada" value="{{ old('hr_entrada') }}" required autofocus>
                                        @if ($errors->has('hr_entrada'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hr_entrada') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hr_salida" class="col-form-label text-md-right">Hora de Salida</label>
                                        <input id="hr_salida" type="time" class="form-control{{ $errors->has('hr_salida') ? ' is-invalid' : '' }}" name="hr_salida" value="{{ old('hr_salida') }}" autofocus>
                                        @if ($errors->has('hr_salida'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hr_salida') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        @csrf
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar nueva entrada',['class'=>'btn btn-primary form-control'])!!}
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
