@extends('Layouts.app')
@section ('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reclamo</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Listado Actual</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nro</th>

                            <th>Tipo</th>
                            <th>descripcion</th>
                            <th>Paciente</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Archivo</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nro</th>

                            <th>Tipo</th>
                            <th>descripcion</th>
                            <th>Paciente</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Archivo</th>

                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($reclamo as $item)
                        <tr>
                            <th scope="row">REC-{{$item->idReclamo}}</th>

                            <td>

                                @if($item->tipo==0)

                                <label class="text-primary">
                                    Sugerencia
                                </label>

                                @elseif($item->tipo==1)

                                <label class="text-dark">
                                    Queja
                                </label>

                                @elseif($item ->tipo==2)

                                <label class="text-danger">
                                    Reclamo
                                </label>
                                @endif
            </div>
            </td>
            <td>{{$item->descripcion}}</td>
            <td>Usuario{{$item->idPaciente}}</td>
            <td>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @if($item ->estado==0)

                    <label class="btn btn btn-outline-danger active">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked>Pendiente
                    </label>
                    <label class="btn btn btn-outline-danger ">
                        <input type="radio" name="options" id="option2" autocomplete="off">Revisado
                    </label>
                    <label class="btn btn btn-outline-danger">
                        <input type="radio" name="options" id="option3" autocomplete="off">Reclamo
                    </label>


                    @elseif($item ->estado==1)

                    <label class="btn btn btn-outline-danger">
                        <input type="radio" name="options" id="option1" autocomplete="off">Pendiente
                    </label>
                    <label class="btn btn btn-outline-danger active">
                        <input type="radio" name="options" id="option2" autocomplete="off" checked>Revisado
                    </label>
                    <label class="btn btn btn-outline-danger">
                        <input type="radio" name="options" id="option3" autocomplete="off">Reclamo
                    </label>
                    @elseif($item ->estado==2)

                    <label class="btn btn btn-outline-danger ">
                        <input type="radio" name="options" id="option1" autocomplete="off">Pendiente
                    </label>
                    <label class="btn btn btn-outline-danger">
                        <input type="radio" name="options" id="option2" autocomplete="off">Revisado
                    </label>
                    <label class="btn btn btn-outline-danger active">
                        <input type="radio" name="options" id="option3" autocomplete="off" checked>En Proceso
                    </label>
                    @endif
                </div>

            </td>
            <td>{{$item->fecha}}</td>
            <td>{{$item->archivo}}</td>
            </tr>
            @endforeach()
            </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection