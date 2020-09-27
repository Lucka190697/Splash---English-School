<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projeto Splash</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{asset('css/sb-admin.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/stylish-portfolio.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylish-portfolio.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/custon-fonts/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/googleapis.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
          rel="stylesheet">

    <link href="{{asset('css/simple-line-icons/simple-line-icons.css')}}">
    <link href="{{asset('css/all.min.css')}}">

    <!-- Custom CSS -->
    <link href="{{asset('css/stylish-portfolio.min.css')}}">
    <link href="{{asset('css/style-personalizado.css')}}">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style-personalizado.css">

    {{--    <link href="{{ elixir('css/app.css') }}" type="text/css" rel="stylesheet">--}}
</head>

<!-- home section -->

<body id="page-top" class="home-background">
<!-- button navigation -->
<a class="menu-toggle rounded" href="#">
    <i class="icon-list"></i>
</a>
<!-- sidebar -->
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="#page-top">Splash</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#page-top">
                <i class="text-white icon-home"> </i> Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#about">
                <i class="icon-info"> </i> Sobre nós</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#services">
                <i class="icon-energy"> </i> Vantagens</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#callout">
                <i class="icon-envelope-open"> </i> Convite</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#contact">
                <i class="icon-bubble"> </i> Entre em contato</a>
        </li>
    </ul>
</nav>
<!-- Header -->
<header class="masthead d-flex" id="header-background">
    <div class="container text-white text-center my-auto col-12">
        <!-- intro video -->
        <div class="col-12 text-center" style="background-color:  #FDBA09; width: 100%;">
            <!--Flash message-->
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="fechar">x</a>
                        </p>
                    @endif
                @endforeach
            </div>
            <div class="flash-message">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h5>Oops! algo deu errado!!</h5>
                        Não foi possível enviar sua mensagem <i class="icon-ghost"></i>
                        <a href="#" class="close" data-dismiss="alert" aria-label="fechar">x</a>
                    </div>
                @endif
            </div>
            <!--/Flash message-->
            <iframe
                    class="col-lg-12 col-xl-12"
                    width="1380" height="240"
                    src="/video.mp4"
                    frameborder="0"
                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                    style="background-color: transparent;"
                    allowfullscreen>
            </iframe>
        </div>
        <!-- carousel -->
        <div
                id="carouselExampleIndicators"
                style="background-color: rgba(0,0,0,0.1)"
                class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- carrousel slide -->
            <div class="carousel-inner mb-5 fixed-nav flex">
                <div class="carousel-item active mt-3">
                    <div class="mb-5">
                        <h2><i class="icon-rocket"> </i></h2>
                        <h2 style="font-size: 30px; margin: 0;"> Inglês é </h2>
                        <h1 class="mb-3"> Agora ou Nunca! </h1>
                    </div>
                </div>
                <div class="carousel-item mt-3">
                    <div class="mb-5">
                        <h2><i class="icon-social-dribbble"></i></h2>
                        <h1> Inglês na Splash! </h1>
                        <div class="col-lg-8 mx-auto">
                            <p class="lead"> Descubra op pilares para o aprendizado simples e prático,onde você malha
                                seu cérebro e se torna um falante. Aqui você estuda e vê resultados toda semana. Confira
                                nossa Proposta.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mt-3">
                    <div class="mb-5">
                        <h2><i class="icon-badge"></i></h2>
                        <h1 style="font-size: 60px"> Todo mundo pode aprender! </h1>
                        <div class="col-lg-8 mx-auto">
                            <p class="lead"> Qualquer um pode!
                                <br> Os preços são acessíveis que cabem no seu bolso!
                                <br> Invista em você!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel nav buttons -->
            <a
                    class="carousel-control-prev"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                    class="carousel-control-next"
                    href="#carouselExampleIndicators"
                    role="button"
                    data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <a
                class="btn btn-dark btn-xl js-scroll-trigger js-scroll-trigger"
                style="background-color: #ff615eff; border:none;"
                href="#about">
            Quem somos
        </a>
    </div>
    <div class="overlay"></div>
</header>

<!-- about -->

<section class="content-section text-white" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1><i class="icon-bubbles"> </i></h1>
                <h2> Você pensa que Inglês não é pra você? </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 mx-auto">
                    <p class="lead mb-5">
                        Que não é inteligente, não tem facilidade? Que já tentou diversas vezes mas nunca teve
                        resultado? Acreditamos que você assim como qualqer um é capaz de aprender inglês de maneira
                        simples e prática. Diferente da maioria dos cursos de Inglês que focam na
                        gramatica, aqui o foco é na compreensão do idioma e na fala. O que acreditamos ser muito mais
                        útil e simples e prático.
                    </p>
                    <a
                            class="btn btn-dark btn-xl js-scroll-trigger"
                            href="#services"
                            style="background-color: #ff615eff; border:none; ">
                        Vantagens Splash!
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vantagens Splash-->

<section class="content-section-portifolio text-white text-center" id="services">
    <div class="container">
        <div class="content-section-heading">
            <h1><i class="icon-energy"> </i></h1>
            <h2 class="mb-2">Splash Power</h2>
            <h3 class="mb-5">Conheça nossos cursos</h3>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-graduation"></i>
        </span>
                <h4>
                    <strong>Aulas</strong>
                </h4>
                <p class="text-faded mb-0">Segunda, Terça e Sexta</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-puzzle"></i>
        </span>
                <h4>
                    <strong>Dinâmico</strong>
                </h4>
                <p class="text-faded mb-0">Guia de estudos semanal</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-book-open"></i>
        </span>
                <h4>
                    <strong>Conteúdo</strong>
                </h4>
                <p class="text-faded mb-0">Material Completo</p>
            </div>

            <div class="col-lg-3 col-md-6">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-badge"></i>
        </span>
                <h4>
                    <strong>Qualidade</strong>
                </h4>
                <p class="text-faded mb-0">
                    Aulas gravadas com conteúdo completo
                </p>
            </div>
            <div class="container text-center mt-3">
                <a href="#callout" class="btn btn-dark btn btn-xl js-scroll-trigger"
                   style="background-color: #ff615eff; border:none; ">
                    Confira de Perto!
                </a>
            </div>
        </div>
    </div>
</section>

<!-- motivation -->

<section class="callout" id="callout">
    <div class="container text-center">
        <h1><i class="icon-graph"></i></h1>
        <h2 class="mx-auto mb-5">
            Veja evolução todas as semanas!
        </h2>
        <p> Você será redirecionado á página da Splash na Hotmart</p>
        <a class="btn btn-dark btn-xl js-scroll-trigger" target="_blank"
           style="background-color: #ff615eff; border:none;"
           href="https://pages.hotmart.com/u11929664f/splash-e-ingles">
            Quero começar agora!
        </a>
        <div class="text-center mt-2">
            <h3><a
                        href="#contact"
                        class="js-scroll-trigger"
                        style="list-style: none; color: #fff;">
                    <i class="icon-arrow-down"></i>
                </a>
            </h3>
        </div>
    </div>
</section>

<!-- Contact page -->
<section class="content-section contact text-white" id="contact">
    <div id="app">

        <snotify></snotify>
    </div>
    <div class="container text-center mt-5">
        <!--Flash message-->
        <!--/Flash message-->
        <div class="col-md">
            <h1><i class="icon-earphones-alt"></i></h1>
            <h2 class="mb-4">Alguma dúvida? Entre em contato!</h2>
            <form method="post" action="{{ url('/contato') }}">
                {{csrf_field()}}

                <div class="container col-md-8 col-10">
                    <div class="form-text m-3">
                        <input type="text" class="m-3 form-control" id="nome" name="nome" placeholder="Nome" required>

                    </div>
                    <div class="form-text m-3">
                        <input type="email" class="m-3 form-control" id="email" name="email" placeholder="email"
                               required>
                    </div>
                    <div class="form-text m-3">
            <textarea class="m-3 form-control" name="mensagem" id="mensagem" placeholder="mensagem:" required>
            </textarea>
                    </div>
                    <div class="form-group m-3">
                        <button type="submit" class="btn btn-dark btn-xl mt-5"
                                style="background-color: #ff615eff; border:none; ">
                            Enviar!
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->

<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" style="background-color: #ff615eff" href="#">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" style="background-color: #ff615eff" href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" style="background-color: #ff615eff" href="#">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Splash Power 2019</p>
        <p class="text-muted small mb-0">curos@splash.com.br</p>
        <p class="text-muted small mb-0">
        @include('about-dev.about-developer')
        <!-- Button trigger modal -->
            <a href data-toggle="modal" data-target=".bd-example-modal-lg">
                Sobre o desenvolvedor
            </a>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="icon-arrow-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/bootstrap-core/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-core/bootstrap.bundle.min.js') }}" defer></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}" defer></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/stylish-portfolio.min.js') }}" defer></script>

<!-- vuejs -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js"></script>
<script src="{{ elixir('js/app.js') }}"></script>
<!--sweet alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>
