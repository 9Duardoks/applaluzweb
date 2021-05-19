        @extends('Layouts.app')
        @section ('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
                
                </div>

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pedidos Semanales</div>

                                <div class="h5 mb-0 font-weight-bold text-gray-800">135</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pedidos Hoy</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Completados
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">40%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pendientes</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
            Comentarios Semanales</div>

        <div class="h5 mb-0 font-weight-bold text-gray-800">21</div>
        </div>
        <div class="col-auto">
        <i class="fas fa-calendar fa-2x text-gray-300"></i>
        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
        Comentarios Hoy</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
        </div>
        <div class="col-auto">
        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Revisados
        </div>
        <div class="row no-gutters align-items-center">
            <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10%</div>
            </div>
            <div class="col">
                <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 10%" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-auto">
        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
        <div class="col mr-2">
        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
            Pendientes</div>
        <div class="h5 mb-0 font-weight-bold text-gray-800">17</div>
        </div>
        <div class="col-auto">
        <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        
                        <tbody>
                        
                        @foreach($array as $item)
                        <tr>
                    
                            <td>{{$item->nombres}}</td>
                            <td>{{$item->email}}</td>
                
                        </tr>

                        @endforeach()

                        </tbody>
                    </table>
        </div>
        <!-- Content Row -->            
        @endsection