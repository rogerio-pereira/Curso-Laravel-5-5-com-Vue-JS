<template>
    <div>
        <a v-if='criar' v-bind:href='criar'>Criar</a>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th v-for='titulo in titulos'>{{titulo}}</th>
                    <th v-id='detalhe || editar || deletar'>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='(item, index) in items'>
                    <td v-for='i in item'>{{i}}</td>
                    <td v-id='detalhe || editar || deletar'>
                        <form v-bind:id='index' v-if='deletar && token' v-bind:action='deletar' method=post>
                            <input type='hidden' name='_method' value='DELETE'>
                            <input type='hidden' name='_token' v-bind:value='token'>

                            <a v-if="detalhe" v-bind:href='detalhe'>Detalhe |</a>
                            <a v-if="editar" v-bind:href='editar'>Editar |</a>
                            <a v-on:click="executaForm(index)" v-bind:href='deletar'>Deletar</a>
                        </form>

                        <span v-if='!token'>
                            <a v-if="detalhe" v-bind:href='detalhe'>Detalhe |</a>
                            <a v-if="editar" v-bind:href='editar'>Editar |</a>
                            <a v-on:click="executaForm(index)">Deletar</a>
                        </span>

                        <span v-if='token && !deletar'>
                            <a v-if="detalhe" v-bind:href='detalhe'>Detalhe |</a>
                            <a v-if="editar" v-bind:href='editar'>Editar</a>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:[
            'titulos',
            'items',
            'criar',
            'detalhe',
            'editar',
            'deletar',
            'token',
        ],
        methods:{
            executaForm:function(index){
                document.getElementById(index).submit();
            }
        }
    }
</script>
