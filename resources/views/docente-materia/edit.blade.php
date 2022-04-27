@extends('layouts.app_admin')

@section('title','Editar Distributivos')

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Axtualizar Registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docente-materias.update', $docenteMateria->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('docente-materia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
