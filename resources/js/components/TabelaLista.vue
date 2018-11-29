<template>
<div>
    <a href="#">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th v-for="titulo in titulos">{{titulo}}</th>                    
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in itens">
                    <td v-for="i in item">{{i}}</td>                    
                    <td>
                        <a href="#">Editar</a> | 
                        <a href="#">Excluir</a> | 
                    </td>   
                </tr>            
            </tbody>

        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens']
    }
</script>
