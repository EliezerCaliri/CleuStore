@extends('layouts.admin')

@section('title', 'Lista de Categorias')
@section('conteudo')
<style>
      .categorias{
    margin-top: 300px;
    margin-left: 300px;
}

</style>
    @if(session('mensagem'))
        {{session('mensagem')}}
    @endif

        <form method="POST" action="{{ route('categoria.store') }}">
            @csrf
            <div class="categorias">
                <label>Registre a nova categoria</label>
                <input type="text" name="categorias">
                <br>
                <input type="submit" value="Salvar Categoria" class="btn btn-primary">
            </div> 

        </form>
    <div class="container">
        <h1>Lista de Categorias</h1>
        <table class="table table-hover table-bordered table-primary">
        <tr class="table-dark">

            @foreach ($categorias as $categoria)
            <tr>
                <td >{{ $categoria->categorias}}</td>
               <td> <form method="POST" action="{{ route('categoria.destroy',$categoria->id) }}">
                    @csrf
                    @method('DELETE')
    
                    <input type="submit" value="Excluir Categoria" class="btn btn-danger">
                </form>
            </td>
            </tr>
            @endforeach
        </tr>
        </table>
    </div>
@endsection
