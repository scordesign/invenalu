@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $producto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega Id:</strong>
                            {{ $producto->bodega_id }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo Id:</strong>
                            {{ $producto->grupo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $producto->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo1:</strong>
                            {{ $producto->conteo1 }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo2:</strong>
                            {{ $producto->conteo2 }}
                        </div>
                        <div class="form-group">
                            <strong>Deferencia12:</strong>
                            {{ $producto->deferencia12 }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo3:</strong>
                            {{ $producto->conteo3 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
