@extends('app')

@section('style')
    
@endsection
@section('content')
<section class="content-header">
    <div style="text-align: center">
        <h3>Registro Nuevo</h3>
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
            <form method="POST" action="{{route('principal.store')}}">
                @csrf
                @include('pages.components.form')
                <div style="text-align:right">
                    <a href="{{route('principal')}}" class="btn btn-primary">Volver</a>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>  
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
@section('script')
    
@endsection