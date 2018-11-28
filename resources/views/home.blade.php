@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <painel titulo="TITULO DO XABLAU" > 
                    BLA BLA BLA
                    <div class="row">
                        <div class="col-md-4">
                                <caixa></caixa>
                        </div>
                        <div class="col-md-4">
                                <painel titulo="XABLAU" cor='danger'> 
                                        XABLAU
                                </painel>
                        </div>
                        <div class="col-md-4">
                                <painel titulo="XABLAU"> 
                                        XABLAU
                                </painel>
                        </div>
                    </div>
                </painel>
                
            </div>
        </div>
        <caixa></caixa>
    </div>
@endsection
