<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            display: flex;
            justify-content: space-between;
            width: 85%;
            margin-top: 20px;
        }
        .btn {
            padding: 8px 25px;
            margin-top: 5px;
            background-color: #CE0033;
            color: white;
            border-radius: 3px;
            text-align: center;
        }
        .list1 {
            background-color: #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            color: #ffffff;
        }
        .list2 {
            background-color: #CE0033;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin: 10px;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card1">
             <img src="{{ asset('images/bi_file-pdf.png') }}" class="card-img-top" alt="Photo biii">
            <h1 class="nom"><br>
                Mobile par Simplon Sénégal : Votre Porte <br>
                d’Entrée dans le Monde du Numérique</h1>
            <p>Chez Simplon Sénégal, nous croyons en la puissance de la pédagogie active pour <br>
                former des professionnels du numérique compétents et prêts à relever <br> 
                les défis du monde digital en constante évolution. <br>
                Notre programme de formation en Développement Web et Web Mobile est conçu <br>
                pour vous équiper avec les compétences clés nécessaires pour réussir dans ce domaine passionnant.</p>
            <h2>Débouchés</h2>
            <p>La demande de développeurs web et mobile qualifiés ne cesse de croître, ouvrant la voie à de nombreuses opportunités passionnantes, telles que :</p>
            <ul>
                <li>Développeur Web Front-End</li>
                <li>Développeur Web Back-End</li>
                <li>Développeur Full-Stack</li>
                <li>Développeur Mobile</li>
                <li>Chef de Projet Web et Mobile</li>
                <li>Concepteur d’Interfaces Utilisateur</li>
                <li>Consultant en Développement Web et Mobile</li>
            </ul>
            <a href="#" class="btn">Modifier</a>
        </div>
        <div class="card2">
            <div class="list1">
                <h2>Compétences</h2>
                <ul>
                    <li>Marketing digital</li>
                    <li>UI/UX Design</li>
                    <li>Data science et analyse de données</li>
                    <li>Cloud computing et services cloud</li>
                    <li>Intelligence émotionnelle</li>
                    <li>Graphic Design</li>
                    <li>Résilience</li>
                    <li>Développement web</li>
                    <li>Gestion du temps</li>
                    <li>Esprit d'équipe</li>
                    <li>Machine learning</li>
                    <li>Développement mobile</li>
                    <li>Leadership</li>
                    <li>IoT</li>
                    <li>Référencement</li>
                </ul>
            </div>
            <div class="list2">
                <h2>Quelques débouchés</h2>
                <ul>
                    <li>Chef de projet digital</li>
                    <li>UI/UX Design</li>
                    <li>Chargé de communication digitale</li>
                    <li>Community manager</li>
                    <li>Responsable marketing digital</li>
                    <li>Graphic Design</li>
                    <li>Motion Designer</li>
                    <li>Spécialiste SEO/SEM</li>
                    <li>Analyste web</li>
                    <li>Growth hacker</li>
                    <li>Développeur web</li>
                    <li>Développement mobile</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
