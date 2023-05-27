<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>CGRAE SUIVIS PROJET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CGRAE" name="description" />
    <meta content="CGRAE" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("/") }}assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{ asset("/assets/js/layout.js") }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("/assets/css/app.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset("/assets/css/custom.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/assets/css/main.css") }}" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4 auth-one-bg h-100">
                                        <div class="bg-overlay"></div>
                                        <div class="position-relative h-100 d-flex flex-column">
                                            <div class="mb-4">
                                                <a href="" class="d-block">
                                                    <span class="logo-cgrae">CGRAE</span>
{{--                                                    <img src="{{ asset("/assets/images/img/cgrae-logo-min.png") }}" alt="" height="18">--}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div>
                                            <h5 class="text-primary">Créer un nouvel utilisateur</h5>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0"></p>
                                        </div>

                                        <div class="mt-4">
                                            <form action="index.html">

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Entrez le nom">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="prenom" class="form-label">Prénom</label>
                                                    <input type="text" class="form-control" id="prenom" placeholder="Entrez le prénom">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="matricule" class="form-label">Matricule</label>
                                                    <input type="text" class="form-control" id="matricule" placeholder="Entrez le matricule">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Entrez l'adresse email">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="telephone" class="form-label">Téléphone</label>
                                                    <input type="text" class="form-control" id="telephone" placeholder="Entrez le numéro de téléphone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Département</label>
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected>Sélectionnez un département</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Service</label>
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected>Sélectionnez un service</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Fonction</label>
                                                    <select class="form-select mb-3" aria-label="Default select example">
                                                        <option selected>Sélectionnez une fonction</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success w-100" type="submit">Créer le nouvel utilisateur</button>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> CGRAE. Crafted with <i class="mdi mdi-heart text-danger"></i> by Alimatou
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>

    <!-- password-addon init -->
    <script src="{{asset('assets/js/pages/password-addon.init.js')}}"></script>

</body>

</html>
