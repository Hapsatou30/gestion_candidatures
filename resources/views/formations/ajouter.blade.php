<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter Formation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>AJOUTER UNE FORMATION</h1>
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}} 
                    </div>
                @endif
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="alert alert-danger">{{$error}}   </li>
                    @endforeach
                </ul>

                <form action="/ajouter/formation-traitement" method="POST" class="form-group">

                    @csrf
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="competences">Competences</label>
                        <textarea class="form-control" id="competences" name="competences"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="debouches">Debouches</label>
                        <textarea class="form-control" id="debouches" name="debouches"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="date_debut">Date du début de la formation</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut" >                       
                      </div>
                      <div class="form-group">
                        <label for="date_fin">Date de la fin de la formation</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin" >                       
                      </div>
                      <div class="form-group">
                        <label for="date_limite">Date Limite</label>
                        <input type="date" class="form-control" id="date_limite" name="date_limite" >                       
                      </div>
                      <div class="form-group">
                        <label for="image">Image illustratif</label>
                        <input type="text" class="form-control" id="image" name="image" >
                      </div>                    
                      <div class="form-group">
                        <label for="cohorte">Cohorte</label>
                        <input type="text" class="form-control" id="cohorte" name="cohorte">
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut </label>
                        <select id="statut" name="statut" class="form-control" required>
                            <option value="ouverte">Ouverte</option>
                            <option value="fermée">Fermée</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="personnel_id">Personnel:</label>
                        <select id="personnel_id" name="personnel_id" class="form-control">
                            @foreach ($personnels as $personnel)
                                <option value="{{ $personnel->id }}" {{ old('personnel_id') == $personnel->id ? 'selected' : '' }}>{{ $personnel->nom }}</option>
                            @endforeach
                        </select>                    
                    <br>
                    <button type="submit" class="btn btn-primary btn sm">AJOUTER UNE FORMATION</button>
                  </form>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>