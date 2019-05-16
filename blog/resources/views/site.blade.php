@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Artigos'>
            <div class="row">
                @foreach ($lista as $artigo)
                    <artigocard 
                        titulo='{{$artigo->titulo}}'
                        descricao='{{$artigo->descricao}}'
                        link='#'
                        imagem='https://f.i.uol.com.br/fotografia/2019/03/15/15526795065c8c025270c53_1552679506_4x3_lg.jpg'
                        data='{{$artigo->data}}'
                        autor='{{$artigo->autor}}'
                        sm='6'
                        md='4'
                    >
                    </artigocard>
                @endforeach
            </div>

            <div align='center'>
                {{$lista->render()}}
            </div>
        </painel>
    </pagina>
@endsection
