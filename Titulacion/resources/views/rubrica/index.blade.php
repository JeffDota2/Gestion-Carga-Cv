@extends('layouts.app')

@section('template_title')
    Rubrica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Rubrica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rubricas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Rúbrica') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('exitoso'))
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
										<th>Nombre Estudiante</th>
										<th>Entidad Formadora</th>
										<th>Fecha Evaluacion</th>
									 <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rubricas as $rubrica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $rubrica->nom_estudiante }}</td>
											<td>{{ $rubrica->ent_formadora }}</td>
											<td>{{ $rubrica->fecha_evaluacion }}</td>
                                            <td>
                                                <form action="{{ route('rubricas.destroy',$rubrica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rubricas.show',$rubrica->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rubricas.edit',$rubrica->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rubricas->links() !!}
            </div>
        </div>
    </div>
@endsection
