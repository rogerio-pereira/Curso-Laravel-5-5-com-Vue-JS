@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Artigos'>
            <div class="row">
                <p>
                    <form class='form-inline text-center' action='{{route('site')}}' method='get'>
                        <input type='search' class='form-control' name='busca' placeholder='Buscar' value='{{isset($busca) ? $busca : ''}}'>
                        <button class='btn btn-info'>Buscar</button>
                    </form>
                </p>
                @foreach ($lista as $artigo)
                    <artigocard 
                        titulo='{{str_limit($artigo->titulo, 25, '...')}}'
                        descricao='{{str_limit($artigo->descricao, 40, '...')}}'
                        link='{{route('artigo', [$artigo->id, str_slug($artigo->titulo, '-')])}}'
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
