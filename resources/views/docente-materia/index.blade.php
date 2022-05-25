@extends('layouts.app_admin')

@section('title', 'Distributivos')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Distributivos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('docente-materias.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Nuevo Registro') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead class="thead">
                                        <tr align="center">
                                            <th scope="col">N°</th>
                                            <th scope="col">Cédula/Pasaporte</th>
                                            <th scope="col">Docente</th>
                                            <th scope="col">Género</th>
                                            <th scope="col">Título 3 Nivel</th>
                                            <th scope="col">Título 4 Nivel</th>
                                            <th scope="col">Relación dependencia</th>
                                            <th scope="col">Categoría</th>
                                            <th scope="col">Dedicación</th>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Asignatura</th>
                                            <th scope="col">Ciclo</th>
                                            <th scope="col">Paralelo</th>
                                            <th scope="col">Periodo</th>
                                            <th scope="col">H/Docente</th>
                                            <th scope="col">H/Autonomas</th>
                                            <th scope="col" width="180"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($docenteMaterias as $docenteMateria)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $docenteMateria->docente->cedula }}</td>
                                                <td>{{ $d = $docenteMateria->docente->apellidos }} {{ $docenteMateria->docente->nombres }}</td>
                                                <td>{{ $docenteMateria->docente->sexo }}</td>
                                                <td>{{ $docenteMateria->docente->titulo_3_n }}</td>
                                                <td>{{ $docenteMateria->docente->titulo_4_n }}</td>
                                                <td>{{ $docenteMateria->docente->relacion_dependencia }}</td>
                                                <td>{{ $docenteMateria->docente->relacion_dependencia2 }}</td>
                                                <td>{{ $docenteMateria->docente->dedicacion }}</td>
                                                <td>{{ $docenteMateria->materia->carrera->nombre }}</td>
                                                <td>{{ $docenteMateria->materia->nombre }}</td>
                                                <td>{{ $docenteMateria->materia->nivel }}</td>
                                                <td>{{ $docenteMateria->paralelo }}</td>
                                                <td>{{ $docenteMateria->periodo->nombre }}</td>
                                                <td>{{ $docenteMateria->materia->hora_p }}</td>
                                                <td>{{ $docenteMateria->materia->hora_a }}</td>

                                                <td align="center">
                                                    <form
                                                        action="{{ route('docente-materias.destroy', $docenteMateria->id) }}"
                                                        method="POST">
                                                        {{-- <a class="btn btn-sm btn-success"
                                                            href="{{ route('docente-materias.edit', $docenteMateria->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i> </a> --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            @if (Auth::user()->tipo == 'Colaborador') disabled @endif
                                                            onclick="return confirm('¿Estas seguro de eliminar el registro?')"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
