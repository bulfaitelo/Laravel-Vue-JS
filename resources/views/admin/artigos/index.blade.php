@extends('layouts.app')

@section('content')
<pagina tamanho='12'>
    <painel titulo="Lista de Artigos" > 
        <a href="#">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>bl abla bla</td>
                    <td> adassdasds</td>
                    <td>Bull</td>
                    <td>01/01/2019</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Excluir</a>
                    </td>
                </tr>
                <tr>
                        <td>1</td>
                        <td>bl abla bla</td>
                        <td> adassdasds</td>
                        <td>Bull</td>
                        <td>01/01/2019</td>
                        <td>
                            <a href="#">Editar</a>
                            <a href="#">Excluir</a>
                        </td>
                    </tr>
                    <tr>
                            <td>1</td>
                            <td>bl abla bla</td>
                            <td> adassdasds</td>
                            <td>Bull</td>
                            <td>01/01/2019</td>
                            <td>
                                <a href="#">Editar</a>
                                <a href="#">Excluir</a>
                            </td>
                        </tr>

            </tbody>

        </table>
        
    </painel>  
</pagina>
@endsection
