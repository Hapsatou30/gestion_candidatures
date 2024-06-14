<!-- resources/views/personnels/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: auto;
            border-radius: 1px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
        }
        h1 {
            text-align: left;
            margin-bottom: 20px;
        }
        .add-button {
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
        .add-button:hover {
            background-color: #a60028;
        }
        .button-container {
            text-align: right;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            width: 25%;
        }
        td img {
            width: 100px;
            height: auto;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions a {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            color: rgb(5, 5, 5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 20%;
            margin: 10px;
            padding: 16px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card h3 {
            margin: 15px 0 10px 0;
        }
        .card p {
            padding: 0 15px 15px 15px;
        }
        h2 {
            text-align: center;
            margin-top: 40px;
        }
    </style>

</head>
<body>
    <div class="dashboard-container">
        <div style="display: flex; justify-content: space-between; align-items: center;">
        </div>
        <div class="dashboard">
            <img src="{{ asset('images/formation_card.png') }}" class="card-img-top">
            <h1>Formations</h1>
            <p>Description des formations.</p>
        </div>
        <h1>Formations</h1>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Formation</th>
                    <th>Statut</th>
                    <th>Debut</th>
                    <th>Fin</th>
                    <th>Voir détails</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personnels as $personnel)
                    <tr>
                        <td><img src="{{ asset('images/formation_card.png') }}" class="card-img-top"></td>
                        <td>{{ $personnel->formation }}</td>
                        <td>{{ $personnel->statut }}</td>
                        <td>{{ $personnel->debut }}</td>
                        <td>{{ $personnel->fin }}</td>
                        <td><a href="{{ route('personnels.show', $personnel->id) }}">Détails</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>
