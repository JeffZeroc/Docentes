<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            
        </div>

        <div class="card-body">
            <div class="row">
                <div class="form-group " style="text-align:center">
                    <strong >Universidad Técnica Luis Vargas Torres </strong>
                </div>
                <div class="form-group " style="text-align:center">
                    <strong >Sede Santo Domingo </strong>
                </div>
                <br>
                <div class="form-group " style="text-align:center">
                    <strong >Datos Docente</strong>
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <strong>Nombre Completo:  </strong>
                {{ $docente->nombres }} {{ $docente->apellidos }}
            </div>
            <br>
            <div class="col-md-2">
                <strong>Cedula:   </strong>
                {{ $docente->cedula }}
            </div>
            <br>    
            <div class="form-group">
                <strong>Fecha Nacimiento:  </strong>
                {{ $docente->fecha_nacimiento }} 
            </div>
            <br>
            <div class="form-group">
                <strong>Celular:  </strong>
                {{ $docente->celular }}
            </div>
            <br>
            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $docente->direccion }}
            </div>
            <br>
            <div class="form-group">
                <strong>Dedicación:  </strong>
                {{ $docente->dedicacion }} 
            </div>
            <br>
            <div class="form-group">
                <strong>Relación Dependencia:  </strong>
                {{ $docente->relacion_dependencia }} : {{ $docente->relacion_dependencia2 }}
            </div>
            <br>
            <div class="form-group">
                <strong>Correo Institucional:</strong>
                {{ $docente->correo_institucional }}
            </div>
            <br>
            <div class="form-group">
                <strong>Correo Personal:</strong>
                {{ $docente->correo_personal }}
            </div>
            <br>
            <div class="form-group">
                <strong>Género:</strong>
                {{ $docente->sexo }}
            </div>
            <br>
            <div class="form-group">
                <strong>Etnia:</strong>
                {{ $docente->etnia }}
            </div>
            <br>
            
            <div class="form-group">
                <strong>Titulo 3 Nivel:</strong>
                {{ $docente->titulo_3_n }}
                
            </div>
            <br>
            <div class="form-group">
                <strong>Titulo 4 Nivel:</strong>
                {{ $docente->titulo_4_n }}
            </div>
            <br>
            <div class="form-group">
                <strong>Doctorado:</strong>
                {{ $docente->doctorado }}
            </div>
            <br>
            <div class="form-group">
                <strong>Phd:</strong>
                {{ $docente->phd }}
            </div>
            <br>
            <div class="form-group">
                <strong>Discapacidad:</strong>
                {{ $docente->discapacidad }}
            </div>
            <br>
            @if ($docente->discapacidad=='Si')
            <div class="form-group">
                <strong>Porcentaje:</strong>
                {{ $docente->porcentaje }}%
            </div>
            <br>
            @endif
            
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $docente->estado }}
            </div>
            <br>
            @if ($docente->estado=='Suspendido')
            <div class="form-group">
                <strong>Fecha Suspendido:</strong>
                {{ $docente->fecha_suspencion }}
            </div>
            @endif
            

        </div>
    </div>
</body>
</html>