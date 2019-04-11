@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">                      
        <tabela-lista v-bind:titulos="['#','']"
        ></tabela-lista>
    </painel>
</pagina>
@endsection
