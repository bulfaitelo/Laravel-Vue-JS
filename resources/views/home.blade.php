@extends('layouts.app')

@section('content')
<pagina tamanho='10'>
    <painel titulo="TITULO DO XABLAU" > 
        <migalhas v-bind:lista="{{$listaMigalhas}}" ></migalhas>
        BLA BLA BLA
        <div class="row">
            <div class="col-md-4">
                <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-stats-bars"></caixa>
            </div>
            <div class="col-md-4">
                <caixa qtd="080" titulo="Usuarios" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                
            </div>
            <div class="col-md-4">
                <caixa qtd="129" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa>

            </div>
        </div>
    </painel>  
</pagina>
@endsection
