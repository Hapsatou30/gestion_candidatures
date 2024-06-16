@extends('layouts.sidebar')

@section('content')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <style>
        .row {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form-group .btn,
        .container .btn {
            display: inline-block;
            padding: 10px;
            background-color: #CE0033;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .form-group .btn:hover {
            background-color: #a60028;
        }

        label {
            font-size: var(--taille-texte);
        }
    </style>

    <div class="container" style="margin-top: 50px;">
        <a href="/formations" class=" btn">Retour</a>
        <div class="container" style="background-color:#CE0033; width:98%;">
            <div class="container-fluid" style="background-color:#ffffff; width:100%; border-radius:50px;">
                <div class="container mt-5" style="padding:10px;">
                    <div class="dashboard-container">
                        <div class="row">
                            <div class="col s12">
                                <h1 style="text-align:center; font-weight:bold">MODIFIER UNE FORMATION</h1>
                                <form action="/modifier/formation-traitement" method="POST" class="form-group"
                                    style="width: 80%; margin-left:auto;margin-right:auto">
                                    @csrf
                                    <input type="text" name="id" style="display: none"
                                        value="{{ old('id', $formations->id) }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nom">Nom:</label>
                                                <input type="text" id="nom" name="nom" class="form-control"
                                                    value="{{ old('nom', $formations->nom) }}">
                                                @error('nom')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cohorte">Cohorte:</label>
                                                <input type="text" id="cohorte" name="cohorte" class="form-control"
                                                    value="{{ old('cohorte', $formations->cohorte) }}">
                                                @error('cohorte')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_debut">La date début :</label>
                                                <input type="date" id="date_debut" name="date_debut" class="form-control"
                                                    value="{{ old('date_debut', $formations->date_debut) }}">
                                                @error('date_debut')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_fin">La date finale :</label>
                                                <input type="date" id="date_fin" name="date_fin" class="form-control"
                                                    value="{{ old('date_fin', $formations->date_fin) }}">
                                                @error('date_fin')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_limite">La date limite :</label>
                                                <input type="date" id="date_limite" name="date_limite"
                                                    class="form-control"
                                                    value="{{ old('date_limite', $formations->date_limite) }}">
                                                @error('date_limite')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Photo de couverture:</label>
                                                <input type="text" id="image" name="image" class="form-control"
                                                    value="{{ old('image', $formations->image) }}">
                                                @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="personnel_id">Personnel *</label>
                                                <input type="text" class="form-control" id="personnel_id"
                                                    name="personnel"
                                                    value="{{ $personnel->nom }} {{ $personnel->prenom }}" readonly>
                                                <input type="hidden" name="personnel_id" value="{{ $personnel->id }}">
                                                @error('personnel_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="statut">Statut</label>
                                                <select id="statut" name="statut" class="form-control"
                                                    value="{{ old('statut', $formations->statut) }}">
                                                    <option value="ouverte">Ouverte</option>
                                                    <option value="fermée">Fermée</option>
                                                </select>
                                                @error('statut')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="competences">Competences</label>
                                                <textarea class="form-control" id="competences" name="competences">{{ old('description', $formations->competences) }}</textarea>
                                                @error('competences')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="debouches">Débouches</label>
                                                <textarea class="form-control" id="debouches" name="debouches">{{ old('debouches', $formations->debouches) }}</textarea>
                                                @error('debouches')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description">{{ old('description', $formations->description) }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                <button type="submit" class="btn">MODIFIER LA FORMATION</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
