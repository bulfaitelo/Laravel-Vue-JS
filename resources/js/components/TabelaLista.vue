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
            <tr v-for="item in itens" v-bind:key="item.id">
                <td v-for="i in item" v-bind:key="i.id">{{i}}</td>                
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
        props: ['titulos', 'itens'],
    }
</script>
