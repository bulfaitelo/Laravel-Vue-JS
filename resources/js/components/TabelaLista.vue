<template>
<div>
    <a href="#">Criar</a>   
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th v-for="titulo in titulos" v-bind:key="titulo.id">{{titulo}}</th>                
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
</div>
</template>

<script>
    export default {
        props: ['titulos'],
    }
</script>
