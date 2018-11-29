<template>
<div>
    <a v-if="criar" v-bind:href="criar">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th v-for="titulo in titulos">{{titulo}}</th>                    
                    <th v-if="detalhe || editar || deletar"  >Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in itens">
                    <td v-for="i in item">{{i}}</td>                                        
                    <td v-if="detalhe || editar || deletar" >
                        <form v-if="deletar && token" action="index.html">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">
                            <a v-if="detalhe" v-bind:href="detalhe" >Detalhe | </a>
                            <a v-if="editar" v-bind:href="editar" >Editar | </a>
                            <a v-if="deletar" v-bind:href="deletar" >Deletar</a>
                                              

                        </form>
                    </td>   
                </tr>            
            </tbody>

        </table>
    </div>
</template>

<script>
    export default {
        props: ['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token']
    }
</script>
