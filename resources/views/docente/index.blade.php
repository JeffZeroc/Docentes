@extends('layouts.app_admin')

@section('title','Docentes')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docentes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('docentes.create') }}" 
                                class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Docente') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="display" style="width:100%">
                                <thead class="thead">
                                    <tr align="center">                                        
										<th width="280" >Nombres</th>
										<th width="100">Cedula</th>
										<th width="260">Correo Institucional</th>
										<th width="100">Sexo</th>
										<th >Estado</th>
                                        <th  width="180" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            
											<td>{{ $docente->nombres }} {{$docente->apellidos}}</td>
                                            
											<td>{{ $docente->cedula }}</td>
											<td>{{ $docente->correo_institucional }}</td>
											<td>{{ $docente->sexo }}</td>
											@if ($docente->estado=='Activo')
                                            <td style="background-color:#00ff4c">{{ $docente->estado }}</td>
                                            @else
                                            <td style="background-color:#FF0000">{{ $docente->estado }}</td>
                                            @endif

                                            <td align="center">
                                                <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docentes.show',$docente->id) }}">
                                                        <i class="fa-regular fa-file-pdf"></i>
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docentes.edit',$docente->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    {{-- <a class="btn " href="{{ route('docentes_pdf',$docente->id) }}">
                                                        <svg width="75" height="30" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                                        </svg>
                                                    </a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                    @if ( Auth::user()->tipo == 'Colaborador')
                                                        disabled
                                                    @endif onclick="return confirm('¿Estas seguro de eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                </div>
                {!! $docentes->links() !!}
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
