@extends('app')

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
    <section class="content-header">
        <div style="text-align: center">
            <h3>Registros Ingresados</h3>
        </div>
    </section>
    <section class="content">
            <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                    <h3 class="card-title">Registros</h3>
                            </div>
                            <div class="col-md-6">
                                <div style="text-align: right">
                                  <a href="{{route('principal.create')}}" class="btn btn-success">
                                      <i class="nav-icon fas fa-plus"></i> 
                                      Agregar
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="tabla" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nro°</th>
                                <th>Titular</th>
                                <th>Sexo</th>
                                <th>Lugar Nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $c = 1;
                            @endphp
                        @foreach ($registros as $registro)
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$registro->prenombres_titular}}</td>
                                <td>{{$registro->sexo_titular}}</td>
                                <td>{{$registro->lugar_titular}}</td>
                                <td>
                                    <a href="{{route('principal.show',$registro->id)}}" class="btn btn-success">
                                        <i class="nav-icon fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('principal.edit',$registro->id)}}" class="btn btn-primary">
                                        <i class="nav-icon fas fa-pen"></i>
                                    </a>
                                    <a href="{{route('principal.destroy',$registro->id)}}" class="btn btn-danger">
                                        <i class="nav-icon fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $c++;
                            @endphp
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nro°</th>
                                <th>Titular</th>
                                <th>Sexo</th>
                                <th>Lugar Nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
            </div>
    </section>
@endsection

@section('script')
    <script src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
    
    <script>
        $('#tabla').DataTable();
    </script>
@endsection
