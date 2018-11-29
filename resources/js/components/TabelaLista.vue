<template>
<div>
    <a href="#">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td v-for="titulo in titulos">{{titulo}}</td>                    
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
    </div>
</template>

<script>
    export default {
        props: ['titulos']
    }
</script>
