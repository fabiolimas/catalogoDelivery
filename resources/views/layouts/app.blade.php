<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/cd1b9a04c6.js" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black  shadow-sm header">
            <div class="container  justify-content-end p-4">
                <div class="col-md-4">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{asset('images/logo.jpg')}}" alt="Logo" class="logo">
                </a>
            </div>
              <div class="col-md-8 d-flex flex-column align-items-center justify-content-end">
                <div class="row">
                    <h3 class="text-light p-2">Pizzaria</h3>
                </div>
                <div class="col-md-2">
                <div class="row mt-4">
                    <span class="btn  btn-danger w-30"> <i class="far fa-times-circle"></i> Status</span>

                </div>
            </div>
                <div class="row">
                    <ul class="navbar-nav mt-4">
                        <li class=" nav-item ms-5 text-light">
                            <a href="#" class="text-light nav-link" data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fas fa-info-circle"></i> Info. loja
                        </a>
                        </li>
                        <li class=" nav-item ms-5 text-light">
                            <a href="#" class="text-light nav-link" data-bs-toggle="modal" data-bs-target="#horariosModal">
                                <i class="fas fa-history"></i> Ver horários
                        </a>
                        </li>
                        <li class=" nav-item ms-5 text-light">
                            <a href="#" class="text-light nav-link" data-bs-toggle="modal" data-bs-target="#bairrosModal">
                                <i class="fas fa-map-marker-alt"></i> Ver bairros
                        </a>
                        </li>
                    </ul>
                </div>
              </div>


            </div>
        </nav>
        <div class="minnav">
            <nav class="navbar bg-body-tertiary navbar-expand-md navbar-light bg-white shadow-sm">
                <form class="container-fluid justify-content-center">
                    <div class="col-md-4">
                        <button class="btn btn-md btn-outline-secondary me-2 w-100" type="button"><i class="fas fa-home"></i> Inicial</button>
                    </div>
                  <div class="col-md-4">
                    <button class="btn btn-md btn-outline-secondary w-100" type="button"> <i class="fas fa-shopping-basket text-danger"></i> Carrinho Vazio</button>
                  </div>

                </form>
              </nav>
        </div>

        <main class="py-4">

            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>
