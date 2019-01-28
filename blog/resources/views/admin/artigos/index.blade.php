@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Lista de artigos'>
            <tabela-lista 
                v-bind:titulos="['#', 'Titulo', 'Descrição', 'Autor', 'Data']"
                v-bind:items="[
                                [1, 'PHP OO', 'Curso de PHP'],
                                [2, 'VueJS', 'Curso de VueJS']
                            ]"
                criar='#criar'
                detalhe='#detalhe'
                editar='#editar'
                deletar='#deletar'
                token='12456897452'
            ></tabela-lista>
        </painel>
    </pagina>
@endsection
