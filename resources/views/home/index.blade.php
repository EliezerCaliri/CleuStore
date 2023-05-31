@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')

        <header class="brand" style="background-color: #131313;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center">
                    <h1 class="display-4 fw-bolder text-white py-2"></h1>
                    <img class="img-fluid" src="../img/logocleustore.png" alt="">
                </div>
            </div>
        </header>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                @foreach ($categorias as $categoria)
                    @if ($categoria->produtos->count() < 1)
                        @continue
                    @endif

                    <h1>{{ $categoria->categorias }}</h1>

                    @foreach ($categoria->topProdutos as $produto)
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="/storage/{{ $produto->foto }}" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $produto->nome }}</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        R$ {{ $produto->valor }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicione ao carrinho</a></div>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('home.details', [$produto->id, $produto->slug]) }}">Ver Detalhes</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
                <div class="row gx-4 gx-lg-5 justify-content-center">



                </div>
            </div>
        </section>
@endsection
