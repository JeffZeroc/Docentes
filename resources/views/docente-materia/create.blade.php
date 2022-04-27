@extends('layouts.app_admin')

@section('title','Crear Distributivos')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docente-materias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('docente-materia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
