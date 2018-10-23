@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar datos del usuario:</h2>
                        <h3>Clave: {{$user->clave}}</h3>
                        <h3>Nombre: {{$user->name}} {{$user->apellidoP}} {{$user->apellidoM}}</h3>
                        <h3>Correo: {{$user->email}}</h3>
                        <a href="{{route('users.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
                    @include ('CRUD_Usuarios.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection