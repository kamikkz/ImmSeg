@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Control Vehicular</h2>
                        <a href="{{route('vehicular_controls.create')}}" class="btn btn-primary pull-right">Crear Nuevo Control Vehicular</a>
                    </div>

                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <div class="table-responsive">
                            <table id="kami" class="table table-hover table-striped">
                                <thead class="">
                                <tr>
                                    <th colspan="2" class="Hora">Hora</th>
                                    <th colspan="4" class="DatosDelVehiculo">Datos del vehiculo</th>
                                    <th colspan="2" class="Tramitador">Tramitador</th>
                                    <th colspan="4" class="Carga">Carga</th>
                                    <th colspan="4" class="Revision">Revisión</th>
                                </tr>
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
                                @foreach($vehicularControls as $vehicularControl)
                                    @if ($vehicularControl->hr_salida == NULL)
                                        <tr class="" id="Incompleto">
                                    @elseif($vehicularControl->hr_salida != NULL)
                                        <tr class="">
                                            @endif
                                            <td>{{$vehicularControl->hr_entrada }}</td>
                                            <td>{{$vehicularControl->hr_salida }}</td>
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
                                            <td>
                                                <a href="{{route('vehicular_controls.show',$vehicularControl->id)}}" class="btn  btn-dark">Registrar Hora de Salida</a><br>
                                                <a href="{{route('vehicular_controls.edit',$vehicularControl->id)}}" class="btn btn-warning">Mostrar Datos</a><br>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection