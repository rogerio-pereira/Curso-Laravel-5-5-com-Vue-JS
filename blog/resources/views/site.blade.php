@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Artigos'>
            <div class="row">
                <artigocard 
                    titulo='Titulo Teste'
                    descricao='Teste de Descrição'
                    link='#'
                    imagem='https://f.i.uol.com.br/fotografia/2019/03/15/15526795065c8c025270c53_1552679506_4x3_lg.jpg'
                    data='16/05/2019'
                    autor='Rogerio Pereira'
                    sm='6'
                    md='4'
                >
                </artigocard>
        </painel>
    </pagina>
@endsection
