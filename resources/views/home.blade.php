@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has Ingresado correctamente! , Comienza a registrar el conteo de tu inventario.') }}
                    <a href="{{ route('productos') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">AQUI!!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
