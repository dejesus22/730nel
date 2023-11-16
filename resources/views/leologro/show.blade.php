@extends('layouts.app')

@section('template_title')
    {{ $leologro->name ?? 'Show Leologro' }}
@endsection

@section('content')
    <section class="page-section">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <span class="card-title">Registro:</span>
                        </div>
                        <div class="float-end">
                            <a class="btn btn-primary" href="{{ route('leologro.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $leologro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $leologro->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $leologro->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $leologro->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
