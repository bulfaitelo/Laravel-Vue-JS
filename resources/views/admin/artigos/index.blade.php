@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de Artigos">
        <a href="#">Criar</a>                 
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Titulo ...</td>
                    <td>xablau</td>
                    <td>Thiago</td>
                    <td>11/04/2019</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#">Deletar</a>
                    </td>                    
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Titulo ...</td>
                    <td>xablau</td>
                    <td>Thiago</td>
                    <td>11/04/2019</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#">Deletar</a>
                    </td>                    
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Titulo ...</td>
                    <td>xablau</td>
                    <td>Thiago</td>
                    <td>11/04/2019</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#">Deletar</a>
                    </td>                    
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Titulo ...</td>
                    <td>xablau</td>
                    <td>Thiago</td>
                    <td>11/04/2019</td>
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#">Deletar</a>
                    </td>                    
                </tr>
                
            </tbody>
        </table>
    </painel>
</pagina>
@endsection
