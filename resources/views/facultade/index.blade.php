@extends('layouts.app_admin')

@section('title','Facultades')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Facultades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facultades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Facultad') }}
                                </a>
                              </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead class="thead">
                                    <tr align="center">
										<th scope="col">Nombre</th>
                                        <th scope="col" width="180" ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facultades as $facultade)
                                        <tr>
                                            
											<td>{{ $facultade->nombre }}</td>

                                            <td align="center">
                                                <form action="{{ route('facultades.destroy',$facultade->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('facultades.show',$facultade->id) }}"><i class="fa fa-fw fa-eye"></i> </a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('facultades.edit',$facultade->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar el registro?')" ><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $facultades->links() !!}
            </div>
        </div>
    </div>
@endsection