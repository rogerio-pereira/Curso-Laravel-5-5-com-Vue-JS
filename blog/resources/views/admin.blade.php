@extends('layouts.app')

@section('content')
    <pagina tamanho='10'>
        <painel titulo='Dashboard'>
            <migalhas v-bind:lista='{{$listaMigalhas}}'></migalhas>

            <div class='row'>
                @can('isAutor')
                    <div class='col-md-4'>
                        <caixa qtd='{{$totalArtigos}}' titulo='Artigos' url='{{route('artigos.index')}}' cor='orange' icone='ion ion-pie-graph'>
                            Teste de conteúdo
                        </caixa>
                    </div>
                @endcan
                @can('isAdmin')
                    <div class='col-md-4'>
                        <caixa qtd='{{$totalUsuarios}}' titulo='Usuários' url='{{route('usuarios.index')}}' cor='blue' icone='ion ion-person-stalker'>
                            Teste de conteúdo
                        </caixa>
                    </div>

                    <div class='col-md-4'>
                        <caixa qtd='{{$totalAutores}}' titulo='Autores' url='{{route('autores.index')}}' cor='red' icone='ion ion-person'>
                            Teste de conteúdo
                        </caixa>
                    </div>
                    
                    <div class='col-md-4'>
                        <caixa qtd='{{$totalAdmin}}' titulo='Administradores' url='{{route('adm.index')}}' cor='green' icone='ion ion-person'>
                            Teste de conteúdo
                        </caixa>
                    </div>
                @endcan
            </div>
        </painel>
    </pagina>
@endsection
