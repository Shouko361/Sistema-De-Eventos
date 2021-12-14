@extends('layout.main')

@section('title', 'Criar Evento')

@section('content')
        <div id="event-create-container" class="col-md-6 offset-md-3">
                <h1>Crie o seu evento</h1><br>
                <form action="/events" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label for="title">Evento: </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" required>
                        </div><br>
                        <div class="form-group">
                                <label for="title">Local: </label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" required>
                        </div><br>
                        <div class="form-group">
                                <label for="title">O evento é privado?</label>
                                <input type="radio" name="private" value="0">
                                <label for="">Não</label>
                                <input type="radio" name="private" value="1" checked>
                                <label for="">Sim</label>
                        </div><br>
                        <div class="form-group">
                                <label for="title">Descrição: </label>
                                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
                        </div><br>
                        <div class="form-group">
                                <label for="image">Imagem do evento: </label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                        </div><br>
                        <input type="submit" class="btn btn-primary" value="Criar Evento">
                </form>
        </div>
@endsection