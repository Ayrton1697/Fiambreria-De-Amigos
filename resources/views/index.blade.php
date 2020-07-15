<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" type="" href="css/ecommerce-styles.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Document</title>
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

                <li class="navigation__item"><a href="{{route('index')}}" class="navigation__link">Inicio</a></li>
                <li class="navigation__item"><a href="{{route('quienes-somos')}}" class="navigation__link">Quienes somos</a></li>
                <li class="navigation__item"><a href="{{route('productos')}}" class="navigation__link">Productos</a></li>
                <li class="navigation__item"><a href="{{route('picadas')}}" class="navigation__link">Picadas</a></li>
                <li class="navigation__item"><a href="{{route('contacto')}}" class="navigation__link">Contacto</a></li>

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
                                <h1 class="heading-primary heading-primary--1">
                                    <span class="heading-primary--big">DE AMIGOS</span> 
                                    <span class="heading-primary--small">Productos frescos de calidad</span>   
                                </h1>
                            </div>
                    </div>
                 
                    <div class="slider__images">
                            <!-- <img class="slider__image slider__image--2" src="../public/images/picada1.jpg" > -->
                            <div class=" slider__image slider__image--2"></div>
                            <div class="header__text">
                                <h1 class="heading-primary heading-primary--2">
                                    <span class="heading-primary--big">PICADAS</span> 
                                    <span class="heading-primary--small">Para toda la familia</span>  
                                </h1>
                            </div>
                    </div>
                        
                    <div class="slider__images">
                            <!-- <img class="slider__image slider__image--3" src="../public/images/picada2.jpg" > -->
                            <div class=" slider__image slider__image--3"></div>
                            <div class="header__text">
                                <h1 class="heading-primary heading-primary--3">
                                    <span class="heading-primary--big">QUESOS Y FIAMBRES</span> 
                                    <span class="heading-primary--small">100% FRESCOS</span>  
                                </h1>
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
                            
                        </div>
                        <h4 class="card-oferta__heading">
                            <span class="card-oferta__heading-span card-oferta__heading-span--1">
                                    20% De descuento pagando en efectivo
                            </span>
                            
                        </h4>
                
                    </div>
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="oferta">
                <div class="card-oferta card-oferta--2">
                    <div class="card-oferta__picture card-oferta__picture--2">
                     
                    </div>
                    <h4 class="card-oferta__heading">
                        <span class="card-oferta__heading-span card-oferta__heading-span--2">
                                40% De descuento con Banco Francés
                        </span>
                        
                    </h4>
               
                </div>
            </div>
        
    </div>
    </div>





   </section>

   <section class="section-destacados">
       <div class="u-center-text">
            <h2 class="heading-secondary">Nuestros productos principales</h2>
       </div>
       <div class="productos-principales">
           <div class="row">
               <div class="col-1-of-3">
                
                        <div class="card">

                            <figure class="card__shape">
                            <img src="../public/images/fideos1.jpg" alt="" class="card__image  ">
                            </figure>

                            <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Pastas caseras</h3>
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
                            <img src="../public/images/slider1.jpg" alt="" class="card__image ">
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
                            <img src="../public/images/vinos1.jpg" alt="" class="card__image ">
                             </figure>

                            <h3 class="heading-tertiary u-margin-bottom-medium u-margin-top-small">Vinos artesanales</h3>
                            <p class="card__text u-margin-top-small">
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Quidem deserunt
                                    quis sed officia doloribus quam excepturi dicta i
                                
                                </p>
                </div>

               </div>
           </div>

           <div class="u-center-text u-margin-top-big">
            <a href="{{route('productos')}}" class="btn btn--beige">Ver todos</a>
            
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
         <a href="{{route('picadas')}}" class="btn btn--beige">Ver todas</a>
         
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
                    Built by <a href="" class="footer__link">ASWEB</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>