<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .image-container {
            background: url('images/image3.png') no-repeat center center;
            background-size: cover;
            padding-left: 12px;
            width: 400px;
            
        }
        .form-container {
            padding: 30px;
            width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            height: 150px;
            resize: none;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:#CE0033;
            ;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #357ae8;
            }
            h2{
                text-align: center
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <h2>Candidature</h2>
            <form>
                <div class="form-group">
                    <label for="motivation">Motivation</label>
                    <textarea id="motivation" name="motivation" placeholder="motivation"></textarea>
                </div>
                <div class="form-group">
                    <label for="biographie">Biographie</label>
                    <textarea id="biographie" name="biographie" placeholder="biographie"required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
