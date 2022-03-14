@extends('layouts.app')

@section('template_title')
    Empresarial
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proyecto Empresarial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empresariales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crer Proyecto') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('Exitoso'))
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
										<th>Nivel entidad</th>
										<th>Entidad Formadora</th>
                                        <th>Titulo Proyecto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresariales as $empresariale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empresariale->nom_estudiante }}</td>
											<td>{{ $empresariale->nivel }}</td>
											<td>{{ $empresariale->ent_formadora }}</td>
											<td>{{ $empresariale->tit_proyecto }}</td>
                                            <td>
                                                <form action="{{ route('empresariales.destroy',$empresariale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empresariales.show',$empresariale->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empresariales.edit',$empresariale->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empresariales->links() !!}
            </div>
        </div>
    </div>
    @endsection
