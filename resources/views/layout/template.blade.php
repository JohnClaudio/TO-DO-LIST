
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
        .formulario 
        {
            width: 40%;
            justify-content: center;
        }

        .formulario>input:focus 
        {
            border-style: solid;
            border-color: chocolate;
        }

        .btn-add 
        {
            background-image: linear-gradient(to right top, #969ea8, #8e92bf, #ad7bc3, #da54a6, #f80c68);
            width: 100%;
            height: 40px;
        }

        .degrade4 
        {
            background-image: linear-gradient(to right top, #b9b9bb, #a496ad, #9f6f91, #9b4564, #8c162b);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        html,
        body{
            height: 100%;
        }
    </style>

</head>

<body class="degrade4">

<div class="container d-flex flex-column align-items-center">
    @yield('conteudo')

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
