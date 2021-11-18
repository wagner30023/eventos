@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Nome do evento">
            </div>

            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" id="date" name="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Local do evento">
            </div>

            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"/> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"/> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis"/> Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"/> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"/> Brindes
                </div>
            </div>

            <input type="submit" class="btn btn-primary btn-block" value="Criar Evento">
        </form>
    </div>
@endsection
