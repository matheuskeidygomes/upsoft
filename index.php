<?php

if(isset($_POST['nome']) &&!empty($_POST['nome'])) {

  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $msg = addslashes($_POST['mensagem']);

  $para = "contato@upsoftdev.com";
  $assunto = "Contato Cliente Upsoft";
  $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
  $cabeçalho = "From: administracao@upsoftdev.com"."\r\n".
               "Reply-To: ".$email."\r\n".
               "X-Mailer: PHP/".phpversion();

  mail($para, $assunto, $corpo, $cabeçalho);

  echo "<script> alert('Email enviado com sucesso!') </script>";
}

?>

<!DOCTYPE html>

<html>

<head>

  <title> Upsoft - Desenvolvimento de Sistemas </title>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <link rel="sortcut icon" href="assets/imagens/navicon.png" type="image/png" />

  <link rel="preconnect" href="https://fonts.gstatic.com">






  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap');

    body {
      background-color: #232323;
      font-family: Poppins, sans-serif;
    }

    .btn.focus,
    .btn:focus {
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(2, 2, 2, 0);
    }

    .navbar-nav a:hover {
      border-bottom: 2px solid #ed1b64;
    }

    #hover:hover {
      background: linear-gradient(to bottom, #ed1b64, rgb(157, 32, 169));
      color: white;
    }

    .pink {
      background: linear-gradient(to top, #ed1b64, rgb(157, 32, 169));
      color: white;
    }

    .color {
      background-color: #101010;

    }

    .color:hover {
      background-color: rgb(151, 11, 100);
      -webkit-transition: 0.5s ease-out;
      -moz-transition: 0.5s ease-out;
      -o-transition: 0.5s ease-out;
      transition: 0.5s ease-out;


    }

    h1.gradiente {
      background: -webkit-linear-gradient(#ed1b64, rgb(157, 32, 169));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 50px;
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;

    }

    .parallax {
      background-image: url("./assets/imagens/background.png");

      height: 300px;

      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .parallax2 {
      background-image: url("./assets/imagens/background2.png");

      height: 300px;

      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .parallax3 {
      background-image: url("./assets/imagens/background3.png");

      height: 300px;

      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    #scrollup {

      position: fixed;
      bottom: 60px;
      right: 40px;
      width: 40px;
      height: 40px;

    }

    #scrollup:hover {
      cursor: pointer;
    }

    .ptbutton {
      border-color: rgb(157, 32, 169);
      background: linear-gradient(to top, #ed1b64, rgb(157, 32, 169));
      color: white;
      font-weight: bold;

    }

    .ptbutton:hover {

      border-color: transparent;
      font-weight: bold;
      color: white;
      font-weight: bold;
      ;
    }

    .engbutton {
      border-color: rgb(157, 32, 169);
      color: #bd017b;
      font-weight: bold;


    }

    .engbutton:hover {
      background: linear-gradient(to top, #ed1b64, rgb(157, 32, 169));
      border-color: transparent;
      font-weight: bold;
      color: white;
    }


    @media only screen and (min-width:250px) and (max-width:600px) {

      .botoes {
        margin-left: 30px;
      }

    }

    @media only screen and (min-width:300px) and (max-width:450px) {

      h1.gradiente {
        font-size: 30px;
      }

    }

    @media only screen and (min-width:990px) and (max-width:1200px) {



      .ptbutton {
        height: 40px;
      }

      .engbutton {
        height: 40px;
      }

      .redesicons {
        margin-top: 15px;
      }

    }

    @media only screen and (min-width:300px) and (max-width:770px) {

      .tecimg {
        text-align:center;
      }     

    }
  </style>

</head>

<body>

  <!-- @@@@@@@@@@@@@@@@@@@@@@@@ HEADER @@@@@@@@@@@@@@@@@@@@@@@@ -->

  <div class="container" style="padding: 0px; background-color: #232323;">

    <header>

      <div class="row justify-content-between" style="margin-left: 0px; margin-right: 0px;"">

        <div class=" col-lg" style="padding: 0px; text-align: center;">

        <a href="index.php"> <img src="assets/imagens/logo.png" width="300" /> </a>

      </div>

      <div class="col-lg-5 align-self-center" style="padding: 0px; text-align: center;">

        <nav class="navbar navbar-expand-lg navbar-dark justify-content-center">

          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">

            <span class="navbar-toggler-icon"> </span>

          </button>

          <div class="navbar-collapse collapse" id="navbarMenu">

            <div class="navbar-nav">

              <a href="index.html" class="btn nav-item nav-link" style="font-weight: bold; color: rgb(255, 255, 255);">
                Home </a>
              <a href="#sobre" class="btn nav-item nav-link scroll" data-toggle="" data-target="#aupsoft"
                style="font-weight: bold; color: rgb(255, 255, 255);"> Upsoft</a>
              <a href="#service" class="btn nav-item nav-link scroll" data-toggle="" data-target="#servicos"
                style="font-weight: bold; color: rgb(255, 255, 255);"> Serviços </a>
              <a href="#" class="btn nav-item nav-link" data-toggle="modal" data-target="#contato"
                style="font-weight: bold; color: rgb(255, 255, 255);"> Contate-nos </a>



              <!-- @@@@@@@@@@@@@@@@@@@ MODAL ENTRE EM CONTATO @@@@@@@@@@@@@@@@@@@@@@ -->

              <div class="modal fade" id="contato">

                <div class="modal-dialog modal-dialog-centered modal-lg">

                  <div id="modal" class="modal-content" style="background-color: #101010; ">

                    <div class="modal-header" style="border: 0px;">

                      <h3 class="modal-title" style="background: -webkit-linear-gradient(#ed1b64, rgb(157, 32, 169));
                      -webkit-background-clip: text;
                      -webkit-text-fill-color: transparent; font-weight: bold;"> Entre em contato <img
                          src="assets/imagens/contato.png" width="25" style="margin-left: 10px;" /> </h3>

                      <button class="close" data-dismiss="modal"> <span>&times;</span> </button>

                    </div>

                    <div class="row"
                      style="margin: 0px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100%; border-radius: 5px;">

                    </div>

                    <div class="modal-body">

                      <div class="row">

                        <div class="col-lg">

                          </br>

                          <p style="color:white; text-align: left; font-size: 18px;"> Fale conosco para mais informações
                            a respeito de
                            projetos, orçamentos ou dúvidas. Preencha os campos necessários que retornaremos o contato o
                            mais breve possível. Caso sua necessidade seja solicitar um orçamento, favor especificar
                            todos os detalhes a respeito de seu projeto. </p>

                        </div>

                        <div class="col-lg">

                          </br>

                          <form method="post" id="formulario" onsubmit="validaForm(); return false;">

                            <div class="form-group">

                              <input id="nome" type="text" name="nome" class="form-control"
                                placeholder="Nome Completo" />
                              </br>

                            </div>

                            <div class="form-group">

                              <input id="email" type="email" name="email" class="form-control" placeholder="E-mail" />
                              </br>

                            </div>


                            <div class="form-group">

                              <textarea id="mensagem" type="text" name="mensagem" class="form-control"
                                placeholder=" Digite aqui sua mensagem. " height="200"> </textarea>
                              </br>

                            </div>

                            <div class="form-group">

                              <input type="submit" value="Enviar" class="btn btn-primary form-control pink"
                                style="border: 0px;" />

                            </div>

                          </form>

                        </div>


                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </nav>

      </div>

      <div class=" col-lg align-self-center" style="padding: 0px; margin: 0px;  text-align: right;">

        <div class="row justify-content-between" style="padding: 0px; margin: 0px;">

          <div class="row" style="padding: 0px;">

            <div class="btn btn-group botoes">

              <a href="index.php" class="btn btn-outline ptbutton"> PT </a>

              <a href="indexEN.php" class="btn btn-outline engbutton"> ENG </a>

            </div>

          </div>

          <div class="col justify-content-end" style="padding: 0px; margin: 0px;">

            <div class="col redesicons" style="margin:0px;">

              <a href=""> <img src="assets/imagens/facebook.png" height="20" width="20" style="margin: 10px;" /> </a>
              <a href=""> <img src="assets/imagens/instagram.png" height="20" width="20" style="margin:  0px" /> </a>
              <a href=""> <img src="assets/imagens/linkedin.png" height="20" width="20" style="margin: 10px;" /> </a>

            </div>

          </div>

        </div>

      </div>



  </div>


  </div>

  </header>

  </div>




  <!-- @@@@@@@@@@@@@@@@@@@@@@@@ BODY @@@@@@@@@@@@@@@@@@@@@@@@ -->



  <div class="container" style="padding: 0px; margin:0 px;">

    <div class="row align-items-center" style="margin: 0px;">

      <div class="col-lg" style="margin: 0px;">

        <div class="row justify-content-center">

          <div class="col">

            <h1 class="gradiente" style="padding: 20px; text-align: center;"> EXPERIMENTE </br> A </br> MELHOR ESCOLHA
            </h1>


          </div>

        </div>

      </div>

      <div class="col-lg" style="padding: 0px; text-align:center;">

        <img src="assets/imagens/back.gif" class="img-fluid" style="padding: 0px;" />

      </div>

    </div>

  </div>


  </br>

  <div class="container">

    <div class="row justify-content-around">

      <div class="row-md-4 color" style="border-radius: 50%; margin-bottom: 20px; text-align: center;">

        <img src="assets/imagens/profits.png" width="45" style="margin: 20px 0px 0px 0px" />

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;"> Softwares </br> de
          Ponta </h1>

      </div>

      <div class="row-md-4 color" style="border-radius: 50%; margin-bottom: 20px;  text-align: center;">

        <img src="assets/imagens/qualidade.png" width="45" style="margin: 20px 0px 0px 0px" />

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;"> Qualidade </br>
          Comprovada </h1>

      </div>

      <div class="row-md-4 color" style="border-radius: 50%;  margin-bottom: 20px;  text-align: center;">

        <img src="assets/imagens/luminaria.png" width="45" style="margin: 20px 0px 0px 0px" />

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;">
          Idéias </br> Inovadoras
        </h1>

      </div>

    </div>

  </div>

  </br> </br>

  <section class="parallax">

    <div class="container-fluid">

      <div class="row">

        <div class="col-xs-12">




        </div>

      </div>

    </div>

  </section>

  <div class="container" style="padding: 0px;">

    <div class="row" style="margin: 0px; background-color: #232323;">

      <div class="col-lg" style="padding: 0px; text-align:center;">

        <img src="assets/imagens/dev.gif" class="img-fluid" style="padding: 0px;" />

      </div>

      <div class="col-lg" style="padding: 0px;">

        <h2 id="sobre" style="padding: 40px 35px 0px 30px; color:white;"> A Upsoft <img
            src="assets/imagens/processador.png" style="margin-left:10px;" width="40" height="40" /> </h2>

        <div class="row"
          style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

        </div>

        <h5 style="padding: 30px 35px 0px 30px; color:white;"> Somos uma empresa de desenvolvimento de softwares modernos. Trabalhamos em projetos customizados para os mais variados ramos de atividades. Nosso princípio é o desenvolvimento de aplicações adaptadas a necessidade de cada cliente. Nosso time de desenvolvedores possui experiência e grandes talentos que quando combinados, produzem resultados incomparáveis. Somos uma equipe multidisciplinar, qualificada e focada no entendimento do negócio de cada cliente para assim construirmos soluções para todo tipo de segmento. </h5>

      </div>

    </div>

  </div>

  </br> </br>

  <section class="parallax2">

    <div class="container-fluid">

      <div class="row">

        <div class="col-xs-12">

        </div>

      </div>

    </div>

  </section>


  <div class="container-fluid" style="padding: 0px; background-color:#101010;">

    <div class="container" style="padding: 0px; background-color:#101010;">

      <div class="row" style="margin: 0px;">

        <div class="col-lg-4" style="margin: 0px; padding:25px;">

          <h1 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; "> Serviços <img
              src="assets/imagens/serviços.png" width="35" style="margin-left:10px;" /> </h2>

            <div class="row"
              style="margin: 0px 20px 0px 20px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

            </div>

        </div>

        <div class="col-lg-8" style="padding:25px;  ">

          <div class="row service-one-wrapper">

            <div class="col-lg-6" style="padding: 30px 20px; ">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px;">
                Sistemas <img src="assets/imagens/network.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px  "> Desenvolvimento de aplicações e
                sistemas web, ajudamos a por sua ideia na web, seja um site estático ou dinâmico ajudamos a criar,
                desenvolver e publicar seu projeto, utilizando as tecnologias mais atuais do mercado, assim como
                oferecemos todo o suporte necessário para seu crescimento no meio digital. </p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px; ">
                Aplicativos <img src="assets/imagens/smartphone.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px "> Criação e desenvolvimento de
                soluções para mobile, criando um app único e personalizado para atender o seu plano de negócio e
                transformar seu sonho em realidade, utilizamos as melhores tecnologias para proporcionar um app leve e
                fluído, combinando UX e UI para maximizar a experência do usuário. </p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px;">
                E-commerce <img src="assets/imagens/tag.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px ;"> Seu negócio online com todo
                suporte necessário, ajudamos você a migrar para o mundo digital, aumente seu alcance consolidando sua
                presença online, utilizamos estratégias avançadas de business intelligence para traçar metas e
                consolidar sua ideia, com todas as tomadas de decisões baseadas em dados.</p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px; ">
                Dashboards <img src="assets/imagens/monitor.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px  "> Acompanhe a performance do seu
                negócio de maneira fácil e intuitiva, desenvolvemos um sistema onde proporcionamos o acompanhamento dos
                resultados da sua empresa, seja ele diário, mensal ou até mesmo em tempo real, facilitando o
                acompanhamento do seu negócio e proporcionando melhores oportunidades de crescimento baseadas em seus
                objetivos traçados. </p>

            </div>

          </div>

        </div>

      </div>


    </div>

  </div>


  </br> </br>


  <div class="container" style="padding: 0px; background-color: #232323 ">

    <div class="row justify-content-center" style="margin:0px ;">

      <div class="row" style="padding: 0px; margin: 0px;">

        <div class="col" style="padding: 20px;  margin: 0px;">

          <h2 class="scroll" id="service" style="color:white; padding: 0px 0px 10px 0px ;"> Metodologias ágeis de desenvolvimento </h2>

          <div class="row"
            style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 50px; border-radius: 5px;">

          </div>

          <h5 style=" color:white; padding: 20px 0px 10px 0px ;"> Fazemos o uso de metodologias ágeis, que permitem que você acompanhe o desenvolvimento do projeto com total conforto e segurança em relação aos prazos estabelecidos, com entregas semanais, o que permite que você possa ficar totalmente por dentro do que está sendo desenvolvido, proporcionando assim uma visão geral do seu projeto e como sua idéia se desenvolvera. </h5>

        </div>

      </div>

    </div>

  </div>

  </br> </br>

  <section class="parallax3">

    <div class="container-fluid">

      <div class="row">

        <div class="col-xs-12">




        </div>

      </div>

    </div>

  </section>


  <div class="container-fluid" style="padding: 0px; background-color:#101010;">

    <div class="container" style="padding: 0px; background-color:#101010;">

      <div class="row" style="margin: 0px;">

        <div class="col-md" style="padding:25px;  ">

          <div class="row service-one-wrapper">

            <div class="col-md-2 tecimg" style="padding: 30px 20px; ">

             <img class="img-fluid" src="assets/imagens/React.png" width="150px"/>


            </div>

            <div class="col-md-2 tecimg" style="padding: 30px 20px;">

            <img class="img-fluid" src="assets/imagens/reactnative.png" width="150px"/>

          

            </div>

            <div class="col-md-2 tecimg" style="padding: 30px 20px;">

            <img class="img-fluid" src="assets/imagens/node.png" width="150px"/>


            </div>

            <div class="col-md-2 tecimg" style="padding: 30px 20px;">

            <img class="img-fluid" src="assets/imagens/php.png" width="150px"/>

             

            </div>

            <div class="col-md-2 tecimg" style="padding: 30px 20px;">

            <img class="img-fluid" src="assets/imagens/laravel.png" width="150px"/>

             

            </div>

            <div class="col-md-2 tecimg" style="padding: 30px 20px;">

            <img class="img-fluid" src="assets/imagens/vue.png" width="150px"/>

             

            </div>

          </div>

        </div>

      </div>


    </div>

  </div>

  </br> </br>

  <div class="container" style="padding: 0px; background-color: #232323 ">

    <div class="row justify-content-center" style="margin:0px ;">

      <div class="row" style="padding: 0px; margin: 0px;">

        <div class="col" style="padding: 20px;  margin: 0px;">

          <h2 class="scroll" id="service" style="color:white; padding: 0px 0px 10px 0px ;"> Projetos Modernos e Personalizados </h2>

          <div class="row"
            style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 50px; border-radius: 5px;">

          </div>

          <h5 style=" color:white; padding: 20px 0px 10px 0px ;"> Através da nossa equipe de programadores, criamos seu projeto de maneira personalizada, entendendo sua idéia e aplicando sobre ela uma solução de desenvolvimento. </h5>

        </div>

      </div>

    </div>

  </div>

  </br> 




  <!-- @@@@@@@@@@@@@@@@@@@ SLIDESHOW @@@@@@@@@@@@@@@@@@ -->



  <div class="container" style="padding: 0px;">

    <div class="col-lg" style="padding: 0px;">

      <div id="slideshow" class="slide carousel">

        <ol class="carousel-indicators">

          <li data-target="#slideshow" data-slide-to="0" class="active"></li>
          <li data-target="#slideshow" data-slide-to="1"></li>
          <li data-target="#slideshow" data-slide-to="2"></li>

        </ol>

        <div class="carousel-inner">

          <div class="carousel-item active">

            <img src="assets/imagens/slideimg.jpg" class="w-100">

          </div>

          <div class="carousel-item">

            <img src="assets/imagens/slideimg.jpg" class="w-100" />

          </div>

        </div>

        <a class="carousel-control-prev" href="#slideshow" data-slide="prev">

          <span class="carousel-control-prev-icon"></span>

        </a>

        <a class="carousel-control-next" href="#slideshow" data-slide="next">

          <span class="carousel-control-next-icon"></span>

        </a>

      </div>

    </div>

  </div>

  </br> </br> </br>

  <div class="botaoup" style="background-color:#232323;">

    <img src="./assets/imagens/up-arrow.png" id="scrollup" /> </button>

  </div>



  <!-- @@@@@@@@@@@@@@@@@@@@@@@@ FOOTER @@@@@@@@@@@@@@@@@@@@@@@@ -->

  <div class="container-fluid" style="padding: 0px; ">

    <footer>

      <div class="row" style="margin: 0px;">

        <div class="col" style="background-color:#101010; padding: 0px; margin: 0px;">

          <p class="text-center" style="color: white; margin: 15px; font-size: 12px;"> Copyright © 2021 Upsoft
            Todos
            os direitos reservados.</p>

        </div>

      </div>

    </footer>

  </div>


  <!-- @@@@@@@@@@@@@@@@@@@@@@2 ARQUIVOS EXTERNOS  @@@@@@@@@@@@@@@@@@@@@  -->


  <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"> </script>

  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"> </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

  <script>
    var $doc = $('html, body');
    $('.scroll').click(function () {
      $doc.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
      }, 500);
      return false;
    });

    $(document).ready(function () {

      $('#scrollup').click(function () {

        $('html, body').animate({ scrollTop: 0 }, 'slow');

      });
    });

    function validaForm() {
      erro = false;
      if ($('#nome').val() == '') {
        alert('Você precisa preencher o campo Nome'); erro = true;
      }
      if ($('#email').val() == '' && !erro) {
        alert('Você precisa preencher o campo E-mail'); erro = true;
      }
      if ($('#mensagem').val() == '' && !erro) {
        alert('Você precisa preencher o campo Mensagem'); erro = true;
      }

      //se nao tiver erros
      if (!erro) {
        $('#formulario').submit();
      }
    }



  </script>

</body>

</html>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  WEBDEV @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->