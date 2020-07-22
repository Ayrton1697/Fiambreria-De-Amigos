<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/images/FAVICON.png" >
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ecommerce-styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/3e89adbc58.js" crossorigin="anonymous"></script>

    <title>De Amigos Fiambreria</title>
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


                <img src="../public/images/logo.png" class="header__text--logo" alt="">
                        <!-- <h1 class="heading-primary heading-primary--1">
                            <span class="heading-primary--big">DE AMIGOS</span> 
                            <span class="heading-primary--small">Productos frescos de calidad</span>   
                        </h1> -->
                </div>

    </header>
    
        <div class="u-center-text">
                            <h2 class="heading-secondary u-margin-bottom-big u-margin-top-big">
                                   Contacto
                            </h2>
            </div>

    <section class="section-book">

                         <div class="contact">

									<div class="contact__place u-margin-bottom-medium">	
										<h3 class="heading-secondary u-margin-bottom-medium">Ubicación</h3>	
										<p class="contact__text">Lorem Ipsum,Buenos Aires, Argentina</p>
									</div>

									<div class="contact__phone u-margin-bottom-medium">
										<h3 class="heading-secondary u-margin-bottom-medium"></i>LLamanos</h3>
										
										<p class="contact__text">+54 91133645708</p>
									</div>
									<div class="contact__hours u-margin-bottom-medium">
										<h3 class="heading-secondary u-margin-bottom-medium"></i>Horarios</h3>
										
									<p class="contact__text"><a href="https://api.whatsapp.com/send?phone=" target="_blank" ><i class="fab fa-whatsapp"></i> +54 91128671568</a></p>
									</div>
								
							</div>





		<div class="row">
				<div class="book">
					<div class="book__form">
						<form action="#" class="form">
							<div class="u-margin-bottom-medium">
								<h2 class="heading-secondary">
									Envianos tu mensaje
								</h2> 
							</div>
						
							<div class="form__group">
								<input type="text" class="form__input" placeholder="Nombre" required id="name">
								<label for="name" class="form__label">Nombre</label>

							</div>
							<div class="form__group">
								<input type="email" class="form__input" placeholder="Email" required id="email">
								<label for="email" class="form__label">Email</label>

							</div>
                            <div class="form__group">
								<textarea name="mensaje" type="text" class="form__input" placeholder="Mensaje"></textarea>
							

							</div>
					
						</form>
					</div>
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