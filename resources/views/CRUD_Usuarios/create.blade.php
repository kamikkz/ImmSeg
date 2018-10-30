@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear nuevo Usuario</h2>
                        <a href="{{route('users.index')}}" class="btn btn-primary pull-right">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model(['route'=>['users.store'],'method'=>'POST']) !!}
                    @include ('CRUD_Usuarios.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection