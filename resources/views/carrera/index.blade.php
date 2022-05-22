@extends('layouts.app_admin')

@section('title','Carreras')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carreras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carreras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Carrera') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div >
                            <table id="example" class="display" style="width:100%">
                                <thead class="thead">
                                    <tr align="center">
                                        
										<th scope="col">Facultad</th>
										<th width="200">Carrera</th>
										<th scope="col">Código</th>
										<th scope="col">Niveles</th>
										<th scope="col" >Estado</th>
                                        <th scope="col" width="180" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carreras as $carrera)
                                        <tr>
											<td>{{ $carrera->facultade->nombre }}</td>
											<td>{{ $carrera->nombre }}</td>
											<td>{{ $carrera->codigo }}</td>
											<td>{{ $carrera->duracion }}</td>
                                            
											  
                                            @if ($carrera->estado=='Activo')
                                            <td style="background-color:#00ff4c">{{ $carrera->estado }}</td>
                                            @else
                                            <td style="background-color:#FF0000">{{ $carrera->estado }}</td>
                                            @endif

                                            <td align="center">
                                                <form action="{{ route('carreras.destroy',$carrera->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('carreras.show',$carrera->id) }}"><i class="fa fa-fw fa-eye"></i> </a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('carreras.edit',$carrera->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('¿Estas seguro de eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $carreras->links() !!}
            </div>
        </div>
    </div>
@endsection