<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/images/FAVICON.png" >
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
    <header class="tienda-header tienda-header--picadas">

                <div class="tienda-header--text">
                <img src="../../public/images/logo.png" class="header__text--logo" alt="">
                        <!-- <h1 class="heading-primary heading-primary--1">
                            <span class="heading-primary--big">DE AMIGOS</span> 
                            <span class="heading-primary--small">Productos frescos de calidad</span>   
                        </h1> -->
                </div>

    </header>


  @yield('content')
   


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

    @foreach($productos as $producto)     
                <div class="popup" id="popup-{{$producto->id}}">
                        <div class="popup__content">
                            <div class="popup__left" style="background: url(../../public/images/{{$producto->image}}); background-size: cover;
        background-position-x: right;">
                          
                            </div>
                            <div class="popup__right">
                                <a href="#store" class="popup__close">&times;</a>
                                <h2 class="heading-secondary u-margin-bottom-small">{{$producto->name}}</h2>
                                <h3 class="heading-tertiary u-margin-bottom-small">$ {{$producto->price}}</h3>
                                <p class="popup__text">
                                    {{$producto->description}}
                                </p>
                                <a href="{{route('product.addtoCart', ['id'=> $producto->id])}}" class="btn btn--tienda btn--beige ">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    
    @endforeach
</body>
</html>