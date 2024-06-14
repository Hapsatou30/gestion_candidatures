@extends('layouts.sidebar')
@section('content')
    

    <div class="container mt-5" style="margin-left: 300px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Modifier une formation</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/modifier/formation-traitement" method="POST">
                            @csrf
                            <input type="text" name="id" style="display: none" value="{{ old('id', $formations->id) }}" >
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom', $formations->nom) }}">
                            </div>
                            <div class="form-group">
                                <label for="competences">Competences</label>
                                <textarea class="form-control" id="competences" name="competences">{{ old('description', $formations->competences) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="debouches">Débouches</label>
                                <textarea class="form-control" id="debouches" name="debouches">{{ old('debouches', $formations->debouches) }}</textarea>
                              </div>
                            <div class="form-group">
                                <label for="date_debut">La date début :</label>
                                <input type="date" id="date_debut" name="date_debut" class="form-control" value="{{ old('date_debut', $formations->date_debut) }}">
                            </div>
                            <div class="form-group">
                                <label for="date_fin">La date finale :</label>
                                <input type="date" id="date_fin" name="date_fin" class="form-control" value="{{ old('date_fin', $formations->date_fin) }}">
                            </div>
                            <div class="form-group">
                                <label for="date_limite">La date limite :</label>
                                <input type="date" id="date_limite" name="date_limite" class="form-control" value="{{ old('date_limite', $formations->date_limite) }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Photo de couverture:</label>
                                <input type="text" id="image" name="image" class="form-control" value="{{ old('image', $formations->image) }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description', $formations->description) }}</textarea>
                              </div>
                            <div class="form-group">
                                <label for="cohorte">Cohorte:</label>
                                <input type="text" id="cohorte" name="cohorte" class="form-control" value="{{ old('cohorte', $formations->cohorte) }}">
                            </div>
                            <div class="form-group">
                                <label for="statut">Statut</label>
                                <select id="statut" name="statut" class="form-control" value="{{ old('statut', $formations->statut) }}">
                                    <option value="ouverte">Ouverte</option>
                                    <option value="fermée">Fermée</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input name="personnel_id" type="hidden" value="{{ $personnels->id }}">
                
                            </div>
                            
                            
                            <br>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection