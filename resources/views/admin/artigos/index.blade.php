@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">                      
        <tabela-lista 
        v-bind:titulos="['#','Titulo', 'Descrição']"
        v-bind:itens="[
            [1, 'Php OO', 'Curso de PHP'],
            [2, 'Vue JS', 'curso de Vue Cralho!'],
            [3, 'Vue JS', 'curso de Vue Cralho!']
        ]"

        ></tabela-lista>
    </painel>
</pagina>
@endsection
