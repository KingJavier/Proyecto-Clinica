@extends('plantilla')
@section('content')
<div class="content-wrapper">
<section class="content-header">
<h1>Inicio</h1>
</section>
<!-- {{$inicio->dias}} -->
<section class="content">
    <div class="container-fluid">
        @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
        @endif  
        <div class="h1">Bienvenido {{auth()->user()->name}}</div>
        @if (auth()->user()->rol === 'admin')
            <div class="mt-3 row justify-content-center">
                <form action="{{ route('update.inicio', 1) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Dias:
                            </label>
                            <input type="text" class="form-control" value="{{$inicio->dias}}" placeholder="Ingresa los dias de apertura..." name="dias">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Horario:
                            </label>
                            <input type="text" class="form-control" value="{{$inicio->hora}}" placeholder="Ingresa los Horarios de apertura..." name="hora">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-5">
                            <label for="exampleFormControlInput1" class="form-label">
                                Direccion:
                            </label>
                            <input type="text" class="form-control" value="{{$inicio->direccion}}" placeholder="Ingresa la direccion..." name="direccion">
                        </div>
                        <div class="mb-3">
                            <h4 class="text-center m-3">Contactanos</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">
                                        Telefono:
                                    </label>
                                    <input type="text" class="form-control" id="" placeholder="Ingresa la direccion..." value="{{$inicio->telefono}}" name="telefono">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">
                                        Correo:
                                    </label>
                                    <input type="text" class="form-control" value="{{$inicio->email}}" placeholder="Ingresa la direccion..." name="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5 text-center">
                        <button class="btn btn-outline-warning" type="submit">
                            Cambiar informacion
                        </button>
                    </div>
                </form>
            </div>
        @endif
        @if (auth()->user()->rol !== 'admin')            
        <div class="mt-3 row justify-content-center">
            <div class="col-md-12">
                <div class="mt-2">
                    <h3>
                        Dias de atencion: {{$inicio->dias}}
                    </h3>
                </div>
                <div class="mt-2">
                    <h3>
                        Horario de atencion: {{$inicio->hora}}
                    </h3>
                </div>
                <div class="mt-2">
                    <h3>
                        Direccion del centro: {{$inicio->direccion}}
                    </h3>
                </div>
                <div class="mt-2">
                    <h3>
                        Contacto
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                Telefono: {{$inicio->telefono}}
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                Email: {{$inicio->email}}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
</div>
@endsection
