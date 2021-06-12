<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .degrade{
                font-family: 'Nunito', sans-serif;
            background-image: linear-gradient(to right top, #969ea8, #8e92bf, #ad7bc3, #da54a6, #f80c68);

            }
            .borda{
                background-color:rgba(255, 255, 255);              
                border-radius: 10px;
                width: 40%;
                       
            }

            .formulario{
                width: 40%;
                justify-content: center;
                
      
            }
            .formulario>input:focus{
             border-style: solid;
             border-color: chocolate;
            }
            .btn-add{
                background-image: linear-gradient(to right top, #969ea8, #8e92bf, #ad7bc3, #da54a6, #f80c68); 
                width :100%;
                height: 40px;
            }

           .text-btn{
                font-size:10px;
            }
            *{padding:0;margin:0;}
            .degrade2{

           background-image: linear-gradient(to right bottom, #8b4a6f, #8e5571, #8f6075, #906b79, #90767e, #85747d, #7c7279, #736f74, #5f5f65, #4c5054, #3b4143, #2c3232);
                    }
                    .degrade3{
                        background-image: linear-gradient(to right top, #002255, #002949, #00282e, #002417, #181e0c);
                    }
                    .degrade4{
                        background-image: linear-gradient(to right top, #b9b9bb, #a496ad, #9f6f91, #9b4564, #8c162b);
                        background-attachment: fixed;
                        background-repeat:no-repeat;
                        background-size: 100%;
                    }
                   
    html, body {height: 100%;
    }
        </style>

    </head>
    <body class="degrade4">

<header>


</header>

<main>



    <section class="container d-flex flex-column align-items-center mt-4">
        
     <h3 class="text-light">TO DO LIST</h3>
     <h6 class="text-danger">PHP, LARAVEL , BOOTSTRAP</h6>

     <div data-bs-toggle="collapse" data-bs-target="#banana" aria-expanded="true">
         oi
     </div>

     <div class="collapse" id="banana" >BANANA TO AQUI</div>

     <div class="container">
        <button class="bg-dark btn-add text-white rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"> Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
        
            <div class="row text-center mt-4  justify-content-between">
                @foreach ($inative as $tarefa)                      
                <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td> 
                        <input type="text" name="tarefa" style="text-decoration: line-through;" value ="{{ $tarefa->tarefa }}" disabled>
                         </td>                      
                         @if($tarefa->status == 1)
                        <td><label class="text-success">FEITO </label></td>
                        @else
                        <td><label class="text-success">ANDAMENTO </label></td>
                        @endif
                        <td><a href="" class="p-2 text-btn"> DONeE</a></td>
                        <td><a href="" class="p-2 text-btn"> UPDATE</a></td>         
                      </tr>
                    </tbody>
                  </table>
                  @endforeach
                </div>
                
        </div>
          </ul>
          
        </div>

      </li>

        <div class="mt-4 input-group formulario" >
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <a href="" class="ml-4" type="button" id="button-addon2">Botão

              </a>
              <a href=""></a>
            </div>
          </div>

 


    </section>

</main>
<script>   
function edit(){
    document.getElementById("myText").required = true;
}
</script>


   
  </div>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>
