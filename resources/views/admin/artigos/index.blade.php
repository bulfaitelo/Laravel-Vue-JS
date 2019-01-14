@extends('layouts.app')

@section('content')
<pagina tamanho='12'>
    <painel titulo="Lista de Artigos" >     
    <migalhas v-bind:lista="{{$listaMigalhas}}" ></migalhas>
        <modallink tipo='button' nome='MeuModalTEste' titulo="Criar" css="" ></modallink>
        <tabela-lista 
            v-bind:titulos="['#', 'Outros', 'Descricao']"
            v-bind:itens="{{$listaArtigos}}"
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

<modal nome='MeuModalTEste' >
    <painel titulo="Adicionar" > 
        <formulario css="" action="#" method="put" enctype="mulpart/form-data" token="123" >
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class='form-control' id='titulo' name='titulo' placeholder="Título">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class='form-control' id='descricao' name='descricao' placeholder="Descrição">
            </div>
            <button class="btn btn-info" > Adicionar</button>
        </formulario>
    </painel>
</modal>
@endsection
