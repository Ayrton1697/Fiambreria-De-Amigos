<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/images/FAVICON.png" >
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ecommerce-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>
    <title>De Amigos: Carrito de compra</title>
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
                    
                        @if ($products == null || is_array($products) && count($products)==0 )
                    <span class="cart__qty">{{ Session::get('cart')->totalQty}}</span>
                        @endif
                    @endif
                <i class="icon-ecommerce-cart-content navigation__cart"></i>
                </a>
                </li>
            
        </ul>    

    </div>
</div>
    <header class="tienda-header tienda-header--picadas">

                <div class="tienda-header--text">
               
                <img src="../public/images/logo.png" class="header__text--logo" alt="">

                        <!-- <h1 class="heading-primary heading-primary--1">
                            <span class="heading-primary--big">DE AMIGOS</span> 
                            <span class="heading-primary--small">Productos frescos de calidad</span>   
                        </h1> -->
                </div>

    </header>

<section class="section-carrito">

        <div class="u-center-text">
                        <h2 class="heading-secondary u-margin-bottom-big">
                                Mi carrito
                        </h2>
                        
        </div>

        <div class="u-center-text u-margin-bottom-big">

        <p class="contact__text">Envios a domicilio solo en CABA de Martes a Domingo.</p>	

        </div>
       
        
        @if ($products == null || is_array($products) && count($products)==0 )
                
        <div class="u-center-text">
                        <h2 class="heading-secondary u-margin-bottom-big">
                               No hay productos en el carrito
                        </h2>
        </div>
              
        @elseif(isset($products))
      
            @foreach ($products as $product)
    
                
                    <?php $id= +$product['item']['id']; ?>
                   
                    <div class="carrito-item">
                <span class="id" style="visibility:hidden;"><?=$id?></span>
                            <img src="../public/images/{{$product['item']['image']}}" alt="" class="carrito-item__image">        
                            
                            <div class="carrito-item__text">

                                    <div class="carrito__box carrito__box--name">
                                        <p class="carrito-item__name">{{ $product['item']['name'] }}</p>   
                                    </div>
                                <div class="carrito__box carrito__box--qty">
                                            <p class="carrito-item__cantidad">x {{ $product['qty'] }}</p> 
                                            <a  href="{{ route('product.addtoCart',['id'=>  $id  ]) }}">
                                            <img src="../public/images/FLECHA1.png" class="carrito__img carrito__img--more">
                                            </a>
                                            <a  href="{{ route('product.reduceCart',['id'=>  $id ]) }}">
                                            <img src="../public/images/FLECHA2.png" class="carrito__img carrito__img--less" >
                                            </a>

                <select name="qty" id="qty" onchange="val()">

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>

                </select>
                
              <script>

              function val(){
                var qty= document.getElementById("qty").options[document.getElementById("qty").selectedIndex].value;
                console.log(qty);
                //var item= document.getElementsByClassName('carrito-item');
                //var id= item.closest(".id");
             

                    //var item=qty2.closest(".carrito-item");
                    //var id=item.find('.id').val();
                    //console.log(qty);
                    //console.log(id);

               
                //console.log(item);
                //var value= qty.options[qty.selectedIndex].value;
                // console.log(qty);
                // console.log(item);
                // console.log(id);
              //document.get('product.addWithQty');

                const Http = new XMLHttpRequest();
                const url='http://localhost/fiambreria-de-amigos/fiambredeamigos/public/agregar-al-carrito-con-qty/8/'+qty;
                Http.open("GET", url);
                Http.send();
              
                Http.onreadystatechange = (e) => {
                //location.reload();
                }
            
                
              }
             

              </script>
             
                                </div>

                                <div class="carrito__box--price">
                                    <p class="carrito-item__precio">$ {{ $product['price'] }}</p>  
                                </div>

                                <div class="carrito__box carrito__box--delete"> 
                                    <a class="btn--delete" href="{{route('product.deleteCart', ['id'=> $id]) }}">X</a>
                                </div>
                                        
                            

                                

                    
                            </div>
                    </div>
            @endforeach
            
                <div class="u-center-text u-margin-top-big">
                
                    <a href="https://wa.me/541128671568?text=
                        Hola! Me gustaria realizar el siguiente pedido:%20
                    <?php foreach ($products as $product): ?>
                    {{ $product['item']['name']. ' X ' .$product['qty']. ' = $ '.$product['price']}}%20
                    <?php  endforeach; ?>
                    Total: $ <?php if (Session::has('cart')) 
                        
                        echo (Session::get('cart')->totalPrice);
                          ?>
                " target="_blank" class="btn btn--beige">Hacer pedido</a>
                    
                    </div>
        @endif

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