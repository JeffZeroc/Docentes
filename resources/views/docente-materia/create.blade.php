@extends('layouts.app_admin')

@section('title', 'Crear Distributivos')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="alert alert-success" role="alert" id="alert_bien" style="display: none;">
                        <span>!Registro guardado correctamente.!</span>
                    </div>

                    <div class="alert alert-danger" role="alert" id="alert_mal" style="display: none;">
                        <span id="mensaje_mal"> </span>
                    </div>


                    <div class="card-header">
                        <span class="card-title">Nuevo Registro</span>
                    </div>
                    <div class="card-body">
                        <form id="form1">
                            @csrf
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Docente</label>
                                                <select name="docente_id" id="docente_id"
                                                    class="form-select form-control @error('docente_id') is-invalid @enderror">
                                                    @foreach ($docentes as $docente)
                                                        <option value="{{ $docente->id }}"
                                                            @if (old('docente_id') == null) @if ($docente->id == $docenteMateria->docente_id)
                                                                    {{ 'selected' }} @endif
                                                        @else
                                                            @if ($docente->id == old('docente_id')) {{ 'selected' }} @endif
                                                            @endif>
                                                            {{ $docente->nombres }} {{ $docente->apellidos }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('docente_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Periodo Académico</label>
                                                <select name="periodo_id" id="periodo_id"
                                                    class="form-select form-control @error('periodo_id') is-invalid @enderror">
                                                    @foreach ($periodos as $periodo)
                                                        <option value="{{ $periodo->id }}"
                                                            @if (old('periodo_id') == null) @if ($periodo->estado == 1)
                                                                    {{ 'selected' }} @endif
                                                        @else
                                                            @if ($periodo->id == old('periodo_id')) {{ 'selected' }} @endif
                                                            @endif>
                                                            {{ $periodo->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('periodo_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Carrera</label>
                                                <select name="carrera_id" id="carrera_id"
                                                    class="form-select form-control @error('carrera_id') is-invalid @enderror">
                                                    <option value="">Seleccione Carrera</option>
                                                    @foreach ($carreras as $carrera)
                                                        <option value="{{ $carrera->id }}"
                                                            @if ($carrera->id == old('carrera_id')) {{ 'selected' }} @endif>
                                                            {{ $carrera->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('carrera_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Nivel</label>
                                                <select name="nivel" id="nivel"
                                                    class="form-select form-control @error('nivel') is-invalid @enderror">
                                                    <option value="">Seleccione Nivel</option>
                                                </select>
                                                @error('nivel')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Asignatura</label>
                                                <select name="materia_id" id="materia_id"
                                                    class="form-select form-control @error('materia_id') is-invalid @enderror">
                                                    <option value="">Seleccione Asignatura</option>
                                                </select>
                                                @error('materia_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label> Paralelo</label>
                                                <select name="paralelo" id="paralelo"
                                                    class="form-select form-control @error('paralelo') is-invalid @enderror">
                                                    <option value="A"
                                                    @if (old('paralelo') == null) @if ($docenteMateria->paralelo == 'A')
                                                                {{ 'selected' }} @endif
                                                    @else
                                                        @if (old('paralelo') == 'A') )
                                                                {{ 'selected' }} @endif
                                                        @endif>
                                                        A
                                                    </option>
                                                    <option value="B"
                                                    @if (old('paralelo') == null) @if ($docenteMateria->paralelo == 'B')
                                                                {{ 'selected' }} @endif
                                                    @else
                                                        @if (old('paralelo') == 'B') )
                                                                {{ 'selected' }} @endif
                                                        @endif>
                                                        B</option>
                                                </select>
                                                @error('paralelo')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row box-footer mt20 ">
                                    <div class="col-md-12">
                                        <a href="/home/docente-materias" class="btn btn-secondary">Volver</a>
                                        <button class="btn btn-primary" id="guardar">Guardar</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $rd = document.querySelector("#carrera_id")
        $_nivel = document.querySelector("#nivel")



        $("#guardar").click(function(e) {
            document.getElementById('alert_bien').style.display = "none";
            document.getElementById('alert_mal').style.display = "none";
            e.preventDefault();
            var docente_id = $("#docente_id").val();

            var periodo_id = $("#periodo_id").val();

            var materia_id = $("#materia_id").val();

            var paralelo = $("#paralelo").val();

            var codigos = docente_id + periodo_id + materia_id;

            $.ajax({

                url: '/home/docente-materias',

                data: {
                    _token: $("meta[name='csrf-token']").attr("content"),
                    docente_id: docente_id,
                    periodo_id: periodo_id,
                    materia_id: materia_id,
                    codigo: codigos,
                    paralelo:paralelo,
                },
                dataType: "json",

                method: "POST",

                success: function(response) {
                    if (response.success == 1) {
                        document.getElementById('mensaje_mal').textContent =
                            "!Ha ocurrido un error. Seleccionar correctamente los datos.!";
                        document.getElementById('alert_mal').style.display = "block";
                    } else {
                        if (response.success == 2) {
                            document.getElementById('mensaje_mal').textContent =
                                "!El registro ya existe en la base de datos.!";
                            document.getElementById('alert_mal').style.display = "block";
                        } else {
                            if (response.success == 4) {
                                document.getElementById('alert_bien').style.display = "block";
                            } else {
                                document.getElementById('mensaje_mal').textContent =
                                    "!Ha ocurrido un error. Intente nuevamente.!";
                                document.getElementById('alert_mal').style.display = "block";
                            }
                        }
                    }
                },

            });
        });

        function Opcioncambiada() {
            var id_carrera = $rd.value;
            if (!id_carrera) {
                $("#nivel").html('<option value="">Seleccione Nivel</option>');
                $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
            } else {
                $.get('/home/docente-materias/create/' + id_carrera + '/nivel', function(data) {
                    var html_select = '<option value="">Seleccione Nivel</option>';
                    var b = 1;
                    var if_select = "";
                    for (var i = 0; i < data[0].duracion; i++) {

                        html_select += '<option value=' + b +
                            " @if (old('nivel') == '+b+') {{ selected }} @endif>" + b + '</option>';
                        b++;
                    }
                    $("#nivel").html(html_select);
                    $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
                });
            }
        };

        function select_nivel() {
            var n = $_nivel.value;
            var id = $rd.value;
            if (!n) {
                $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
            } else {
                $.get('/home/docente-materias/create/' + id + '/' + n + '', function(data) {
                    var html_select = '<option value="">Seleccione Asignatura</option>';
                    for (var i = 0; i < data.length; i++) {
                        html_select += '<option value=' + data[i].id +
                            ' @if (old('materia_id') == '+data[i].id+') {{ selected }} @endif>' + data[i].nombre +
                            '</option>';
                    }
                    $("#materia_id").html(html_select);
                });
            }
        };

        Opcioncambiada();
        select_nivel();

        $rd.addEventListener("change", Opcioncambiada);
        $_nivel.addEventListener("change", select_nivel);
    </script>
@endsection
