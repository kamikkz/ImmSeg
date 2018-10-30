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
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th colspan="4">Datos del vehiculo</th>
                                <th colspan="2">Tramitador</th>
                                <th colspan="4">Carga</th>
                                <th colspan="2">Hora</th>
                                <th colspan="3">Revisión</th>
                            </tr>
                            <tr>
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

                                <th>Entrada</th>
                                <th>Salida</th>

                                <th>Turno</th>
                                <th>Guardia Revisor</th>
                                <th>Jefe en Turno</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vehicularControls as $vehicularControl)
                                <tr>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>
                                    <td>{{$vehicularControl->turno }}</td>
                                    <td>{{$vehicularControl->revisor }}</td>
                                    <td>{{$vehicularControl->jefe }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection