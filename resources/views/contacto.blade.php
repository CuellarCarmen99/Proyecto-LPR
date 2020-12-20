@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Solicitud de contacto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
          <form method="post" action="{{ route('message.store') }}">  
             @csrf
             <div class="form-group">    
                 <label>Nombres:</label>
                 <input type="text" class="form-control text-light" name="name"/>
             </div>
   
             <div class="form-group">
                 <label >Correo:</label>
                 <input type="email" class="form-control text-light" name="email"/>
             </div>
   
             <div class="form-group">
                 <label >Identificacion:</label>
                 <input type="text" class="form-control text-light" name="subject"/>
             </div>
             <div class="form-group">
                 <label >Asunto:</label>
                 <input type="text" class="form-control text-light" name="content"/>
             </div>                                      
             <input type="submit" value="Enviar" class="btn btn-warning">
                    
                </div>
         </form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection
