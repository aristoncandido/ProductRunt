<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="style.css">


    <title>Ariston Candido - TEMA </title>


</head>

<body>

    <section class="topo">






        <div class="center">


            <header>

                <img src="./imgs/logo.png" alt="logo marca" srcset="">

            </header>

            <ul class="menu-desktop">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href=""> Sobre</a>
                </li>
                <li>
                    <a href=""> Contato</a>
                </li>

            </ul>





            <div class="clear"></div>


            <br>
            <br>
            <br>


            <div class="w50">
                <div class="time-descricao">
                    <h2>Melhore a comunicação com seu cliente e time.</h2>
                    <p>
                        Consultoria especializada em startups, empresas, principalmente, pessoas.
                    </p>
                    <a target="_blank" href="https://www.linkedin.com/in/ariston-cândido-44964a1bb/">
                        Saiba Mais
                    </a>

                </div>




            </div><!-- W50 -->

            <div class="w50">
                <img id="img_home" src="./imgs/equipe.png" alt="uma equipe trabalhando">
            </div><!-- W50 -->

            <div class="clear">

            </div>

            <div class="bttn-down">

                <img style="width:25px;height:25px; " class="arrow" src="./imgs/arrow.svg" alt="botao p baixo">

            </div> <!-- bttn -down - arrow  -->



        </div> <!-- CENTER -->


    </section> <!-- TOPO -->


    <section class="clientes-slider">

        <div class="center">

            <img src="./imgs/amazon.png" alt="">
            <img src="./imgs/costco.png" alt="">
            <img src="./imgs/uber.png" alt="">
            <img src="./imgs/walmart.png" alt="">
            <img src="./imgs/dominos.png" alt="">
        </div> <!-- CENTER -->

    </section><!-- CLIENTES-SLIDER -->


    <section class="center">
        <h1>
            Contribuímos de Ponta a Ponta
        </h1>

        <div class="servicos">

            <div class="card">
                <img src="./imgs/ilustracao-01.png" alt="">
                <div class="texto">


                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua cominicação esteja alinhada com seu propósito, cada palavra conta</p>
                </div>

            </div>
            <div class="card">
                <img src="imgs/ilustracao-02.png" alt="">
                <div class="texto">


                    <h3>Sites e Intranets</h3>
                    <p>Um diálogo só acontece quando ambadas as partes falam e escutam garante que seu público te
                        entenda</p>
                </div>
            </div>
            <div class="card">
                <img src="imgs/ilustracao-03.png" alt="">
                <div class="texto">




                    <h3>Comunicação one-to-one</h3>
                    <p>O Digital veio pra ficar, sem dúvidas, mas uma comunicação integrada de verdade exige clareza nas
                        decisões</p>
                </div>
            </div>




        </div><!-- serviços -->

    </section><!-- CENTER -->







    <script src="js/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $('section.clientes-slider .center').slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            centerPadding: 0,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            slidesToScroll: 2,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]




        });
    });
    </script>
</body>

</html>