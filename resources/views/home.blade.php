@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <painel titulo="xablau do caralho">
                <div class="row">
                    <div class="col-4">
                        <caixa></caixa>
                    </div>
                    <div class="col-4">
                        <painel cor="bg-warning" titulo="xablau do caralho">
                            opa 
                        </painel>
                    </div>
                    <div class="col-4">
                            <painel cor="bg-danger" titulo="xablau do caralho">
                                opa 
                            </painel>
                        </div>
                </div>                
            </painel>
        </div>
    </div>
</div>
@endsection
