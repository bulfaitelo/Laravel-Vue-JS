@extends('layouts.app')

@section('content')
<pagina tamanho='12'>
    <painel titulo="Lista de Artigos" > 
        <tabela-lista 
            v-bind:titulos="['#', 'Outros', 'Descricao']"
            v-bind:itens="[
                [1, 'PHP OO', 'Curso de PHP'], 
                [2, 'Vue OO', 'Curso de PHP'], 
                [3, 'Xablau OO', 'XOXO de PHP']]"
            criar="#criar"
            detalhe="#detalhe"
            editar="#editar"
            deletar="#deletar"
            token="123123"
            ordem="asc"
            ordemcol="2"
            ></tabela-lista>        
    </painel>  
</pagina>
@endsection
