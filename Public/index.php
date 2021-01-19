<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b5efad7158.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    
<header>
<nav class="navbar navbar-expand-lg navbar-light" id="menu">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Nouveauté </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Newsletter</a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Connexion</a>
      </li>
    </ul>    
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light  text-dark " id="menu2">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"> 
                <img src="../images/logo.jpg" alt="logo" width ="50px" height="50px">
            </a>
       
  
    <ul class="navbar-nav mr-auto">
         
        <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">A propos de l'école </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">A propos de l'événement</a>
      </li>     
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Vie etudiant </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Entreprise</a>
      </li>
    </ul> 
    <form class="form-inline my-2 my-lg-0">
        <div class="form-group">
            <input type="text" class="form-control" name="search" id="search">
            <button class="btn  my-2 my-sm-0" type="submit" Onclick ="affiche()" ><i class="fas  fa-2x fa-search" style="color:black"></i></button>
        </div>
    </form>


  </div>
</nav>
</header>

<main>
    <div class="container ">
        <div class="row ">   
                <div class="col-md-8">
                    <img id="banner" src="../images/img1.jpg" alt="" width="700px" height="400px">
                </div>
                <div class="col-md-4 d-flex align-items-center" >
                    <div>
                        <h2 class="text-center container-fluid " id="titre">
                            Evenement Digital <br> <span> ESEM </span>
                        </h2>
                        <p class="paragraphe">
                        L’événement digital expérience vous invite à vivre un moment hors du temps,
                        Lors de votre expérience vous retrouverez tous les incontournables d’un événement réussi. Du cocktail dinatoire,
                        à la prise de parole en passant par le show, les animations et les goodies tout sera au rendez-vous !  
                        </p>
                        <button href="#" class="btn btn-primary ml-4 "> En savoir plus sur l'événement ESEM  <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>        
        </div>
    
    <div class="row cards">
           <!-- section card   -->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="../images/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Evenement Esem</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../images/img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Campus</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../images/img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Etudiant-professeur</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../images/img1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Entreprise</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            </div>   
        </div>
    
        
    
    
    </div>
    
</main>





<footer>
    <nav class="navbar navbar-expand-lg navbar-light" id="footer">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ESEM </a>
                </li>  
                <li class="nav-item ">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"> Confidentialités </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Responsabilités</a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"> Mentions légales </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
            </ul> 
            <a href=""><i class="fab fa-2x fa-facebook "></i></a>
            <a href=""><i class="fab fa-2x fa-linkedin"></i></a>
        </div>
    </nav>
</footer>
 <script src="app.js"></script>
</body>
</html>