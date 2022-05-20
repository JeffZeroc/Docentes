<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label> Docente</label>
                    <select name="docente_id" id="docente_id" class="form-select form-control @error('docente_id') is-invalid @enderror">
                        @foreach ( $docentes as $docente)
                            <option value="{{$docente->id}}" 
                                @if (old('docente_id') == null)
                                    @if ($docente->id == $docenteMateria->docente_id)
                                        {{ 'selected' }}
                                    @endif
                                @else
                                    @if ($docente->id == old('docente_id'))
                                        {{ 'selected' }}
                                    @endif
                                @endif>
                                {{ $docente->nombres}} {{ $docente->apellidos}}
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
                    <select name="periodo_id" id="periodo_id" class="form-select form-control @error('periodo_id') is-invalid @enderror">
                        @foreach ( $periodos as $periodo)
                            <option value="{{$periodo->id}}" 
                                @if (old('periodo_id') == null)
                                    @if ($periodo->estado == 1)
                                        {{ 'selected' }}
                                    @endif
                                @else
                                    @if ($periodo->id == old('periodo_id'))
                                        {{ 'selected' }}
                                    @endif
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
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label> Carrera</label>
                    <select name="carrera_id" id="carrera_id" class="form-select form-control @error('carrera_id') is-invalid @enderror">
                        <option value="">Seleccione Carrera</option>
                        @foreach ( $carreras as $carrera)
                            <option value="{{$carrera->id}}">
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
            <div class="col-md-4">
                <div class="form-group">
                    <label> Nivel</label>
                    <select name="nivel" id="nivel" class="form-select form-control @error('nivel') is-invalid @enderror">
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
                    <select name="materia_id" id="materia_id" class="form-select form-control @error('materia_id') is-invalid @enderror">
                        <option value="">Seleccione Asignatura</option>
                    </select>
                    @error('materia_id')
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
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        
    </div>
</div>
<script></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    $rd = document.querySelector("#carrera_id")
    $_nivel = document.querySelector("#nivel")
    
    // const opcionCambiada = () => {
    function Opcioncambiada(){
        var id_carrera = this.value;
        if (!id_carrera) {
            $("#nivel").html('<option value="">Seleccione Nivel</option>');
            $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
        }else{
            $.get('/home/docente-materias/create/'+ id_carrera+'/nivel', function (data){
                var html_select = '<option value="">Seleccione Nivel</option>';
                var b= 1;
                for (var i = 0; i < data[0].duracion; i++) {
                    html_select += '<option value='+ b +'>'+ b +'</option>';
                    b++;
                }
                $("#nivel").html(html_select);
                $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
            });
        }
    };

    function select_nivel(){
        var n = this.value;
        var id = $rd.value;
        if (!n) {
           $("#materia_id").html('<option value="">Seleccione Asignatura</option>');
        }else{
            $.get('/home/docente-materias/create/'+ id +'/'+ n +'', function (data){
            var html_select = '<option value="">Seleccione Asignatura</option>';
            for (var i = 0; i < data.length; i++) {
                html_select += '<option value='+ data[i].id +'>'+ data[i].nombre +'</option>';
            }
            $("#materia_id").html(html_select);
        });
        }
        


        // $.get('/docente-materias/create/{"'+ id_carrera +'"}/materias', function (data){
        //     var html_select = '<option value="">Select materias</option>';
        //     for (var i = 0; i < data.length; i++) {
        //         html_select += '<option value="'+ data[i].id +'">"'+ data[i].nombre +'"</option>';
        //         $nivel.html(html_select);
        //     }
        // });
         
    };

    $rd.addEventListener("change", Opcioncambiada);
    $_nivel.addEventListener("change", select_nivel);


    // $(document).ready(function () {
    //     $('#carrera_id').on('change', function () {
    //         var idCountry = this.value;
    //         console.log(1);
    //         $("#nivel").html('');
    //         $.ajax(
    //             url: "url('fetch-states')",
    //             type: "POST",
    //             data: 
    //                 country_id: idCountry,
    //                 _token: 'csrf_token()'
    //             ,
    //             dataType: 'json',
    //             success: function (result) 
    //                 $('#nivel').html('<option value="">Select State</option>');
    //                 $.each(result.states, function (key, value) 
    //                     $("#nivel").append('<option value="' + value.id + '">' + value.name + '</option>');
    //                 );
    //                 $('#materia_id').html('<option value="">Select City</option>');
                
    //         );
    //     }
            
    //     );
    //     $('#nivel').on('change', function () {
    //         var idState = this.value;
    //         $("#materia_id").html('');
    //         $.ajax({
    //             url: "url('fetch-cities')",
    //             type: "POST",
    //             data: 
    //                 state_id: idState,
    //                 _token: 'csrf_token()'
    //             ,
    //             dataType: 'json',
    //             success: function (res) 
    //                 $('#materia_id').html('<option value="">Select City</option>');
    //                 $.each(res.cities, function (key, value) 
    //                     $("#materia_id").append('<option value="' + value.id + '">' + value.name + '</option>');
    //                 );
                
    //         });
    //     });
    // });

</script>