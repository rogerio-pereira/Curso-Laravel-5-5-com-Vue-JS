@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Lista de artigos'>
            <migalhas v-bind:lista='{{$listaMigalhas}}'></migalhas>

            <modallink tipo='link' nome='meuModalTeste' titulo='Criar' css=''></modallink>

            <tabela-lista 
                v-bind:titulos="['#', 'Titulo', 'Descrição']"
                v-bind:items="[
                                [1, 'PHP OO', 'Curso de PHP'],
                                [2, 'VueJS', 'Curso de VueJS']
                            ]"
                ordem='desc'
                ordemCol=1
                criar='#criar'
                detalhe='#detalhe'
                editar='#editar'
                deletar='#deletar'
                token='12456897452'
            ></tabela-lista>
        </painel>
    </pagina>

    <modal nome='meuModalTeste'>
        <painel titulo='Adicionar'>
            <formulario css='' action='#' method='put' enctype='multipart/form-data' token='{{ csrf_token() }}'>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id='titulo' name='titulo' placeholder='Título'>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id='descricao' name='descricao' placeholder='Descrição'>
                </div>

                <button class='btn btn-info'>Adicionar</button>
            </formulario>
        </painel>
    </modal>
@endsection
