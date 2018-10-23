
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header color01">Nuevo usuario</div>
                    <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            {{ Form::label('name', 'Nombre del Usuario', ['class' => 'control-label']) }}
                            {{ Form::text('name', 'null', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group row">
                            <label for="dependencia" class=" col-form-label text-md-right">Dependencia</label>
                            <div class="col-md-12">
                                <select required name="dependencia" id="dependencia" class="selectpicker show-tick form-control" data-live-search="true" required autofocus>
                                    @foreach($dependencias as $dependencia)
                                        <option value="{{$dependencia->name}}">{{$dependencia->general_management_id}} {{$dependencia->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">Nombre</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">E-Mail Personal</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! Form::submit('Registrar nuevo usuario',['class'=>'btn btn-primary form-control color02'])!!}
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
</div>
