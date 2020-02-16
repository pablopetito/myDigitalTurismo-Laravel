<?php
  
//   include_once 'config.php';

 
  
//   function okActualizar(){
//     if (isset($_GET["actualizar"])) {
//         if ($_GET["actualizar"] == "ok") {
//             return true;                
//         }
//     }   
// }

// if ($_SESSION) {

//       if ($_SESSION["email"] == "admin@admin.com") {
//           $usuarioAdmin = new UsuarioAdmin($_SESSION);

//         }else{
          
//           $usuario = new UsuarioComun($_SESSION);

//         }

// }
       
?>
@extends('plantillas.encabezado')

@section('title', 'Panel de Categorías')

@section('h1', 'Panel de Categorías')

@section('main')


  <div class="container-fluid contenedor-nav">
    <div class="row">
    
        <div class="col-12 carrusel-container">
      
        <section class="texto-carrusel">
          
          <h1>DigitalTurismo <br>te acerca a los mejores destinos de Argentina<p>Veni a conocer nuestros Maravillosos Paisajes</p></h1>
        </section>
        <section class="carrusel">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/dibujo1.svg" class="d-block w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/dibujo2.svg" class="d-block w-100 img-fluid" alt="...">
              </div>
              
            </div>
          </div>
        </section>
      </div> 
    </div>
  </div>
  
  <!------------------ SECCION DE PRODUCTOS  ----------------- -->
  <div class="container-fluid ">
    <div class="row contenedor_seccion_productos">
      
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-percent"><span>off</span></i> Promociones
          </h2> 
        </div>
        
        <div class="img-cont-promo d-flex flex-wrap">
          
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0"> 
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="..."> 
            </div>
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>  
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img src="images/iconos/OfertaEspecial.png" alt="promo" class="logo-promo">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">   
            </div>  
          </article>
        </div>
      </section>
      
      <!--------------------- DESTACADOS---------------------------->
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-star"></i> Destacados
          </h2>
        </div>
        <div class="img-cont-destacado d-flex flex-wrap">
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <img class="star-destacado" src="images/stars.png" alt="">
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>    
          </article> 
        </div>  
      </section>
      
      <!--------------------- DESTINOS---------------------------->
      
      <section class="col-12">
        <div class="col-12">
          <h2>
            <i class="fas fa-plane-departure"></i>Destinos
          </h2> 
        </div>
        <div class="img-cont-destino d-flex flex-wrap"> 
          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>
          </article>

          <article class="col-12 col-md-6 col-lg-4  flex-sm-shrink-0">
            <div class="card carta-promocion">
              <button class="favorito"><i class="fas fa-heart"></i></button>
              <div class="imagen-articulo-contenedor">
                <a href="detalleProducto.php" class="acceso-carrito" title="Más información">
                  <h3>BARILOCHE</h3>
                  <p>"SKI ADVENTURE 7 DIAS"</p>
                  <h4>$ 14.500</h4>
                </a> 
              </div>
              <img src="images/Destinos/Bariloche/barilocheEsquiando.jpg" class="card-img-top" alt="...">
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>  
