@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <painel titulo="TITULO DO XABLAU" > 
                    BLA BLA BLA
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Artigos" url="#" cor="orange" icone="ion ion-stats-bars"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="080" titulo="Usuarios" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                           
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="129" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa>

                        </div>
                    </div>
                </painel>
                
            </div>
        </div>    
    </div>
@endsection
