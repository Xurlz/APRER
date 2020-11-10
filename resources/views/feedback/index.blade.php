@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Profissional</h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Dados Profissional</h5>
                    <p class="card-text">
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <td>Fulano de tal</td>
                            </tr>
                            <tr>
                                <th>Profissao</th>
                                <td>Encanador</td>
                            </tr>
                            <tr>
                                <th>Região</th>
                                <td>Bela Vista São Paulo</td>
                            </tr>
                        </table>    
                    </p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">Avaliações</h5>
                    <p class="card-text">
                        <table class="table">
                            <tr>
                                <td>
                                    <h3> Cliente Satisfeito !</h3>
                                    <blockquote class='blockquote'>Excelente profissional! não tive problemas.</blockquote>
                                </td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3> Não recomendo  </h3>
                                    <blockquote class='blockquote'>Apesar de seus serviços, continuo com defeitos aqui ☹</blockquote>
                                </td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3> Rápido e eficiente </h3>
                                    <blockquote class='blockquote'> No mesmo dia ele resolveu o meu problema, eficaz em problemas de entupimento</blockquote>
                                </td>
                                <td>5</td>
                            </tr>
                            <!-- <tr>
                                <td>
                                    <h3> Um pouco desorganizado</h3>
                                    <blockquote class='blockquote'> Deixa a desejar na limpeza, mas consertou o meu encanamento</blockquote>
                                </td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Super faturado</h3>
                                    <blockquote class='blockquote'>Achei os seus serviços muito caros!</blockquote>
                                </td>
                                <td>3</td>
                            </tr> -->
                        </table>
                    </p>
                </div>
            </div>

            <div class="text-center">
                <a href="{{route('formulario_avaliacao')}}" class='btn btn-danger'> Adicionar Feedback </a>
            </div>     

        </div>
        
    </div>
</div>
@endsection