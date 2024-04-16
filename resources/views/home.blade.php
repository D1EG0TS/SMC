@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-gray-200 p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300" style="background-image: url('/resources/img/cli7.png'); background-size: 100%;">
    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
        <form action="">
            <div class="input-group">
                <div class="input-group-append">
                </div>
            </div>
        </form>
    </div>





    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="scss/icono.css">
    
<div class="container mx-auto">

<h1 class="text-5xl text-center pt-24 text-white">Bienvenido a SMC!</h1>
<center><h2 class="text-white">Aquí te informamos un poco de lo que nosotros somos, de lo que hacemos y quiénes son los responsables de que esta idea sea una realidad.</h2></center>


    <div class="grid grid-cols-3 gap-4 mt-10">
        <!-- Sección 1: Información sobre la Cabina de Salud -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
                
            <img src="{{ asset('resources/img/1.jpg') }}" alt="Cabina" class="mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center">Cabina de Salud Inteligente</h2>
            <p class="text-center">La cabina inteligente ofrece una amplia gama de funciones para el monitoreo de la salud.</p>
            <ul class="text-center">
                <li>Toma de presión arterial</li>
                <li>Medición de estatura</li>
                <li>Peso exacto del cuerpo</li>
                <li>Medición de temperatura</li>
            </ul>
        </div>
        </div>

        <!-- Sección 2: Objetivos y Alcances de la Empresa -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
        <div class="col-md-4 mb-5" style=" padding: 20px; border-radius: 10px;">
        <img src="{{ asset('resources/img/vitalis.png') }}" alt="Cabina" class="mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center">Objetivos y Alcances</h2>
            <p class="text-center">Nuestro objetivo es proporcionar soluciones de salud innovadoras que mejoren la atención médica y promuevan el bienestar de los pacientes.</p>
        </div>
        </div>

        <!-- Sección 3: Imágenes y Descripción Adicional -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
        <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
            <img src="{{ asset('resources/img/5.jpg') }}" alt="Cabina" class="mx-auto mb-4">
            <h2 class="text-xl font-semibold text-center">Entrevista a los que necesitan la Cabina</h2>
            <p class="text-center">Aquí puedes encontrar testimonios de pacientes y profesionales de la salud que han experimentado los beneficios de nuestras cabinas de salud.</p>
        </div>
    </div>
</div>
</div>


<!-- Video de la entrevista al personal medico de la UTVT 
<div class="bg-gray-200 p-4 rounded-lg mt-8">
    <div class="container mx-auto flex justify-center items-center">
        <h1 class="text-3xl text-center mb-4">Entrevista al personal médico de la UTVT</h1>
        <video width="80%" controls autoplay loop>
            <source src="{{ asset('resources/video/1.mp4') }}" type="video/mp4">
            Tu navegador no admite la etiqueta de video.
        </video>
    </div>
</div>  -->

<div class="container mx-auto">

    <h1 class="text-5xl text-center pt-24 text-white">Te presentamos a los fundadores de VITALIS</h1>

    <div class="grid grid-cols-4 gap-4 mt-10">
        <!-- Sección 1: Información sobre la Cabina de Salud -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
            <img src="{{ asset('resources/img/Edgar.png') }}" alt="Cabina" class="mx-auto mb-4 w-full">
            <div class="product-action">
                <center>
                    <a class="btn btn-outline-dark btn-square" href="{{ asset('resources/pdf/CV1.pdf') }}"><i class="fas fa-file"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://www.facebook.com/profile.php?id=100089109221662&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://instagram.com/edddd.gx?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D"><i class="fab fa-instagram"></i></a>
                </center>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="#">Edgar Marin Rojas</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                </div>
            </div>
        </div>
        </div>

        <!-- Sección 2: Información sobre otro fundador -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
            <img src="{{ asset('resources/img/Hamblet.jpg') }}" alt="Cabina" class="mx-auto mb-4 w-full">
            <div class="product-action">
                <center>
                    <a class="btn btn-outline-dark btn-square" href="{{ asset('resources/pdf/CV2.pdf') }}"><i class="fas fa-file"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://www.facebook.com/hamblet.aguilar.1?mibextid=uzlsIk"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://www.instagram.com/_hamblet_1?igsh=OWFvM2NrM3VuYzU0&utm_source=qr"><i class="fab fa-instagram"></i></a>
                </center>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="#">Hamblet Ariel Aguilar Barrera</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                </div>
            </div>
        </div>
        </div>

        <!-- Sección 3: Información sobre otro fundador -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
            <img src="{{ asset('resources/img/Edith.jpg') }}" alt="Cabina" class="mx-auto mb-4 w-full">
            <div class="product-action">
                <center>
                    <a class="btn btn-outline-dark btn-square" href="{{ asset('resources/pdf/CV3.pdf') }}"><i class="fas fa-file"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://www.facebook.com/perfil3"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://instagram.com/perfil3"><i class="fab fa-instagram"></i></a>
                </center>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="#">Edith Olvera Esquivel</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                </div>
            </div>
        </div>
        </div>

        <!-- Sección 4: Información sobre otro fundador -->
        <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                    <div class="col-md-4 mb-5" style="padding: 20px; border-radius: 10px;">
            <img src="{{ asset('resources/img/Terrazas.jpg') }}" alt="Cabina" class="mx-auto mb-4 w-full">
            <div class="product-action">
                <center>
                    <a class="btn btn-outline-dark btn-square" href="{{ asset('resources/pdf/CV4.pdf') }}"><i class="fas fa-file"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://www.facebook.com/perfil4"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="https://instagram.com/perfil4"><i class="fab fa-instagram"></i></a>
                </center>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="#">Diego Armando Terrazas Salinas</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                </div>
            </div>
        </div>
        </div>
    </div>
</div>




    <div class="container mx-auto">
                <h1 class="text-5xl text-center pt-24 text-white">Entra a tu perfil</h1>
                    <p class="text-center"></p>
                        <ul class="text-center"></ul>
            <div class="text-center mt-8">
                <a href="{{ route('perfil.show') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Perfil</a>
            </div>
    </div>





    <!-- Footer Start -->
    
    
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4 text-white">Acerca de VITALIS</h5>
                <p class="mb-4 text-white">Ciudate, mas vale prevenir</p>
                <p class="mb-2 text-white"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Av Miguel Hidalgo 24, Delegación San Cristóbal Huichochitlán, 50010 Toluca de Lerdo, Méx., México </p>
                <p class="mb-2 text-white"><i class="fa fa-envelope text-primary mr-3"></i>smcmex@gmial.com</p>
                <p class="mb-0 text-white"><i class="fa fa-phone-alt text-primary mr-3"></i>+52 722 654 5384</p>
            </div>
                
                    <h6 class="text-secondary text-uppercase mt-4 mb-3 text-white">Redes Sociales</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                </div>
        </div>
    </div>
</div>
</div>
    <!-- Footer End -->

@endsection
