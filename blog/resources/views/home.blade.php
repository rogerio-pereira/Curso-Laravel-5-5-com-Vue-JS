@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo='Dashboard'>
                    Teste de conteúdo

                    <div class='row'>
                        <div class='col-md-4'>
                            <painel titulo='Conteudo 1'>
                                Teste de conteúdo
                            </painel>
                        </div>
                        <div class='col-md-4'>
                            <painel titulo='Conteudo 2'>
                                Teste de conteúdo
                            </painel>
                        </div>
                        <div class='col-md-4'>
                            <painel titulo='Conteudo 3'>
                                Teste de conteúdo
                            </painel>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection