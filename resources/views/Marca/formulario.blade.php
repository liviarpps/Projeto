@extends('TemplateAdmin.index')

@section('contents')

@php
    $titulo = "Nova marca";
    $endpoint = "/marca/novo";
    $input_nome="";
    $input_fantasia="";
    $input_id="";

    if(isset($marca)){
        $titulo = "Alteração de marca";
        $endpoint = "/marca/update";
        $input_nome= $marca['nome'];
        $input_fantasia= $marca['nome_fantasia'];
        $input_id = $marca["id"];
    }

@endphp






    <h1 class="h3 mb-4 text-gray-800">{{$titulo}}</h1>
    <div class="card">
        <div class="card-header">
            Nova marca
        </div>
        <div class="card-body">
            <form method="post" action="{{$endpoint}}">
                @CSRF
                <input type="hidden" name="id" value={{$input_id}}/>

                <label class="form-label">Nome da marca</label>
                <input class="form-control" name="nome" placeholder="Nome Marca" value="{{$input_nome}}">

                <label class="form-label">Nome Fantasia</label>
                <input class="form-control" name="nome_fantasia" placeholder="Dell" value="{{$input_fantasia}}">

                <label class="form-label">Situacao</label>
                <select class="form-control" name="situacao">
                    <option value="1" selected>ATIVO</option>
                    <option value="0">INATIVO</option>
                </select>

                <br/>
                <input type="submit" class="btn btn-success" value="SALVAR"/>

            </form>
        </div>
    </div>
@endsection
