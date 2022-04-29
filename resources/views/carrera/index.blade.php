@extends('layouts.app_admin')

@section('title','Carrera')

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
										<th scope="col">Codigo</th>
										<th scope="col">Duracion</th>
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
@section('css')
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src=""></script>
@endsection