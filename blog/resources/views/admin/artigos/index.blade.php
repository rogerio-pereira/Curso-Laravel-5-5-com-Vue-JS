@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Lista de artigos'>
            <tabela-lista v-bind:titulos="['#', 'Titulo', 'Autor', 'Data', 'Ações']"></tabela-lista>
        </painel>
    </pagina>
@endsection
