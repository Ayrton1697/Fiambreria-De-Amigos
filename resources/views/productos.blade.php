@extends('layouts.tienda')

@section('title')
De amigos productos
@endsection


@section('content')
   <section class="store-picadas">

    <div class="u-center-text">
         <h2 class="heading-secondary u-margin-top-big">Nuestros productos</h2>
     
    </div>

    <div class="productos-principales">


    @foreach($productos->chunk(4) as $items)

            <div class="row row--tienda">

             @foreach($items as $producto)
                    <div class="col-1-of-4">
                        <div class="card--tienda">

                                <figure class="card--tienda__shape">
                                <a href="#popup-{{$producto->id}}">
                                <img src="{{$producto->image}}" alt="" class="card--tienda__image  ">
                                </a>
                                </figure>

                                <h3 class="heading-tertiary u-margin-top-small">{{$producto->name}}</h3>

                                <div class="u-center-text u-margin-top-small">
                                     <a href="{{route('product.addtoCart',['id'=> $producto->id ])}}" class="btn btn--tienda btn--beige ">Agregar al carrito</a>
            
                                 </div>
                        </div>
                    </div>
                            
                @endforeach

            </div>

        @endforeach
    </div>
   
</section>

@endsection