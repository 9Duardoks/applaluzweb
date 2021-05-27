@extends('Layouts.app')
@section ('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 alignt="center" class="h3 mb-2 text-gray-800">Comentarios</h1>


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
                            <th>Médico</th>
                            <th>Paciente</th>
                            <th>Puntuacion</th>
                            <th>Estado</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nro</th>

                            <th>Médico</th>
                            <th>Paciente</th>
                            <th>Puntuacion</th>
                            <th>Estado</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>

                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($comentario as $item)
                        <tr>
                            <th scope="row">COM-{{$item->idComentario}}</th>


                            <td>
                                @if($item->idMedico==3)
                                Beto Genaro
                                @elseif($item->idMedico==4)
                                Mario Luigi
                                @elseif($item->idMedico==5)
                                Quico Godin
                                @elseif($item->idMedico==6)
                                Beto Genaro
                                @endif
                            </td>
                            <td>Paciente-{{$item->idPaciente}}</td>
                            <td>
                                @if($item->puntuacion==0)
                                @elseif($item->puntuacion==1)

                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">



                                @elseif($item->puntuacion==2)

                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">


                                @elseif($item->puntuacion==3)

                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">


                                @elseif($item->puntuacion==4)

                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">




                                @elseif($item->puntuacion==5)

                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">
                                <img src="/images/EstrellaAmarilla.png" class="fas fa-fw fa-x">

                                @endif
                            </td>

                            <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @if($item ->estado==0)

                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option1" autocomplete="off"
                                            checked>Habilitado
                                    </label>
                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option2" autocomplete="off">Deshabiltiado
                                    </label>


                                    @else

                                    <label class="btn btn btn-outline-danger">
                                        <input type="radio" name="options" id="option1" autocomplete="off">Habilitado
                                    </label>
                                    <label class="btn btn btn-outline-danger active">
                                        <input type="radio" name="options" id="option2" autocomplete="off"
                                            checked>Deshabilitado
                                    </label>

                                    @endif


                                </div>
                            </td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->fecha}}</td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>


            </div>
        </div>
    </div>
































    @php
    $nombre1 = "Beto Genaro";
    $nombre2= "Mario Luigi";
    $nombre3= "Quico Godin";
    @endphp







</div>
<!-- /.container-fluid -->
@endsection