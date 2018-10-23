@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Ver datos del usuario:</h2>
                        <a href="{{route('users.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo de acceso</th>
                            </tr>
                            </thead>
                            <tbody>
                                <td>{{$user->clave}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->apellidoP}}</td>
                                <td>{{$user->apellidoM}}</td>
                                <td>{{$user->email}}</td>
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection