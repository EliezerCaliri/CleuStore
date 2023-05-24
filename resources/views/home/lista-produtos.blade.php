@extends('layouts.template')

@section('title', 'Bem vindo a Cleustore')

@section('conteudo')
    <form action="{{ route('home.listaProdutos') }}" method="GET">
        @csrf

        <div class="mb-3">
            <label for="">Busca</label>
            <input class="form-control" type="text" name="busca" value="{{ $filtros['busca'] ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Categoria</label>

            <select class="form-control" name="categoria_id" id="categoria_id">
                <option value="">Selecione uma categoria</option>

                @foreach ($listaCategorias as $categoria)
                    <option {{ ($filtros['categoria_id'] ?? 0) == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">{{ $categoria->categorias }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Pesquisar">
    </form>

    <div class="row justify-content-center">
        @foreach ($produtos as $produto)
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $produtos->links() }}

@endsection
