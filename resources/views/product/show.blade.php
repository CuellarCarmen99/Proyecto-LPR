@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          
            <div class="row">

                <div align="left" class="col-sm-6">
                    <img height="150" width="350" class="card-img-top" src="https://th.bing.com/th/id/OIP.bKcpecPjdcveCJzGq3iehAHaEK?pid=Api&rs=1" alt="Card image cap">
                </div>
                

                
                <div class="col-sm-6">
                    <div class="card" style="width: 18rem;" >
                        
                        <div class="card-body">
                            @if($products->count())  
                            @foreach($products as $product)
                      <h5 class="card-title">{{$product->name}}</h5>
                      @foreach($categories as $category)
                                    @if($product->categories_id == $category->id)
                      <p class="card-text">
                        Categoria: {{ $category->name }} <br>Existencia:  {{$product->existence}} <br>{{$product->price}} Bs.
                      </p>
                      <a href="#!" class="btn btn-primary">Comprar</a>
                      <br><br>
                      @endif
                                @endforeach  
                            @endforeach 
                        @endif
                        <br>
                        </div>
                    </div>
        
                </div>
           
                
                
                
            </div>
            
            
      </div>

      
    </div>
    <div class="content"> 
          
        <div class="row">
            <div class="col-sm-6">
                <div class="col text-left" >
                    <h2>CONTACTO:</h2>
                    <h5>
                    Carrera 8h No. 166-71 Local 2<br>
                    Santa Cruz de la Ronda.<br>
                    Teléfonos: 3115988953 – 3112641818.<br>
                    </h5>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="col text-right">
                    <h2>ENCUENTRANOS</h2>
        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.9712541668755!2d-63.681962985299!3d-22.012412385473915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x940f2ed236ee0cf9%3A0x873b285c4783c55e!2sMake%20Up%20Studio%20By%20Karla%20Miranda!5e0!3m2!1ses!2sbo!4v1610034382035!5m2!1ses!2sbo" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
                    
                </div>
            </div>
        </div><br><br>
        <div class="row"> 
  
            <div class="col-md-12 text-center">
                <p ><h6>Carmen Cuellar @2021.<br> Todos los derechos reservados.</h6></p>
            </div>
            
        </div>
 
    </div>
  </div>
</section>

@endsection




     
      
  
      