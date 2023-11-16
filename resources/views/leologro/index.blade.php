@extends('layouts.app')


@section('content')
    <div class="page-section">
        <div class="container">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Leologro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('leologro.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Imagen</th>
										<th>Descripcion</th>
										<th>Url</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leologros as $leologro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $leologro->nombre }}</td>
											<td>{{ $leologro->imagen }}</td>
											<td>{{ $leologro->descripcion }}</td>
											<td>{{ $leologro->url }}</td>

                                            <td>
                                                <form action="{{ route('leologro.destroy',$leologro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('leologro.show',$leologro->id) }}"><i class="fa fa-fw fa-eye"></i> Mostar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('leologro.edit',$leologro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $leologros->links() !!}
            </div>
        </div>
    </div>
@endsection
