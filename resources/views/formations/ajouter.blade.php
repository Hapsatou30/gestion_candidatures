@extends('layouts.sidebar')

@section('content')
<style>
    .row {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .form-group .btn ,.container .btn{
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
    label{
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
            <h1 style="text-align:center; font-weight:bold">AJOUTER UNE FORMATION</h1>
            <form action="/ajouter/formation-traitement" method="POST" class="form-group" style="width: 80%; margin-left:auto;margin-right:auto">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}">
                            @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cohorte">Cohorte *</label>
                            <input type="text" class="form-control @error('cohorte') is-invalid @enderror" id="cohorte" name="cohorte" value="{{ old('cohorte') }}">
                            @error('cohorte')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_debut">Date du début de la formation *</label>
                            <input type="date" class="form-control @error('date_debut') is-invalid @enderror" id="date_debut" name="date_debut" value="{{ old('date_debut') }}">
                            @error('date_debut')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_fin">Date de fin de la formation *</label>
                            <input type="date" class="form-control @error('date_fin') is-invalid @enderror" id="date_fin" name="date_fin" value="{{ old('date_fin') }}">
                            @error('date_fin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_limite">Date Limite *</label>
                            <input type="date" class="form-control @error('date_limite') is-invalid @enderror" id="date_limite" name="date_limite" value="{{ old('date_limite') }}">
                            @error('date_limite')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image illustrative *</label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ old('image') }}" >
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
                            <input type="text" class="form-control" id="personnel_id" name="personnel" value="{{ $personnel->nom }} {{ $personnel->prenom }}" readonly>
                           <input type="hidden" name="personnel_id" value="{{ $personnel->id }}">
                            @error('personnel_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="statut">Statut *</label>
                            <select id="statut" name="statut" class="form-control @error('statut') is-invalid @enderror">
                                <option value="ouverte" {{ old('statut') == 'ouverte' ? 'selected' : '' }}>Ouverte</option>
                                <option value="fermée" {{ old('statut') == 'fermée' ? 'selected' : '' }}>Fermée</option>
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
                            <label for="competences">Compétences *</label>
                            <textarea class="form-control @error('competences') is-invalid @enderror" id="competences" name="competences">{{ old('competences') }}</textarea>
                            @error('competences')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="debouches">Débouchés *</label>
                            <textarea class="form-control @error('debouches') is-invalid @enderror" id="debouches" name="debouches">{{ old('debouches') }}</textarea>
                            @error('debouches')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">&nbsp;</label><br>
                            <button type="submit" class="btn">AJOUTER UNE FORMATION</button>
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
