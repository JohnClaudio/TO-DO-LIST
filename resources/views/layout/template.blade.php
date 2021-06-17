
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .degrade
        {
            background-image: linear-gradient(to right top, #2d2d2e, #252728, #1e2121, #171b19, #131410);
          
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }
        tbody, td, tfoot, th, thead{
           border-style: none;
       }

    </style>

</head>

<body class="degrade">
    
<div class="container d-flex flex-column align-items-center ">
    @yield('conteudo')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
