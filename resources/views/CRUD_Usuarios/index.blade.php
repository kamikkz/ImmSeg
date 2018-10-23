@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>USUARIOS</h2>
                        <a href="{{route('users.create')}}" class="btn btn-primary pull-right">Crear Nuevo Usuario</a>
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
                                <th>ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->clave}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->apellidoP}}</td>
                                    <td>{{$user->apellidoM}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="{{route('users.show',$user->id)}}" class="btn  btn-dark">Show</a>
                                        <br>
                                        <a href="{{route('users.edit',$user->id)}}" class="btn  btn-warning">Edit</a>
                                        <br>
                                        {!! Form::open(['route' => ['users.destroy',$user->id], 'method' => 'DELETE']) !!}
                                            <button class="btn  btn-danger" type="submit">Destroy</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection