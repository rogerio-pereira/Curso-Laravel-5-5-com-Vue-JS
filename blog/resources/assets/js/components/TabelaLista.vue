<template>
    <div>
        <a href='#'>Criar</a>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th v-for='titulo in titulos'>{{titulo}}</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='item in items'>
                    <td v-for='i in item'>{{i}}</td>
                    <td>
                        <a href='#'>Editar</a> | 
                        <a href='#'>Deletar</a>
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
            'items'
        ]
    }
</script>
