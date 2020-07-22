<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/images/FAVICON.png" >
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" type="" href="{{ asset('css/ecommerce-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>De Amigos Fiambreria: Picadas, Fiambres, Pastas, Almacén y más  </title>
</head>
<body>



<div class="navigation">

            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">

                        <span class="navigation__icon">&nbsp;</span>

            </label>

            <div class="navigation__background">&nbsp;</div>

        <div class="navigation-nav">

            <ul class="navigation__list">

                <a href="{{route('index')}}" class="navigation__link"> <li class="navigation__item">Inicio</li></a>
                <a href="{{route('quienes-somos')}}" class="navigation__link"> <li class="navigation__item">Quienes somos</li></a>
                <a href="{{ route('productos', ['id'=> 2] ) }} " class="navigation__link"><li class="navigation__item">Fiambres</li></a>
                <a href="{{ route('productos', ['id'=> 3] ) }} " class="navigation__link"> <li class="navigation__item">Almacén</li></a>
                <a href="{{ route('productos', ['id'=> 4] ) }} " class="navigation__link"> <li class="navigation__item">Pastas</li></a>
                <a href="{{route('picadas', ['id' => 1])}}" class="navigation__link"> <li class="navigation__item">Picadas</li></a>
                <a href="{{route('contacto')}}" class="navigation__link"><li class="navigation__item">Contacto</li></a>

                    <li class="navigation__item navigation__item--right">
                        <a href="{{route('cart')}}" class="navigation__link">
                            @if (Session::has('cart')) 
                                
                            <span class="cart__qty">{{ Session::get('cart')->totalQty}}</span>

                            @endif
                        <i class="icon-ecommerce-cart-content navigation__cart"></i>
                        </a>
                    </li>
                
            </ul>    
        
        </div>
    </div>

   <header class="header">
  
            <div class="slider">

                <div class="slides">
                    <div class="slider__images">
                            <!-- <img class="slider__image slider__image--1" src="../public/images/slider1.jpg" > -->
                            <div class="slider__image slider__image--1"></div>
                            <div class="header__text">
                            <img src="../public/images/logo.png" class="header__text--logo" alt="">

                              <div class="u-center-text u-margin-top-big">
                              <a href="#productos-principales" class="btn btn--pedido">Hacé tu pedido</a>
                              </div>
                                <!-- <h1 class="heading-primary heading-primary--1">
                                    <span class="heading-primary--big">DE AMIGOS</span> 
                                    <span class="heading-primary--small">Productos frescos de calidad</span>   
                                </h1> -->
                            </div>
                    </div>
                 
                    <div class="slider__images">
                            <!-- <img class="slider__image slider__image--2" src="../public/images/picada1.jpg" > -->
                            <div class=" slider__image slider__image--2"></div>
                            <div class="header__text">
                                <img src="../public/images/QUESOSYFIAMBRES.png" class="header__text--logo--2" alt="">
                            </div>
                    </div>
                        
                    <div class="slider__images">
                            <!-- <img class="slider__image slider__image--3" src="../public/images/picada2.jpg" > -->
                            <div class=" slider__image slider__image--3"></div>
                            <div class="header__text">
                                <img src="../public/images/picadasfamilia.png" class="header__text--logo--2" alt="">
                            </div>
                    </div>
                    
                       
                </div>
                    <span class="flecha btn__display btn__display-left" onclick="plusDivs(-1)" >&#10092;</span>   
                    <span class="flecha btn__display btn__display-right" onclick="plusDivs(+1)" >&#10093;</span>
            </div>

                        <script>
                            var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                    showDivs(slideIndex += n);
                                    }

                                    function showDivs(n) {
                                    var i;
                                    var x = document.getElementsByClassName("slider__images");
                                   
                                    if (n > x.length) {slideIndex = 1}
                                    if (n < 1) {slideIndex = x.length} ;
                                    for (i = 0; i < x.length; i++) {

                                        x[i].style.opacity = 0.1;
                                        x[i].style.display = "none";
                                       
                                   
                                    }
                                    x[slideIndex-1].style.display = "block";

                                    setTimeout(function(){ 

                                    x[slideIndex-1].style.opacity = 1;
                                    x[slideIndex-1].classList.add("slider__images-is-shown");
                            
                                     }, 100);
                                   
                                   
                                    }

        
                        </script>

     
    
   </header>

   <section class="section-ofertas">

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">Ofertas de la semana</h2>
    </div>

    <div class="row">
        <div class="col-1-of-2">
            <div class="oferta">
                    <div class="card-oferta card-oferta--1">
                        <div class="card-oferta__picture card-oferta__picture--1">
                             <img src="../public/images/descuento.png"  class="card-oferta__promos card-oferta__promos--1" alt="">
                        </div>
                
                  
                    </div>
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="oferta">
                <div class="card-oferta card-oferta--2">
                    <div class="card-oferta__picture card-oferta__picture--2">
                      <img src="../public/images/bancociudad.png"  class="card-oferta__promos card-oferta__promos--1" alt="">
                    </div>
                   
               
                </div>
            </div>
        
    </div>
    </div>





   </section>

   <section class="section-destacados" >
       <div class="u-center-text">
            <h2 class="heading-secondary" id="productos-principales">Nuestros productos</h2>
       </div>
       <div class="productos-principales" >
           <div class="row">
               <div class="col-1-of-3">
                
                        <div class="card">

                            <figure class="card__shape">
                            <img src="../public/images/fideos1.jpg" alt="" class="card__image  ">
                            </figure>

                            <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Pastas</h3>
                            <p class="card__text u-margin-top-small">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quidem deserunt
                                    quis sed officia doloribus quam excepturi dicta i
                                
                                </p>

                                <div class="u-center-text u-margin-top-small">
                                    <a href="{{ route('productos', ['id'=> 4] ) }} " class="btn btn--tienda btn--beige ">Ver todas</a>
           
                                </div>
                        </div>


               </div>
               <div class="col-1-of-3">

               <div class="card">

                            <figure class="card__shape">
                            <img src="../public/images/slider1.jpg" alt="" class="card__image ">
                             </figure>

                            <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Fiambres</h3>
                            <p class="card__text u-margin-top-small">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quidem deserunt
                                    quis sed officia doloribus quam excepturi dicta i
                                
                                </p>
                                <div class="u-center-text u-margin-top-small">
                                    <a href="{{ route('productos', ['id'=> 2] ) }} " class="btn btn--tienda btn--beige ">Ver todos</a>
           
                                </div>
                        </div>
               </div>
               <div class="col-1-of-3">

               <div class="card">
                            
                            <figure class="card__shape">
                            <img src="../public/images/vinos1.jpg" alt="" class="card__image ">
                             </figure>

                            <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Almacén</h3>
                            <p class="card__text u-margin-top-small">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quidem deserunt
                                    quis sed officia doloribus quam excepturi dicta i
                                
                                </p>
                                <div class="u-center-text u-margin-top-small">
                                    <a href="{{ route('productos', ['id'=> 3] ) }}" class="btn btn--tienda btn--beige ">Ver todos</a>
           
                                </div> 
                </div>

               </div>
           </div>

           <div class="u-center-text u-margin-top-big">
            
            
            </div>
       </div>
      
   </section>

   <section class="section-picadas">
    <div class="u-center-text">
         <h2 class="heading-secondary">Nuestras mejores picadas</h2>
    </div>
    <div class="productos-principales">
        <div class="row">
            <div class="col-1-of-3">
             
                     <div class="card">

                         <figure class="card__shape">
                         <img src="../public/images/jamoncocido1.jpg" alt="" class="card__image  ">
                         </figure>

                         <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Jamon Iberico</h3>
                         <p class="card__text u-margin-top-small">
                                 Lorem ipsum dolor sit amet,
                                 consectetur adipisicing elit. Quidem deserunt
                                 quis sed officia doloribus quam excepturi dicta i
                             
                             </p>
                     </div>


            </div>
            <div class="col-1-of-3">

            <div class="card">

                         <figure class="card__shape">
                         <img src="../public/images/picada1.jpg" alt="" class="card__image ">
                          </figure>

                         <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Jamon Serrano</h3>
                         <p class="card__text u-margin-top-small">
                                 Lorem ipsum dolor sit amet,
                                 consectetur adipisicing elit. Quidem deserunt
                                 quis sed officia doloribus quam excepturi dicta i
                             
                             </p>
                     </div>
            </div>
            <div class="col-1-of-3">

            <div class="card">
                         
                         <figure class="card__shape">
                         <img src="../public/images/roquefort1.jpg" alt="" class="card__image ">
                          </figure>

                         <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Queso Suizo</h3>
                         <p class="card__text u-margin-top-small">
                                 Lorem ipsum dolor sit amet,
                                 consectetur adipisicing elit. Quidem deserunt
                                 quis sed officia doloribus quam excepturi dicta i
                             
                             </p>
             </div>

            </div>
            
        </div>
        <div class="u-center-text u-margin-top-small">
            <a href="{{route('picadas', ['id' => 1])}}" class="btn btn--beige ">Ver todas</a>

        </div>
   
    </div>
   
</section>
    <footer class="footer">
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="" class="footer__link">Inicio</a></li>
                        <li class="footer__item"><a href="" class="footer__link">Nosotros</a></li>
                        <li class="footer__item"><a href="" class="footer__link">Contacto</a></li>
                        <li class="footer__item"><a href="" class="footer__link">Productos</a></li>
                        <li class="footer__item"><a href="" class="footer__link">Picadas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                 <a href="" class="footer__link"> &#169 De Amigos</a>
                </p>
                <p class="footer__copyright">
                    Built by <a href="" class="footer__link">Emfes Marketing</a>
                </p>
                <ul class="footer__list">
                    <li class="footer__item"><a href="" class="footer__link"><i class="fa fa-instagram "></i></a></li>
                    <li class="footer__item"><a href="" class="footer__link"><i class="fa fa-facebook "></i></a></li>
                
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>