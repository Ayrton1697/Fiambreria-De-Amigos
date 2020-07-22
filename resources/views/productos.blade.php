@extends('layouts.tienda')

@section('title')
De Amigos: Almacén, pastas y más
@endsection


@section('content')
   <section class="store-picadas">

    <div class="u-center-text">
         <h2 class="heading-secondary u-margin-top-big">Nuestros productos</h2>
     
    </div>

    <div class="productos-principales">

  
    @foreach($productos->chunk(4) as $items)

            <div class="tienda-row">

             @foreach($items as $producto)
                    <div class="tienda-col-1-of-4">
                        <div class="card--tienda">

                                <figure class="card--tienda__shape">

                                <a href="#popup-{{$producto->id}}">
                                    <img src="../../public/images/{{$producto->image}}" alt="" class="card--tienda__image  ">
                                </a>
                                </figure>

                                <h3 class="heading-tertiary-tienda u-margin-top-small">{{$producto->name}}</h3>
                                <span>$ {{$producto->price}}</span>
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