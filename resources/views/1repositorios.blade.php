@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->	
	
	<h1 class="title m-b-md" align="center">Lista de repositorios de: {{ Auth::user()->name }} </h1>

		<div class="container">
			{{$valores->links()}}
		</div>

        <div class="container">
            <h1>Repositorios privado</h1>
            <table class="table table-striped">
                <tr>
                    <th>NOMBRE</th>

                </tr>
                @foreach($valores as $valor)

                    
                <tr>
                    @if($valor->privPub == '0')
                    <td><a  href="{{action('WebController@datosRepositorio', $valor->id)}}"> {{ $valor->nombre }}</a> </td>
                    @endif
                    
                </tr> 

                @endforeach
            </table>
		</div>

        <div class="container">
            <h1>Repositorios públicos</h1>
            <table class="table table-striped">
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO DE REPOSITORIO</th>
                </tr>
                @foreach($valores as $valor)

                    
                <tr>
                    @if($valor->privPub == '1')
                    <td><a  href="{{action('WebController@datosRepositorio', $valor->id)}}"> {{ $valor->nombre }}</a> </td>
                    @endif
                    
                </tr> 

                @endforeach
            </table>
        </div>

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection