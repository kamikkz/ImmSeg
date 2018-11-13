@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        {!! Form::open(['route' => 'vehicular_controls.store']) !!}
                        <h2>
                            <label for="hr_salida" class="col-form-label text-md-right">Registrar Hora de Salida:</label>
                            <input id="hr_salida" type="time" class="form-control{{ $errors->has('hr_salida') ? ' is-invalid' : '' }}" name="hr_salida" value="{{ old('hr_salida') }}" autofocus>
                            @if ($errors->has('hr_salida'))
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('hr_salida') }}</strong>
                                            </span>
                            @endif
                        </h2>
                        {!! Form::submit('Registrar nueva entrada',['class'=>'btn btn-primary form-control'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <a href="{{route('vehicular_controls.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <h3>Datos del registro</h3>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header DatosDelVehiculo">Datos del vehiculo</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <h5>Nombre del Chofer: <strong>{{$vehicularControl->chofer }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Gafete: <strong>{{$vehicularControl->gafeteV }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Tipo: <strong>{{$vehicularControl->tipo }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Placas: <strong>{{$vehicularControl->placa }}</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header Tramitador">Datos del Tramitador</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <h5>Nombre del tramitador <strong>{{$vehicularControl->nombre }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Gafete: <strong>{{$vehicularControl->gafeteT }}</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header Carga">Datos del vehiculo</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <h5>Nombre del Chofer: <strong>{{$vehicularControl->chofer }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Gafete: <strong>{{$vehicularControl->gafeteV }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Tipo: <strong>{{$vehicularControl->tipo }}</strong></h5>
                                        </div>
                                        <div class="row">
                                            <h5>Placas: <strong>{{$vehicularControl->placa }}</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Entrada</th>
                                <th>Salida</th>

                                <th>Nombre del chofer</th>
                                <th>Gafete</th>
                                <th>Tipo</th>
                                <th>Placas</th>

                                <th>Nombre</th>
                                <th>Gafete</th>

                                <th>Operador IMM</th>
                                <th>Guia MASTER</th>
                                <th>Piezas</th>
                                <th>Kilos</th>

                                <th>Turno</th>
                                <th>Guardia Revisor</th>
                                <th>Jefe en Turno</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$vehicularControl->hr_entrada }}</td>
                                    <td>{{$vehicularControl->chofer }}</td>
                                    <td>{{$vehicularControl->gafeteV }}</td>
                                    <td>{{$vehicularControl->tipo }}</td>
                                    <td>{{$vehicularControl->placa }}</td>
                                    <td>{{$vehicularControl->nombre }}</td>
                                    <td>{{$vehicularControl->gafeteT }}</td>
                                    <td>{{$vehicularControl->operador }}</td>
                                    <td>{{$vehicularControl->g_master }}</td>
                                    <td>{{$vehicularControl->piezas }}</td>
                                    <td>{{$vehicularControl->kilos }}</td>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection