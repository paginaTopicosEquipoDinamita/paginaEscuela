<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escuela Martin Lutero</title>
    <link rel="icon" href="images/solo logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<style>
    .ofrece {
        max-width: 1000px;
    }

    .subtil {
        font-size: 45px;
    }

    .enlaces {
        text-decoration: none;
    }

    p {
        font-size: 17px;
    }

    .enlaces:hover {
        color: black !important;
        font-weight: bold !important;
    }

    .red {
        font-size: 25px;
    }

    .bi-whatsapp:hover {
        color: #18B100 !important;
    }

    .bi-facebook:hover {
        color: #0062AB !important;
    }

    .bi-twitter:hover {
        color: #00C5FF !important;
    }

    .bi-youtube:hover {
        color: #FF0000 !important;
    }

    .h5 {
        text-decoration: none;
    }

    .text__ofrece {
        text-align: justify;
    }

    .text__nos {
        text-align: justify;
    }

    @media screen and (max-width: 768px) {
        .subtil {
            text-align: center !important;
            font-size: 27px;
        }

        .logoPrincipal {
            width: 250px;
            height: 250px;
        }

        .img__generica {
            width: 250px;
            height: 250px;
        }

        .division {
            margin-right: 30px;
            margin-left: 30px;
        }

        .red {
            font-size: 35px;
        }
    }
</style>

<body>

    <!-- Barra de menu de incio -->
    <?php require("navbar.php"); ?>
    <br><br>

    <!-- CARRUCEL -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bannerMenu1.jpg" class="d-block w-100" alt="bn1">
            </div>
            <div class="carousel-item">
                <img src="images/bannerMenu2.jpg" class="d-block w-100" alt="bn2">
            </div>
            <div class="carousel-item">
                <img src="images/bannerMenu3.jpg" class="d-block w-100" alt="bn3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- LOGO DE LA INSTITUCION -->
    <div class="container text-center">
        <img src="images/logroPrincipal.png" class="logoPrincipal" width="350" height="350">
    </div>

    <!-- LO QUE OFRECE LA INSTITUCION -->
    <div class="container ofrece">

        <hr class="division mb-5">

        <div class="row">
            <div class="col-md-7 text-center my-auto">
                <div class="container">
                    <h2 class="text-end text-secondary fw-bold mb-4 subtil">CAMPUS UNIVERSITARIO</h2>
                    <p class="text__ofrece">El Campus incluye todas las propiedades de una universidad, incluido el conjunto de
                        edificios que la forman. Generalmente un campus incluye las <span class="fst-italic">bibliotecas</span>, las <span class="fst-italic">facultades</span> y
                        <span class="fst-italic">escuelas</span>,
                        <span class="fst-italic">las aulas</span>, <span class="fst-italic">las recidencias</span> para los estudiantes, las <span class="fst-italic">zonas deportivas</span> y las áreas de
                        esparcimiento
                        como <span class="fst-italic">cafetería</span>, <span class="fst-italic">tiendas</span>, <span class="fst-italic">jardines</span> y <span class="fst-italic">parques</span>.
                    </p>
                </div>
            </div>
            <div class="col-md-5 text-center my-auto">
                <div class="container">
                    <img class="rounded mx-auto img__generica" src="images/ofreceUni1.jpg" width="350" height="350">
                </div>
            </div>
        </div>

        <hr class="division mb-5 mt-5">

        <div class="row flex-row-reverse">
            <div class="col-md-7 text-center my-auto">
                <div class="container">
                    <h2 class="text-start text-secondary fw-bold mb-4 subtil">TECNOLOGÍA</h2>
                    <p class="text__ofrece">La tecnología es la suma de técnicas, habilidades, métodos y procesos utilizados en
                        la
                        producción de bienes o servicios o en el logro de objetivos, como la investigación científica.
                        La tecnología puede ser el conocimiento de técnicas, procesos y similares, o puede integrarse en
                        máquinas para permitir su funcionamiento sin un conocimiento detallado de su funcionamiento. Los
                        sistemas que aplican tecnología tomando una entrada, cambiándola de
                        acuerdo con el uso del sistema y luego produciendo un resultado se denominan sistemas
                        tecnológicos.</p>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <img class="rounded mx-auto d-block img__generica " src="images/ofreceUni2.jpg" width="350" height="350">
            </div>
        </div>

        <hr class="division mb-5 mt-5">

        <div class="row">
            <div class="col-md-7 text-center my-auto">
                <div class="container">
                    <h2 class="text-end text-secondary fw-bold mb-4 subtil">PROFESORES</h2>
                    <p class="text__ofrece">El nuevo perfil del docente universitario, más centrado en el aprendizaje y
                        necesidades del alumnado, impulsa una nueva arquitectura de la tutoría universitaria. Este
                        trabajo describe la validación de una escala de medida de las competencias tutoriales del
                        profesorado desde la perspectiva del alumnado. </p>
                </div>
            </div>
            <div class="col-md-5 text-center mb-5">
                <img class="rounded mx-auto d-block img__generica " src="images/ofreceUni3.jpg" width="350" height="350">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row row-text-center text-md-start">

                <!--NOSOTROS-->
                <div class="col-md-3 mx-auto mt-3">
                    <a href="index.php" class="text-uppercase mb-4 fw-bold text-secondary h5">
                        <img src="images/solo logo.png" alt="Logo" width="32" height="30" class="d-inline-block align-text-top"> Escuela Martin Lutero
                    </a>
                    <hr class="mb-4">
                    <div class="container">
                        <p class="text__nos">
                            La Escuela Martin Lutero es un proyecto realizado por un grupo de estudiantes del
                            4to Semestre de la Ingenieria en Sistemas Computacionales del <a class="enlaces text-secondary fw-bold" href="https://www.tecmartinez.edu.mx/">ITSMT</a>.
                            Creada y diseñada por Jesus Ruben, Los Gemelos, Erick Santiago y Brandon Hdz.
                        </p>
                    </div>
                </div>

                <!--ENLACES-->
                <div class="col-md-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-secondary">Enlaces</h5>
                    <hr class="mb-4">

                    <!-- ENLACES SIN CONEXION -->
                    <?php
                    if (empty($_SESSION["id"])) : ?>
                        <p>
                            <a class="text-secondary text-secondary enlaces" href="Login1.php">Iniciar Sesión</a>
                        </p>
                        <p>
                            <a class="text-secondary text-secondary enlaces" href="Registro.php">Registrarse</a>
                        </p>
                    <?php else : ?>
                        <!-- ENLACES CON CONEXION -->
                        <p>
                            <a class="text-secondary text-secondary enlaces" href="Login1.php">Tu Perfil</a>
                        </p>
                    <?php endif; ?>

                    <p>
                        <a class="text-secondary text-secondary enlaces" href="tarjetas.php">Comunicación</a>
                    </p>
                </div>

                <!--CURSOS-->
                <div class="col-md-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-secondary">Cursos</h5>
                    <hr class="mb-4">
                    <p>
                        <a class="text-secondary text-secondary enlaces" href="#">Ingenierias</a>
                    </p>
                    <p>
                        <a class="text-secondary text-secondary enlaces" href="#">Act. Complementarias</a>
                    </p>
                    <p>
                        <a class="text-secondary text-secondary enlaces" href="#">Talleres de Verano</a>
                    </p>
                    <p>
                        <a class="text-secondary text-secondary enlaces" href="#">Eventos Anuales</a>
                    </p>
                </div>

                <!--CONTACTO-->
                <div class="col-md-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-secondary">Contacto</h5>
                    <hr class="mb-4">

                    <p>
                        <i class="bi bi-house-fill me-3"></i> México, ciudad 255
                    </p>
                    <p>
                        <i class="bi bi-envelope-at-fill me-3"></i> test@example.com
                    </p>
                    <p>
                        <i class="bi bi-telephone-fill me-3"></i> +5555555555
                    </p>
                </div>

                <hr class="mb-4">

                <!--DERECHOS Y REDES SOCIALES-->
                <div class="text-center mb-2">
                    <p class="fw-bold">
                        Todos los derechos reservados
                    </p>
                </div>

                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-whatsapp red"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-facebook red"></i></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-twitter red"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-youtube red"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>