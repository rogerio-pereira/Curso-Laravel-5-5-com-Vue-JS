@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Lista de artigos'>
            <migalhas v-bind:lista='{{$listaMigalhas}}'></migalhas>

            <tabela-lista 
                v-bind:titulos="['#', 'Titulo', 'Descrição']"
                v-bind:items="{{$listaArtigos}}"
                ordem='desc'
                ordemCol=1
                criar='#criar'
                detalhe='#detalhe'
                editar='#editar'
                deletar='#deletar'
                token='12456897452'
                modal='sim'
            ></tabela-lista>
        </painel>
    </pagina>

    <modal nome='adicionar'>
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
    <modal nome='editar'>
        <painel titulo='Editar'>
            <formulario css='' action='#' method='put' enctype='multipart/form-data' token='{{ csrf_token() }}'>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id='titulo' name='titulo' v-model='$store.state.item.titulo' placeholder='Título'>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id='descricao' name='descricao' v-model='$store.state.item.descricao' placeholder='Descrição'>
                </div>

                <button class='btn btn-info'>Atualizar</button>
            </formulario>
        </painel>
    </modal>
    <modal nome='detalhe'>
        <painel v-bind:titulo='$store.state.item.titulo'>
            <p>@{{$store.state.item.descricao}}</p>
        </painel>
    </modal>
@endsection
