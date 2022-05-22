@extends('layouts.app_admin')

@section('title','Asignaturas')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignaturas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materias.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Nueva Asignatura') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead class="thead">
                                    <tr align="center">
										<th scope="col" width="280">Carrera</th>
										<th scope="col" width="250">Asignatura</th>
										<th scope="col" width="100">Código</th>
										<th scope="col" width="80">Nivel</th>
										<th scope="col" width="80">Hora Autonomas</th>
										<th scope="col" width="80">Hora Presenciales</th>

                                        <th scope="col" width="180" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                        <tr>
											<td>{{ $materia->carrera->nombre }}</td>
											<td>{{ $materia->nombre }}</td>
											<td>{{ $materia->codigo }}</td>
											<td>{{ $materia->nivel }}</td>
											<td>{{ $materia->hora_a }}</td>
											<td>{{ $materia->hora_p }}</td>
                                            <td align="center">
                                                <form action="{{ route('materias.destroy',$materia->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('materias.show',$materia->id) }}"><i class="fa fa-fw fa-eye"></i> </a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('materias.edit',$materia->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                    @if ( Auth::user()->tipo == 'Colaborador')
                                                        disabled
                                                    @endif
                                                    onclick="return confirm('¿Estas seguro de eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materias->links() !!}
            </div>
        </div>
    </div>
@endsection
