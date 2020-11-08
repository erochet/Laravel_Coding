<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fifa 21</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            #searchbar
            {
                margin-bottom: 15px;
                margin-top: 30px;
                height: 60px;
                background-color: red;
                border-radius: 30px;
                padding: 10px;
            }
        </style>

              <style>
            .search_input{
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color:transparent;
            line-height: 40px;
            transition: width 0.4s linear;
    }
        </style>

        <style>
        .searchbar:hover > .search_input{
        padding: 0 10px;
        width: 450px;
        caret-color:red;
        transition: width 0.4s linear;
        }
        </style>
    <style>

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }
    </style>

    <style>
     .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
    </style>

        <style>
            #h1
            {
            color:red;
            }
        </style>
        <style>
            #h2
            {
            box-sizing:content-box;
            width: 91%;
            background-color:red;
            color: white;
            border-radius: 8px;
            }
        </style>
        <style>
            #h3
            {
                color: black;
            }
        </style>
        <style>
            .pagination
            {
                display: flex;
                color: black;
                /*box-sizing: border-box;*/
                flex-direction: row;
                justify-content: space-between;
                width: 50%;
            }           

        </style>

        <style>
            .pagination a
            {
                padding:10px;
                color : red;
                text-decoration: none;
                margin-left: 50px;
                margin-top: 30px;
                
            }   

        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
        <style>
          .filetwo{
            margin-top:15px;
            margin-bottom:45px;
          }
        </style>

        <style>
        .produit{
                
          float: left;
          margin-left:15px;}
        </style>

        <style>
        .description{
          font-weight: lighter;      
          float: left;
          margin-left:30px;}
        </style>

        <style>
          .prix{
    float: right;
    margin-right: 20px;
    }       
        </style>
             <style>
          .annonce{
          margin-top: 15px;
          font-weight:bold;
                  }       
        </style>

        <style>
        .pagination a:hover:not(.active) {background-color: #FFA2A2;}
        </style>

        </head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#" id="h1">Capot scenic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://127.0.0.1:8000/register" id="h2">Déposez une annonce<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/register"id="h3">Mes recherches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/register"id="h3">Mes Favoris</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/register"id="h3">Mes Messages</a>
      </li>
    </ul>

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" id="h3">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" id="h3">Register</a>
                        @endif
                    @endif
                </div>
            @endif
</nav>
<div class="container h-100" id="searchbar">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Recherche...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>

<!-- <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mb-7" id="searchbar">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search"> -->
</form>
</header>

<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
  <label class="custom-control-label" for="defaultChecked2">Annonces<span id="h1"> 6 773 074</span></label>
  </div>

  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultUncheckedDisabled2" disabled>
  <label class="custom-control-label" for="defaultUncheckedDisabled2">Professionels<span id="h1"> 281 640</span></label>
</div>

  <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
  <label class="custom-control-label" for="defaultChecked2">Particuliers<span id="h1"> 6 491 434</span></label>
  </div>

  <div>
      <p class="annonce"> Accueil > France > Nord-Pas-de-Calais > Capot scenic</p>

    </div>
</div>
<div class="col-4">
            <img src="images/scenic.jpg" class="w-100">
            <div class="col-sm"><a href="#"class="produit" alt="Capot Scenic" id="h3"><b>Capot scenic 2</b></a>
            <a class="prix color red" id="h1">25 €</a></div>
            <br><a class="description"><b>Equipement auto</b></a></br>
            <a class="description"><b>Anzin 59410</b></a><br>
            <a class="description" id="h1"><b>Prendre à domicile</b></a><br>    
        </div>   
        <p> Description</br>
Jeux FIFA21 Neuf. N'hésitez pas à me contacter.</br>
<br>Type</br>
Sony</br>
<br>Etat</br>
Neuf</br>
<br>Marque</br>
Sony</br>
<br>Livraison</br>
Achetez ce bien et choisissez votre mode de livraison préféré !</br></p>

</p>

        </div>    
</body>


    <footer>
    <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
    </div>
    </footer>
</html>
