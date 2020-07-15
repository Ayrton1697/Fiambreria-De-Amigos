<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ecommerce-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>@yield('title')</title>
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

            <li class="navigation__item "><a href="{{route('index')}}" class="navigation__link">Inicio</a></li>
            <li class="navigation__item"><a href="{{route('quienes-somos')}}" class="navigation__link">Quienes somos</a></li>
            <li class="navigation__item"><a href="{{route('productos')}}" class="navigation__link">Productos</a></li>
            <li class="navigation__item"><a href="{{route('picadas')}}" class="navigation__link">Picadas</a></li>
            <li class="navigation__item"><a href="{{route('contacto')}}" class="navigation__link">Contacto</a></li>

                <li class="navigation__item navigation__item--right">
                <a href="" class="navigation__link">
                    @if (Session::has('cart'))
                        
                    <span class="cart__qty">{{ Session::get('cart')->totalQty}}</span>

                    @endif
                <i class="icon-ecommerce-cart-content navigation__cart"></i>
                </a>
                </li>
            
        </ul>    

    </div>
</div>
    <header class="tienda-header tienda-header--picadas">

                <div class="tienda-header--text">

                        <h1 class="heading-primary heading-primary--1">
                            <span class="heading-primary--big">DE AMIGOS</span> 
                            <span class="heading-primary--small">Productos frescos de calidad</span>   
                        </h1>
                </div>

    </header>

<section class="section-carrito">

        <div class="u-center-text">
                        <h2 class="heading-secondary u-margin-bottom-big">
                                Mi carrito
                        </h2>
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

                            <img src="../public/images/roquefort1.jpg" alt="" class="carrito-item__image">        
                            
                            <div class="carrito-item__text">

                                    <div class="carrito__box carrito__box--name">
                                        <p class="carrito-item__name">{{ $product['item']['name'] }}</p>   
                                    </div>
                                <div class="carrito__box carrito__box--qty">
                                            <p class="carrito-item__cantidad">x {{ $product['qty'] }}</p> 
                                            <a class="btn--carrito btn--carrito-more" href="{{ route('product.addtoCart',['id'=>  $id  ]) }}">^</a>
                                            <a class="btn--carrito btn--carrito-less" href="{{ route('product.reduceCart',['id'=>  $id ]) }}">&#8964;</a>
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
                
                    <a href="https://wa.me/541136002930?text=
                        Hola! Me gustaria realizar el siguiente pedido:%0a
                    <?php foreach ($products as $product): ?>
                    {{ $product['item']['name']. ' X ' .$product['qty']. ' = $ '.$product['price']}}%0a
                    <?php  endforeach; ?>
                    
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
            </div>
        </div>
    </footer>