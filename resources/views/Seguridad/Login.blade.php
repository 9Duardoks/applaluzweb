
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La luz - Login</title>

    <!-- Custom fonts for this template-->
    <link   href="{{asset('content/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
  
    <link href="{{asset('content/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body class="bg-gradient-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "><img src="/images/laluz.jpg"  height="600px" ></div>
                       
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h3 class="h4 text-light-900 mb-4"><b>Bienvenido!</b></h3>
                                    </div>

                                    @if ($errors->any())
                                   <div class="alert alert-danger alert-dismissible" >
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                </button>
                                <div class="alert-text">
                                    @foreach ($errors-all() as $error)
                                    <span>{{$error}}<span>
                                        @endforeach
                                    </div>
                                   </div>
                                    @endif

                                
                                    <form action=""  autocomplete="off" method="POST">
                                            @csrf
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                               value="{{old('correo')}}" id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Correo">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck"></label>
                                            </div>
                                        </div>
                                        <a class="btn btn-danger" href="/Principal/Index">
                                            <i class="fas fa-fw fa-sign-out-alt"></i>
                                            <span>Login</span></a>
                                    
                                    </form>
                                    <hr>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->

    <script type="text/javascript" src="{{asset('content/vendor/jquery/jquery.min.js') }}" async></script>
    <script type="text/javascript" src="{{asset('content/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="{{asset('content/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{asset('content/js/sb-admin-2.min.js')}}"></script>
                         </a>
                                        <hr>
              
</body>

</html>