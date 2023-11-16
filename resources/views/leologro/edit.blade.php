@extends('layouts.app')

@section('template_title')
    Update Leologro
@endsection

@section('content')
    <section class="page-section">
        <div class="container">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Registro</span>

                        <div class="float-end">
                            <a class="btn btn-primary" href="{{ route('leologro.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('leologro.update', $leologro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('leologro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
