@extends('layouts.NVAapp')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>USUARIOS</h2>
                        <a href="{{route('users.create')}}" class="btn btn-primary pull-right color04">Crear Nuevo Usuario</a>
                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Dependencia</th>
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->direccion}}</td>
                                    <td>{{$user->dependencia}}</td>
                                    <td>
                                        <a href="{{route('user.edit',$user->id)}}" class="btn  btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection