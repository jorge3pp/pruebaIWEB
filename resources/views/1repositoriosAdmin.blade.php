@extends('layouts.app')

@section('content')

	<!-- INICIO Codigo Body de la página web -->	
        <h1 class="title m-b-md" align="center">Lista de repositorios de todo el sistema </h1>

            <div class="container">
                {{$valores->links()}}
            </div>
            @if(count($valores) > 0)
                <div class="container">
                    <h1>Repositorios privados</h1>
                    <table class="table table-striped">

                        @foreach($valores as $valor)

                            
                        <tr>
                            @if($valor->privPub == '0')
                            <td><a href="{{action('WebController@datosRepositorio', $valor->id)}}"> {{ $valor->nombre }}</a> </td>
                            @endif
                            
                        </tr> 

                        @endforeach
                    </table>
                </div>

                <div class="container">
                    {{$valores->links()}}
                </div>
                
                <div class="container">
                    <h1>Repositorios públicos</h1>
                    <table class="table table-striped">

                        @foreach($valores as $valor)

                            
                        <tr>
                            @if($valor->privPub == '1')
                            <td><a href="{{action('WebController@datosRepositorioPublico', $valor->id)}}"> {{ $valor->nombre }}</a> </td>
                            @endif
                            
                        </tr> 

                        @endforeach
                    </table>
                </div>
            @else
                <h1 align="center"> NO FORMAS PARTE DE NINGÚN REPOSITORIO</h1>
    @endif

		
		

	<!-- FIN Codigo Body de la página web -->
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@endsection