<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
         .h1contactmail{border: 1px solid black;

         }
     </style>
</head>
<body>
    Bonjour {{request()->input('nom')}}
     Votre mail a bien été envoyé
    <br>
     résumé de votre message: <span class="h1contactmail"> {{request()->input('message')}}</span>

     
</body>
</html>