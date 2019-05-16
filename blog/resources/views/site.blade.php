@extends('layouts.app')

@section('content')
    <pagina tamanho='12'>
        <painel titulo='Artigos'>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="https://f.i.uol.com.br/fotografia/2019/03/15/15526795065c8c025270c53_1552679506_4x3_lg.jpg" alt="...">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>Teste de Descrição</p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Leia Mais..</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </painel>
    </pagina>
@endsection
