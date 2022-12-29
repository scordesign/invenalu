@extends('layouts.app')

@section('template_title')
    {{ $codigo->name ?? 'Show Codigo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Codigo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('codigos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $codigo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $codigo->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
