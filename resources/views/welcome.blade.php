<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <title>Thales Ramos - Advocacia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Advocacia, melhores advogados, advogados online, advogados marília, advogados em são paulo, advogado da família, direito, advogado trabalhista, advogado criminal, oab" name="keywords">
    <meta content="O Escritório Thales Ramos Advocacia está localizado na cidade de Garça, região Centro-Oeste do Estado de São Paulo. Atuamos em diversas áreas do direito e em todo território Nacional." name="description">
    <meta property="og:title" content="Thales Ramos - Advocacia" />
    <meta property="og:site_name" content="Thales Ramos - Advocacia" />
    <meta property="og:image" content="{{ asset('public/assets/img/ogimage.png') }}" />

    <link href="{{ asset('public/assets/img/icon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('public/assets/libs/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/libs/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ladda-themeless.min.css') }}"> -->


    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda-themeless.min.css"> -->

    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <input type="hidden" id="base" base_url="{{ url('/') }}"/>
        <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
                <!--<h1 class="m-0 display-5"><span class="text-primary">Logo</span>Thales</h1> -->
                <img src="{{ asset('public/assets/img/logo.png') }}" alt="" width="90" height="90" class="d-inline-block align-text-top">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Início</a>
                    <a href="#law-firm" class="nav-item nav-link">O Escritório</a>
                    <a href="#professionals" class="nav-item nav-link">Profissionais</a>
                    <a href="#service" class="nav-item nav-link">Serviços</a>
                    <a href="#testimonial" class="nav-item nav-link">Clientes</a>
                    <a href="#contact" class="nav-item nav-link">Contato</a>
                </div>
                <a href="https://api.whatsapp.com/send?phone=5514998431990&amp;text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20uma%20reuni&atilde;o.%20O%20meu%20caso%20&eacute;%20sobre..." class="btn btn-success d-none d-lg-block"><i class="fab fa-whatsapp"></i> ENTRE EM CONTATO</a>
            </div>
        </nav>

        <div class="container-fluid bg-secondary d-flex align-items-center mb-5 py-5" id="home">
            <div class="container">
                <div class="row align-items-center">
                   
                    <div class="col-lg-7 text-center text-lg-left">
                        <h1 class="display-3 text-uppercase mb-2" style="-webkit-text-stroke: 5px #ffffff;">Seja Bem-Vindo</h1>
                        <!--<h1 class="d-inline font-weight-lighter text-white">Advocacia</h1> -->
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                            <a href="https://api.whatsapp.com/send?phone=5514998431990&amp;text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20uma%20reuni&atilde;o.%20O%20meu%20caso%20&eacute;%20sobre..." class="btn btn-success mr-4"><i class="fab fa-whatsapp"></i> ENTRE EM CONTATO</a>
                        </div>
                    </div>
                    <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                        <img class="img-fluid w-100" src="{{ asset('public/assets/img/logo-2.png') }}" alt="" style="margin-left: 30px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="law-firm">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white law-firm" style="-webkit-text-stroke:6px #AA2C42;">
                        O Escritório
                    </h1>
                </div>
                <div class="row position-relative align-items-center justify-content-center">

                    <div class="col-lg-7">
                    <h3 class="mb-4">Escritório Thales Ramos Advocacia</h3>
                    <p>O Escritório Thales Ramos Advocacia está localizado na cidade de Garça, região Centro-Oeste do Estado de São Paulo. Atuamos em diversas áreas do direito e em todo território Nacional. Nosso escritório foi fundado com a finalidade de exercer uma advocacia artesanal e humanizada, prezando sempre pelo contato direto com o cliente, além de compreender suas dores. Sua essência é proporcionar um serviço de excelência e qualidade, buscando soluções técnicas e moldadas as necessidades enfrentadas por seus clientes, demandando o tempo e a dedicação necessária para cada caso.</p>
                    <div class="row mb-3">
                        <div class="col-sm-4 py-2"><h6>Telefone: <span class="text-secondary">(14) 99843-1990</span></h6></div>
                        <div class="col-sm-8 py-2"><h6>E-mail: <span class="text-secondary">contato@thalesramosadvocacia.com.br</span></h6></div>
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=5514998431990&amp;text=Ol%C3%A1%2C%20gostaria%20de%20agendar%20uma%20reuni&atilde;o.%20O%20meu%20caso%20&eacute;%20sobre..." class="btn blue btn-outline-success mr-4"><i class="fab fa-whatsapp"></i> ENTRE EM CONTATO</a>
                </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-5" id="professionals">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white profissionais" style="-webkit-text-stroke:1px #dee2e6;">
                        Profissionais
                    </h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img src="{{ asset('public/assets/img/about-3.png') }}" alt="" class="img-fluid rounded w-100">
                    </div>
                    <div class="col-lg-7">
                        <h3 class="mb-10">Thales Henrique Ramos da Silva</h3>
                        <h6>OAB/SP - 438.950</h6>
                        <p>Advogado e Sócio fundador do escritório Thales Ramos Advocacia. Graduado em Direito pelo UNIVEM - Centro Universitário Eurípides de Marília</p>
                        <p>Pós-graduado em Direito do Consumidor na Era Digital pelo Centro Universitário UNIDOMBOSCO.</p>
                        <p>Pós-graduado em Direito Digital e Compliance pelo UNIVEM - Centro Universitário Eurípides de Marília.</p>
                        <p>Conciliador e Mediador Judicial/Extrajudicial pelo UNIVEM - Centro Universitário Eurípides de Marília.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5" id="service">
            <div class="container">
                <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6; font-size: 80px;">Serviços</h1>
                </div>
                <div class="row pb-3">
                    <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fas fa-landmark service-icon bg-danger text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0 text-danger">Direito Cível e Consumidor</h4>
                        </div>
                        <p>O escritório oferece aos seus clientes o apoio jurídico necessário à viabilização de soluções ágeis e inovadoras em demandas de diversas naturezas, nas frentes consultiva e contenciosa, sempre trabalhando em conjunto com seus clientes, garantindo, desse modo, uma abordagem personalizada e a obtenção dos resultados almejados.
                        Atuamos especialmente com a defesa do cidadão em relação aos seus direitos, enquanto consumidor de bens e serviços. Auxiliamos em questões relacionadas ao consumo em geral, defesa dos direitos básicos do consumidor, qualidade de produtos e serviços, prevenção e reparação de danos oriundos de relações de consumo, proteção de saúde e segurança; Responsabilidade pelo fato/vício do serviço ou produto.
                        </p>
                    </div>
                    <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fa-solid fa-handcuffs service-icon bg-danger text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0 text-danger">Direito Criminal</h4>
                        </div>
                        <p>Nossa equipe está preparada para atuar diretamente na defesa dos acusados ou na assistência da acusação em todo o território nacional, fornecendo suporte jurídico individualizado desde a fase investigatória até o processo criminal, inclusive na execução penal, agindo em todas as instâncias, na esfera federal e estadual, incluindo Superior Tribunal de Justiça e Supremo Tribunal Federal.
                        </p>
                    </div>
                    <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <i class="fa fa-2x fas fa-users service-icon bg-danger text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0 text-danger">Direito de Família e Sucessões</h4>
                        </div>
                        <p>O escritório está habilitado a atuar com as mais variadas questões atinentes ao direito de Família e Sucessões, tanto no âmbito judicial e extrajudicial. Com ênfase em elaboração de pacto antenupcial, escrituras de reconhecimento e dissolução de união estável e de divórcio, interdições, tutelas, curatelas, testamento e inventário; discussões de questões envolvendo a guarda de menores, regulamentação do direito de visita, pensão alimentícia, reconhecimento de paternidade (socioafetiva), entre outros.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="testimonial">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6; font-size: 80px;">Clientes</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('public/assets/img/comentario-1.jpg') }}" style="width: 785px; height: 326px;">
                                </i>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('public/assets/img/comentario-2.jpg') }}" style="width: 785px; height: 326px;">
                                </i>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('public/assets/img/comentario-3.jpg') }}" style="width: 785px; height: 326px;">
                                </i>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('public/assets/img/comentario-4.jpg') }}" style="width: 785px; height: 326px;">
                                </i>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4">
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('public/assets/img/comentario-5.jpg') }}" style="width: 785px; height: 326px;">
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5" id="contact">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6; font-size: 80px;">Contato</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form text-center">
                            <div id="success"></div>
                            @if(count($errors) > 0)
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Preencha os dados corretamente!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Obrigado!!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Ops!!</strong> {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form action="{{ route('contacts.store') }}" name="contato" id="contato" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <input type="text" class="form-control p-4" id="name" name="name" placeholder="Seu Nome" required />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <input type="email" class="form-control p-4" id="email" name="email" placeholder="Seu E-mail" required/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Assunto" required/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control py-3 px-4" rows="5" id="message" name="message" placeholder="Mensagem" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <button class="form-control btn btn-outline-success btn-enviar" type="submit" id="btn-enviar" style="padding: 0;"><i class="fas fa-paper-plane"></i> Enviar Mensagem</button>
                                </div>
                                <!-- <div class="control-group">
                                    <button type="button" class="form-control btn btn-outline-success btn-enviar ladda-button" style="padding: 0;" data-spinner-color="green" data-style="zoom-in"><span class="ladda-label">
                                    <i class="fas fa-paper-plane"></i> Enviar Mensagem
                                        </span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
                                    </button>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14775.667011584532!2d-49.66051555!3d-22.205269749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x11c663ae5905c044!2sThales%20Ramos%20Advocacia!5e0!3m2!1spt-BR!2sbr!4v1657073289290!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="container-fluid text-white mt-5 py-1 px-sm-1 px-md-5" style="background-color: #AA2C42;">
            <div class="container text-center py-5">
                <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-light btn-social mr-2" target="_blank" href="https://www.linkedin.com/in/thales-ramos-4bb2b6141/"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="m-0">Thales Ramos Advocacia 2022 | OAB/SP - 438.950 - Desenvolvido por <a class="text-white font-weight-bold" target="_blank" href="http://www.jmms.com.br">JMMS</a>
                </p>
            </div>
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
        <script src="{{ asset('public/assets/libs/easing/easing.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/assets/libs/lightbox/js/lightbox.min.js') }}"></script>
        <!-- <script src="{{ asset('assets/js/ladda.min.js') }}"></script>
        <script src="{{ asset('assets/js/spin.min.js') }}"></script> f -->


        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/spin.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.min.js"></script> -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-WSM0N11F84"></script> -->
        <script>
          /*window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-WSM0N11F84');*/
        </script>

        <script src="{{ asset('public/assets/js/main.js') }}"></script>
    </body>
</html>
