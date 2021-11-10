<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>PVIT</title>
        <link rel="shortcut icon" href="img/icono.jpg">
        <link rel="stylesheet" href="css/styles.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>

     <header class="hero">

        <nav class="nav__hero">
        <div class="container nav__container">
            <div class="logo">
                <h2 class="logo__name"><img src="img/icono.jpg" class="logotipo__pvit"> PVIT Prediccion de vuelos e impulso turístico.</h2>
            </div>
            <div class="links">
                <a href="index.html" class="link">Inicio</a>
                <string><a href="#visita" class="link">Visita</a></string>
                <string><a href="#predicciones" class="link">Predicciones</a></string>
            </div>
        </div>
    </nav>

    <section class="container hero__main">
        <div class="hero__textos">
            <h1 class="title">Bienvenido a PVIT disfruta de la experiencia en <span class="tittle--active">Quintana Roo</span></h1>
            <p class="copy">El mejor lugar para <span class="copy__active">viajar y disfrutar</span></p>
            <a href="qroo.html" class="cta">Conoce más</a>
        </div>
        
        <img src="img/tulum.jpg" class="mockup">
    </section>

     </header>

     <main>
         <section class="services">
             <div class="container">
                 
                <?php 
                include("conexion.php");
                $datostotales = "SELECT * FROM DatosTotales"; ?>
                <div class="container-table">
                        <div class="table__title">Cantidad de Vuelos</div>
                        <div class="table__header">Año</div>
                        <div class="table__header">Total</div>
                        <div class="table__header">Nacionales</div>
                        <div class="table__header">Interacionales</div>


                <?php 
                    $resultado = mysqli_query($conexion, $datostotales);
                    while($row=mysqli_fetch_assoc($resultado)){
                ?>

                       <div class="table__item"><?php echo $row["año"];?></div>
                       <div class="table__item"><?php echo $row["total"];?></div>
                       <div class="table__item"><?php echo $row["nacionales"];?></div>
                       <div class="table__item"><?php echo $row["internacionales"];?></div>

                       

                    <?php } ?>
                    </div>
             </div>
         </section>
         <section id="container-slider">	
            <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
              <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
              <li><a itlist="itList_1" href="#"></a></li>
              <li><a itlist="itList_2" href="#"></a></li>
              <li><a itlist="itList_3" href="#"></a></li>
              <li><a itlist="itList_4" href="#"></a></li>
              <li><a itlist="itList_5" href="#"></a></li>
              <li><a itlist="itList_6" href="#"></a></li>
            </ul>
            <ul id="slider">
              <li style="background-image: url('img/qroo/bacalar.jpg'); z-index:0; opacity: 1;">
                <div class="content_slider" >
                  <div>
                    <h2>Quintana Roo</h2>
                <p>Viaja a Quintana Roo lugar de la playa mas hermosa del mundo</p>
                <a href="qroo.html" target="_self" class="btnSlider">Vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/jalisco/Degollado.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>Jalisco</h2>
                <p>Viaja a Jalisco la tierra del Tequila y Mariachi</p>
                <a href="jalisco.html" target="_self" class="btnSlider">Vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/chiapas/jaguar.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>Chiapas</h2>
                <p>Viaja a Chiapas tierra de cultura y hogar de la selva lacandona</p>
                <a href="chiapas.html" target="_self" class="btnSlider">vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/angelindependencia.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>CDMX</h2>
                <p>Viaja a Ciudad de México la capital del país con bella hiostoria</p>
                <a href="cdmx.html" target="_self" class="btnSlider">vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/Morelos/CATEDRAL_CUERNAVACA.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>Morelos</h2>
                <p>Viaja a Morelos estado rico en historia</p>
                <a href="morelos.html" target="_self" class="btnSlider">vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/Nayarit/guayabitos-rincon-10.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>Nayarit</h2>
                <p>Viaja a Nayarit estado lleno de playas hermosas llenas</p>
                <a href="nayarit.html" target="_self" class="btnSlider">vamos</a>
              </div>
                </div>
              </li>
              <li style="background-image: url('img/Zacatecas/zacatecas.jpg'); ">
                <div class="content_slider" >
                  <div>
                    <h2>Nayarit</h2>
                <p>Viaja a Nayarit estado lleno de playas hermosas llenas</p>
                <a href="zacatecas.html" target="_self" class="btnSlider">vamos</a>
              </div>
                </div>
              </li>
           </ul>
         </section>

     </main>

     <footer class="footer">
         <div class="container footer__caption">
             <div class="footer__copy">
                <p class="copyright">2021 &copy; PVIT Prediccion de vuelos e impuslo turistico</p>
                <p class="copyright">Proyecto escolar prohibido su uso para fines comerciales</p>
             </div>
         </div>
     </footer>

</body>
</html>
