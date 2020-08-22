@extends('layouts.app')

@section('content')
<div class="container">
My profile :v
    <div class="row">
        <div class="col-md-5 text-center">
            <img class="rounded-circle img-thumbnail" src="/img/avatar/{{ Auth::user()->image_path }}">
        </div>
        <div class="col-md-6 offset-md-1">
        
        <form action="" ectype="multipart/form-data" method="POST">
            @csrf

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombres" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Apellidos" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" placeholder="Nombre de usuario" name="user_name" value="{{ old('user_name') }}" required autocomplete="name" autofocus>

                    @error('user_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresar correo" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <textarea class="form-control form-control @error('description') is-invalid @enderror" id="description" placeholder="Descripción sobre ti" rows="3" value="{{ old('description') }}"></textarea>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-md-4 col-form-label text-md-center">Subir imagen:</label>

                <div class="col-md-8">
                    <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" required>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Grabar</button>
        </form>
        </div>
    </div>
</div>
@endsection
