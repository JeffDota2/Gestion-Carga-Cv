@extends('layouts.app')
<!-- CSS only -->
@section('template_title')
    Hoja
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hoja') }}
                            </span>

							

                             	<div class="float-right">
									<a href="{{ route('hojas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
									{{ __('Crear Hoja de Vida') }}
									</a>
&nbsp;
&nbsp;
									<a href="{{ route('hojas.pdf') }}" class="btn btn-primary btn-sm"  data-placement="left">
										{{ __('PDF') }}
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
                                        
										<th>Cedula</th>
										<th>Nombreuno</th>
										<th>Nombredos</th>
										<th>Apellidouno</th>
										<th>Apellidos</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hojas as $hoja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $hoja->cedula }}</td>
											<td>{{ $hoja->nombreuno }}</td>
											<td>{{ $hoja->nombredos }}</td>
											<td>{{ $hoja->apellidouno }}</td>
											<td>{{ $hoja->apellidos }}</td>


                                            <td>
                                                <form action="{{ route('hojas.destroy',$hoja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hojas.show',$hoja->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hojas.edit',$hoja->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hojas->links() !!}
            </div>
        </div>
    </div>
@endsection
