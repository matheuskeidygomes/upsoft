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

  echo "<script> alert('Email successfully sent!') </script>";
}

?>

<!DOCTYPE html>

<html>

<head>

  <title> Upsoft - System development </title>

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
      color: #bd017b;
      font-weight: bold;

    }

    .ptbutton:hover {
      background: linear-gradient(to top, #ed1b64, rgb(157, 32, 169));
      border-color: transparent;
      font-weight: bold;
      color: white;
      ;
    }

    .engbutton {
      border-color: rgb(157, 32, 169);
      background: linear-gradient(to top, #ed1b64, rgb(157, 32, 169));
      color: white;
      font-weight: bold;

    }


    .engbutton:hover {
      border-color: transparent;
      font-weight: bold;
      color: white;
      font-weight: bold;
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

        <a href="indexEN.php"> <img src="assets/imagens/logo.png" width="300" /> </a>

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
                style="font-weight: bold; color: rgb(255, 255, 255);"> Services </a>
              <a href="#" class="btn nav-item nav-link" data-toggle="modal" data-target="#contato"
                style="font-weight: bold; color: rgb(255, 255, 255);"> Contact us </a>



              <!-- @@@@@@@@@@@@@@@@@@@ MODAL ENTRE EM CONTATO @@@@@@@@@@@@@@@@@@@@@@ -->

              <div class="modal fade" id="contato">

                <div class="modal-dialog modal-dialog-centered modal-lg">

                  <div class="modal-content" style="background-color: #101010; ">

                    <div class="modal-header" style="border: 0px;">

                      <h3 class="modal-title" style="background: -webkit-linear-gradient(#ed1b64, rgb(157, 32, 169));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent; font-weight: bold;"> Contact-us <img src="assets/imagens/contato.png"
                          width="25" style="margin-left: 10px;" /> </h3>

                      <button class="close" data-dismiss="modal"> <span>&times;</span> </button>

                    </div>

                    <div class="row"
                      style="margin: 0px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100%; border-radius: 5px;">

                    </div>

                    <div class="modal-body">

                      <div class="row">

                        <div class="col-lg">

                          </br>

                          <p style="color:white; text-align: left; font-size: 18px;"> Contact us for more information
                            about projects,
                            budgets or questions. Fill in the fields and we will get back to you as soon as possible. If
                            your request for a quote is required, please specify all details regarding your project.
                          </p>

                        </div>

                        <div class="col-lg">

                          </br>

                          <form method="POST" id="formulario" onsubmit="validaForm(); return false;">

                            <div class="form-group">

                              <input id="nome" type="text" name="nome" class="form-control"
                                placeholder="Complete Name" />
                              </br>

                            </div>

                            <div class="form-group">

                              <input id="email" type="email" name="email" class="form-control" placeholder="E-mail" />
                              </br>

                            </div>


                            <div class="form-group">

                              <textarea id="mensagem" type="text" name="mensagem" class="form-control"
                                placeholder=" Type here your message. "> </textarea>
                              </br>

                            </div>

                            <div class="form-group">

                              <input type="submit" value="Send" class="btn btn-primary form-control pink"
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

            <h1 class="gradiente" style="padding: 20px; text-align: center;"> TRY THE </br> BEST CHOICE
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

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;"> Advanced </br>
          Softwares </h1>

      </div>

      <div class="row-md-4 color" style="border-radius: 50%; margin-bottom: 20px;  text-align: center;">

        <img src="assets/imagens/qualidade.png" width="45" style="margin: 20px 0px 0px 0px" />

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;">
          Quality </br> Assurance </h1>

      </div>

      <div class="row-md-4 color" style="border-radius: 50%;  margin-bottom: 20px;  text-align: center;">

        <img src="assets/imagens/luminaria.png" width="45" style="margin: 20px 0px 0px 0px" />

        <h1 style="margin: 20px 40px 40px 40px; color: white; font-size: 18px; font-weight: bold;">

          Innovative </br> Ideas

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

        <h2 id="sobre" style="padding: 40px 35px 0px 30px; color:white;"> The Upsoft <img
            src="assets/imagens/processador.png" style="margin-left:10px;" width="40" height="40" /> </h2>

        <div class="row"
          style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

        </div>

        <h5 style="padding: 30px 35px 0px 30px; color:white;"> We are a modern software development company. We work on customized projects for the most varied branches of activities. Our principle is the development of applications adapted to the needs of each client. Our developer time has experience and great talents that when combined, unparalleled results. We are a multidisciplinary team, qualified and focused on understanding the business of each client so that we can build solutions for all types of segments.</h5>

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

          <h1 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; "> Services <img
              src="assets/imagens/serviços.png" width="35" style="margin-left:10px;" /> </h2>

            <div class="row"
              style="margin: 0px 20px 0px 20px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

            </div>

         

        </div>

        <div class="col-lg-8" style="padding:25px;  ">

          <div class="row service-one-wrapper">

            <div class="col-lg-6" style="padding: 30px 20px; ">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px;">
                Systems <img src="assets/imagens/network.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px  "> Application development and
                web systems, we help to put your idea on the web, be it a static or dynamic website we help to create,
                develop and publish your project, using the most current technologies in the market, as well as
                we offer all the support necessary for your growth in the digital environment. </p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px; ">
                Aplications <img src="assets/imagens/smartphone.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px "> Creation and development of
                solutions for mobile, creating a unique and personalized app to meet your business plan and
                transform your dream into reality, we use the best technologies to provide a lightweight and
                fluid, combining UX and UI to maximize the user experience. </p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px;">
                E-commerce <img src="assets/imagens/tag.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px ;">
                Your online business with
                necessary support, we help you migrate to the digital world, increase your reach by consolidating your
                online presence, we use advanced business intelligence strategies to set goals and
                consolidate your idea, with all data-based decision making.</p>

            </div>

            <div class="col-lg-6" style="padding: 30px 20px;">

              <h2 class="scroll" id="service" style="color:white; padding: 20px 0px 10px 0px ; font-size: 25px; ">
                Dashboards <img src="assets/imagens/monitor.png" width="35" style="margin-left:10px;" /> </h2>

              <div class="row"
                style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 100px; border-radius: 5px;">

              </div>

              <p style=" color:white; padding: 20px 0px 10px 0px ; font-size: 18px  ">Track the performance of your
                business in an easy and intuitive way, we developed a system where we provide monitoring of
                results of your company, be it daily, monthly or even in real time, facilitating the
                monitoring your business and providing better growth opportunities based on your
                goals set. </p>

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

      <h2 class="scroll" id="service" style="color:white; padding: 0px 0px 10px 0px ;">
        

      Agile development methods</h2>

      <div class="row"
        style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 50px; border-radius: 5px;">

      </div>

      <h5 style=" color:white; padding: 20px 0px 10px 0px ;"> 
We make use of agile methodologies, which allow you to follow the development of the project with total comfort and security in relation to the established deadlines, with weekly deliveries, which allows you to be fully aware of what is being developed, thus providing a overview of your project and how your idea developed.</h5>

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

      <h2 class="scroll" id="service" style="color:white; padding: 0px 0px 10px 0px ;"> Modern and personalized designs </h2>

      <div class="row"
        style="margin: 0px 20px 0px 30px; background: linear-gradient(to right, #ed1b64, rgb(157, 32, 169)); height:4px; width: 50px; border-radius: 5px;">

      </div>

      <h5 style=" color:white; padding: 20px 0px 10px 0px ;"> Through our team of programmers, we create your project in a personalized way, understanding your idea and applying a development solution to it. </h5>

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

          <p class="text-center" style="color: white; margin: 15px; font-size: 12px;"> Copyright © 2021 Upsoft Company
            All rights reserved.</p>

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
        alert('You need to enter the name'); erro = true;
      }
      if ($('#email').val() == '' && !erro) {
        alert('You need to enter the e-mail'); erro = true;
      }
      if ($('#mensagem').val() == '' && !erro) {
        alert('You need to enter the message'); erro = true;
      }

      //se nao tiver erros
      if (!erro) {
        $('#formulario').submit();
      }
    }


  </script>

</body>

</html>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ MATHEUS KEIDY E BRUNO PALHANO WEBDEV @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->