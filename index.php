<?php
if (isset($_GET["error"])) {
  echo '<script type="text/javascript">alert("Something went wrong");</script>';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Aplicacion de caridad</title>
  <link rel="icon" href="assets/details_img.png">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/cs/index.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
  <script src="assets/bootstrap/js/jquery-1.10.2.js" charset="utf-8"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" href="assets/swiper/swiper.css">
</head>

<body>


  <?php
  include("header.php"); ?>

  <div class="container-fluid p-0 m-0">
    <div class="row m-0">
      <div class="col-12 imgsec">
        <div class="row innerrow">
          <div class="col-12 white">
            <h1 class="donate-now">Bienvenido</h1>
            Apoya las causas que te importan. Con organizaciones benéficas en nuestra base de datos, usted dona a tantas organizaciones o recaudadores de fondos como desee, todo en una canasta de donaciones. 
            Nosotros nos encargamos del resto. Vea y descargue su declaración de donaciones consolidada a pedido. 
            Tenga la seguridad de que su dinero y su información personal están seguros. Las donaciones se procesan a través de nuestro portal seguro con la mejor tecnología de cifrado de transacciones de su clase.
            Ahora no hay necesidad de preocuparse por los problemas de confianza, usamos Ethereum blockchain para almacenar cada transacción. Las donaciones que haces son totalmente rastreables hasta el beneficiario.
            <br><br>
            <a href="listings.php"><button type="button" name="button" class="dn-btn">Dona Ahora</button></a>
            <a href="#about"><button type="button" name="button" class="exp-btn ml-3">Explorar</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid d-none">
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10 p-5">
        <div class="swiper-container p-3">
          <div class="swiper-wrapper ">
            <div class="swiper-slide">
              <img src="assets/person.png" class="w-100">
              <div class="p-2">
                <h5 class="mt-1">Hello some heading goes here asd asd asd</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="text-center">
                  <button type="button" name="button" class="w-75 dn-btn">Donate Now</button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/person.png" class="w-100">
              <div class="p-2">
                <h5 class="mt-1">Hello some heading goes here asd asd asd</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="text-center">
                  <button type="button" name="button" class="w-75 dn-btn">Dona Ahora</button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/person.png" class="w-100">
              <div class="p-2">
                <h5 class="mt-1">Hello some heading goes here asd asd asd</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="text-center">
                  <button type="button" name="button" class="w-75 dn-btn">Dona Ahora</button>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="assets/person.png" class="w-100">
              <div class="p-2">
                <h5 class="mt-1">Hello some heading goes here asd asd asd</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="text-center">
                  <button type="button" name="button" class="w-75 dn-btn">Dona Ahora</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5" id="about">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6 p-5">
        <h3 class="mb-5">Sobre Nosotros</h3>
        La necesidad de llevar la confianza a la caridad es inmensa. La mayoría de las personas dudan en donar debido a la participación de intermediarios y la falta de comprensión de si el dinero que tanto les costó ganar se está utilizando como pensaban.

Estamos aquí para resolver precisamente eso. Ahora ya no necesitas preocuparte por tus aportes. Nuestra solución se basa en la cadena de bloques Ethereum, lo que garantiza que toda la información sobre las transacciones se almacene en un libro público.

Siempre puede verificar los detalles de los beneficiarios y la documentación relacionada y también puede contactarlos antes de proceder con cualquier donación para asegurarse de que todo esté bien.

Además de esto, siempre puede realizar un seguimiento de su contribución para asegurarse de que siempre va bien y llega a las manos previstas.

Puede optar por donar a personas con billetera directamente o puede donar a través de una ONG que, en su nombre, entrega los beneficios a las personas sin billetera.

Ahora usted está a cargo de las donaciones que hace en lugar de cualquier intermediario. Entonces, comencemos a donar iniciando sesión o simplemente registrándonos.
      </div>
      <div class="col-5 pr-0 pl-5">
        <img src="assets/Group146.png" class="w-100">
      </div>
    </div>
  </div>

  <div class="container-fluid mt-3" id="contact">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10 p-5">
        <h3>Contactenos</h3>
        <div class="row mt-5">
          <div class="col-6 p-2">
            <div class="row m-0 p-2 con-box">
              <div class="col-3">
                <img src="assets/avatar.png" class="w-100">
              </div>
              <div class="col-9 p-0">
                <h5>Shrikanth Basa</h5>
                <p class="mb-0">Hey, I'm a final year student in Computer Engineering from St.Francis Institute of Technology.</p>
                <p>E-mail: shrikanthbasa35@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-6 p-2">
            <div class="row m-0 p-2 con-box">
              <div class="col-3">
                <img src="assets/avatar2.jpg" class="w-100">
              </div>
              <div class="col-9 p-0">
                <h5>Vaibhav Shah</h5>
                <p class="mb-0">Hey, I'm a final year student in Computer Engineering from St.Francis Institute of Technology.</p>
                <p>E-mail: vrshah1999@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-6 p-2 mt-2">
            <div class="row m-0 p-2 con-box">
              <div class="col-3">
                <img src="assets/avatar3.png" class="w-100">
              </div>
              <div class="col-9 p-0">
                <h5>Rushabh Shah</h5>
                <p class="mb-0">Hey, I'm a final year student in Computer Engineering from St.Francis Institute of Technology.</p>
                <p>E-mail: rushabhs1999@gmail.com </p>
              </div>
            </div>
          </div>
          <div class="col-6 p-2 mt-2">
            <div class="row m-0 p-2 con-box">
              <div class="col-3">
                <img src="assets/avatar4.png" class="w-100">
              </div>
              <div class="col-9 p-0">
                <h5>Jaynish Morakhia</h5>
                <p class="mb-0">Hey, I'm a final year student in Computer Engineering from St.Francis Institute of Technology.</p>
                <p>E-mail: mjaynish@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <img src="assets/group65.png" class="w-100">
    <div class="row p-2">
      <div class="col-4">
        <h1 class="font-weight-bold">Charity DApp</h1>
      </div>
      <div class="col-8 p-3 text-right">
        <p>Powered by Ethereum, Developed by Shrikanth, Vaibhav, Rushabh and Jaynish</p>
      </div>
    </div>
  </div>

  <script src="assets/swiper/swiper.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      slidesPerView: 3,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>

</body>

</html>
