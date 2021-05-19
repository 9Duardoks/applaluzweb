@extends('Layouts.app')
@section ('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 alignt="center" class="h3 mb-2 text-gray-800">Pedidos</h1>


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

                            <th>Metodo de Pago</th>
                            <th>Estado</th>
                            <th>Cliente</th>
                            <th>Descripcion</th>
                            <th>Direcccion</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nro</th>
                            <th>Metodo de Pago</th>
                            <th>Estado</th>
                            <th>Cliente</th>
                            <th>MetodoPago</th>
                            <th>TipoEntrega</th>

                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($farmaciaPedido as $item)
                        <tr>
                            <th scope="row">PED-{{$item->idFarmaciaPedidos}}</th>


                            <td>
                                @if($item->metodoPago==0)
                                Yape
                                @elseif($item->metodoPago==1)
                                Tunki
                                @elseif($item->metodoPago==2)
                                Visa
                                @elseif($item->metodoPago==3)
                                Efectivo
                                @endif



                            </td>
                            <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @if($item->estado==0)
                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option1" autocomplete="off"
                                            checked>Pendiente
                                    </label>
                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Tomado
                                    </label>
                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> Completado
                                    </label>
                                    @elseif($item->estado==1)
                                    <label class="btn btn btn-outline-danger ">
                                        <input type="radio" name="options" id="option1" autocomplete="off">Pendiente
                                    </label>
                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option2" autocomplete="off"
                                            checked>Tomado
                                    </label>
                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> Completado
                                    </label>


                                    @elseif($item->estado==2)
                                    <label class="btn btn btn-outline-danger ">
                                        <input type="radio" name="options" id="option1" autocomplete="off">Pendiente
                                    </label>
                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option2" autocomplete="off"
                                            checked>Tomado
                                    </label>
                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> Completado
                                    </label>
                                    @else
                                    <label class="btn btn btn-outline-danger ">
                                        <input type="radio" name="options" id="option1" autocomplete="off">Pendiente
                                    </label>
                                    <label class="btn btn btn-outline-danger ">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Tomado
                                    </label>
                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option3" autocomplete="off" checked>
                                        Completado
                                    </label>
                                    @endif


                                </div>
                            </td>
                            <td>USU-{{$item->idTeleconsulta}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->direccion}}</td>

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