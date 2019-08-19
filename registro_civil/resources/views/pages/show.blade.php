@extends('app')

@section('style')
    
@endsection
@section('content')
<section class="content-header">
    <div style="text-align: center">
        <h3>Ver Registro</h3>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
        <center>
            <h3 class="card-title">SOLICITUD DE INSCRIPCIÓN DE NACIMIENTO DE MENOR DE EDAD</h3>
        </center>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                <h4 ><strong>Datos del Solicitante</strong></h4>
                @include('layouts.components.input',[
                    'name' => 'nombre1',
                    'value' => old('nombre1', $registro->nombre1 ?? ''),
                    'label' => 'Nombre Completo',
                    'placeholder' => 'Nombres y Apellidos Completos',
                    'disabled' => 'true',
                ])
                <div class="row">
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'dni1',
                        'value' => old('dni1', $registro->dni1 ?? ''),
                        'label' => 'Número de DNI',
                        'placeholder' => 'Número de DNI o Carnet de Extrajería',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'domicilio1',
                        'value' => old('domicilio1', $registro->domicilio1 ?? ''),
                        'label' => 'Domicilio',
                        'placeholder' => 'Domicilio',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'telefono1',
                        'value' => old('telefono1', $registro->telefono1 ?? ''),
                        'label' => 'Número de Teléfono',
                        'placeholder' => 'Número de Teléfono',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>
                @include('layouts.components.input',[
                    'name' => 'parentesco1',
                    'value' => old('parentesco1', $registro->parentesco1 ?? ''),
                    'label' => 'Parentesco',
                    'placeholder' => 'Parentesco con el(la) menor',
                    'disabled' => 'true',
                ])
        
                <h4><strong>Datos del Titular</strong></h4>
                <div class="row">
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'primer_apellido_titular',
                        'value' => old('primer_apellido_titular', $registro->primer_apellido_titular ?? ''),
                        'label' => 'Primero Apellido',
                        'placeholder' => 'Primero Apellido',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'segundo_apellido_titular',
                        'value' => old('segundo_apellido_titular', $registro->segundo_apellido_titular ?? ''),
                        'label' => 'Segundo Apellido',
                        'placeholder' => 'Segundo Apellido',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'prenombres_titular',
                        'value' => old('prenombres_titular', $registro->prenombres_titular ?? ''),
                        'label' => 'Prenombres',
                        'placeholder' => 'Prenombres',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>
                @include('layouts.components.select',[
                    'name' => 'sexo_titular',
                    'value' => old('sexo_titular',$registro->sexo_titular ?? ''),
                    'label' => 'Sexo',
                    'object' => [
                        [ 
                            'id' =>'M',
                            'descripcion' =>'Masculino'
                        ],
                        [ 
                            'id' =>'F',
                            'descripcion' =>'Femenino'
                        ]
                    ]
                ])
                <div class="row">
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'lugar_titular',
                        'value' => old('lugar_titular', $registro->lugar_titular ?? ''),
                        'label' => 'Lugar de Nacimiento',
                        'placeholder' => 'Lugar de Nacimiento',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'fecha_titular',
                        'value' => old('fecha_titular', $registro->fecha_titular ?? ''),
                        'label' => 'Fecha Nacimiento',
                        'placeholder' => 'Fecha de Nacimiento',
                        'disabled' => 'date',
                    ])
                    </div>
                    <div class="col-md-4">
                    @include('layouts.components.input',[
                        'name' => 'hora_titular',
                        'value' => old('hora_titular', $registro->hora_titular ?? ''),
                        'label' => 'Hora de Nacimiento',
                        'placeholder' => 'Hora de Nacimiento',
                        'disabled' => 'time',
                    ])
                    </div>
                </div>
                @include('layouts.components.input',[
                    'name' => 'hospital_titular',
                    'value' => old('hospital_titular', $registro->hospital_titular ?? ''),
                    'label' => 'Hospital o Clínica',
                    'placeholder' => 'Hospital o Clínica',
                    'disabled' => 'true',
                ])  
        
                <h4 ><strong>Datos del Padre</strong></h4>
                <div class="row">
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'apellidos_padre',
                        'value' => old('apellidos_padre', $registro->apellidos_padre ?? ''),
                        'label' => 'Apellidos',
                        'placeholder' => 'Apellidos',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'prenombres_padre',
                        'value' => old('prenombres_padre', $registro->prenombres_padre ?? ''),
                        'label' => 'Prenombres',
                        'placeholder' => 'Prenombres',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'dni_padre',
                        'value' => old('dni_padre', $registro->dni_padre ?? ''),
                        'label' => 'Número de DNI',
                        'placeholder' => 'Número de DNI',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'nacionalidad_padre',
                        'value' => old('nacionalidad_padre', $registro->nacionalidad_padre ?? ''),
                        'label' => 'Nacionalidad',
                        'placeholder' => 'Nacionalidad',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>  
                <h4 ><strong>Datos de la Madre</strong></h4>
                <div class="row">
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'apellidos_madre',
                        'value' => old('apellidos_madre', $registro->apellidos_madre ?? ''),
                        'label' => 'Apellidos',
                        'placeholder' => 'Apellidos',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'prenombres_madre',
                        'value' => old('prenombres_madre', $registro->prenombres_madre ?? ''),
                        'label' => 'Prenombres',
                        'placeholder' => 'Prenombres',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'dni_madre',
                        'value' => old('dni_madre', $registro->dni_madre ?? ''),
                        'label' => 'Número de DNI',
                        'placeholder' => 'Número de DNI',
                        'disabled' => 'true',
                    ])
                    </div>
                    <div class="col-md-6">
                    @include('layouts.components.input',[
                        'name' => 'nacionalidad_madre',
                        'value' => old('nacionalidad_madre', $registro->nacionalidad_madre ?? ''),
                        'label' => 'Nacionalidad',
                        'placeholder' => 'Nacionalidad',
                        'disabled' => 'true',
                    ])
                    </div>
                </div>  
            <div style="text-align:right">
                <a href="{{route('principal')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
@section('script')
    
@endsection