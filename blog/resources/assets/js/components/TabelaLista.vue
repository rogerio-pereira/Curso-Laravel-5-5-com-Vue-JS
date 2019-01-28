<template>
    <div>
        <a href='#'>Criar</a>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th v-for='titulo in titulos'>{{titulo}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Titulo</td>
                    <td>Descrição</td>
                    <td>Autor</td>
                    <td>Data</td>
                    <td>
                        <a href='#'>Editar</a> | 
                        <a href='#'>Deletar</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Titulo</td>
                    <td>Descrição</td>
                    <td>Autor</td>
                    <td>Data</td>
                    <td>
                        <a href='#'>Editar</a> | 
                        <a href='#'>Deletar</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Titulo</td>
                    <td>Descrição</td>
                    <td>Autor</td>
                    <td>Data</td>
                    <td>
                        <a href='#'>Editar</a> | 
                        <a href='#'>Deletar</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Titulo</td>
                    <td>Descrição</td>
                    <td>Autor</td>
                    <td>Data</td>
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
            'titulos'
        ]
    }
</script>
