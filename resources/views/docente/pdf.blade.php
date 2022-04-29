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
            <div class="form-group cemter">
                <strong>Información Docente de la Universidad Técnica Luis Vargas Torres Ext La Concordia</strong>
                
                

            </div>
            <div class="form-group cemter">
                <strong>Fecha: </strong>
                {{$mytime = Carbon\Carbon::now()}}
            </div>
            <br>
            <div class="form-group">
                <strong>Nombre Completo:  </strong>
                {{ $docente->nombres }} {{ $docente->apellidos }}
            </div>
            <br>
            <div class="form-group">
                <strong>Cedula:   </strong>
                {{ $docente->cedula }}
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
                <strong>Sexo:</strong>
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