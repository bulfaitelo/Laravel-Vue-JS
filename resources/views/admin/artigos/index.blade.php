@extends('layouts.app')

@section('content')
<pagina tamanho='12'>
    <painel titulo="Lista de Artigos" > 
        <tabela-lista 
            v-bind:titulos="['#', 'Outros', 'Descricao']"
            v-bind:itens="[
                [1, 'PHP OO', 'Curso de PHP'], 
                [2, 'Vue OO', 'Curso de PHP'], 
                [3, 'Xablau OO', 'Curso de PHP']]"
            ></tabela-lista>        
    </painel>  
</pagina>
@endsection
