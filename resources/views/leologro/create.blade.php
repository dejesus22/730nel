@extends('layouts.app')

@section('template_title')
    Create Leologro
@endsection

@section('content')
    <section class="page-section">
        <div class="container">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Leologro</span>

                        <div class="float-end">
                            <a class="btn btn-primary" href="{{ route('leologro.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('leologro.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('leologro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
