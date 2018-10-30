@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Control Vehicular</h2>
                        <a href="{{route('vcs.create')}}" class="btn btn-primary pull-right color04">Crear Nuevo Control Vehicular</a>
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
                            @foreach($vcs as $vc)
                                <tr>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>b</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>a</td>
                                    <td>{{$vc->turno }}</td>
                                    <td>{{$vc->revisor }}</td>
                                    <td>{{$vc->jefe }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection