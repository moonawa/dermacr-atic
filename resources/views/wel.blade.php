<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS only -->
        <link href="../css/new.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body style="font-family: BasisGrotesque,sans-serif;" >

        <marquee  style="background: #00BEB9 ; color: white">Derma n’est pas un service d’urgence. Pour toute urgence, appelez le 1515 (numéro d’urgence sénégalais)</marquee>
      
        {{-- nav --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Derma</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#equipe">ÉQUIPE MÉDICALE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">TARIFS</a>
                </li>
              
              </ul>
           
              <!-- Button trigger modal -->
             <button type="button" class="btn " style="background: white; color: #00BEB9; border: 2px solid #00BEB9"> <a href="/inspat">Patient</a></button>
             <button type="button" class="btn " style="background: white; color: #00BEB9; border: 2px solid #00BEB9"> <a href="/insmed">medecin</a></button>
    <button type="button" class="btn " style="background: white; color: #00BEB9; border: 2px solid #00BEB9" data-bs-toggle="modal" data-bs-target="#exampleModal">
      
      Vous etes praticien?
    </button>
    <button type="button" class="btn " style="background: white; color: black; border: 2px solid black"><a href="{{ route('login') }}"> Connexion</a> </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Créez un compte!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action=""></form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    
    
            </div>
          </div>
        </nav>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <center><h2>Comment ça marche ?</h2></center><br><br><br>
       <div class="container">
         <div class="row">
           <div class="col-md-4">
             <center><img style="width: 200px;" src="../img/connecte1.png" alt="">
            <h4>Je me connecte <br> ou je m'nscris</h4><br>
             <p class="card-text"><small class="text-muted">Remplacez les fiches médicales par des comptes en lignes.</small></p></center>
           </div>
           <div class="col-md-4">
            <center><img style="width: 200px;" src="../img/consultation.png" alt=""></center>
           <center> <h4>J'effectue <br> ma t éléconsultation.</h4><br></center>
          <center> <p class="card-text"><small class="text-muted">Bénéficiez d'avis et de diagnostics, et si nécessaire, d'une ordonnance.</small></p></center> 
          </div>
          <div class="col-md-4">
            <center><img style="width: 200px;" src="../img/ins.png" alt="">
            <h4>Je me connecte <br> ou je m'nscris</h4><br>
            <p class="card-text"><small class="text-muted">Remplacez les fiches médicales par des comptes en lignes.</small></p></center>
          </div>
         </div>
       </div>
             
  
          <br><br><br><br><div class="container-fluid" style="background: #f4f7f7"><br><br> </div>
          
            <center><h1 id="equipe">L’ensemble des praticiens disponibles sur Derma</h1></center>
         



         <div class="container">
           <div class="row" >

             <div class="col-md-4" style="background: white; border-radius:15px;  box-shadow: 1px 1px 12px rgb(209, 200, 200); "><br><br>
               <div class="row">
                 <div class="col-md-3 "><img class="rounded-circle " style="width: 75px; height:75px;" src="../img/medecin.jpg" alt=""></div>
                 <div class="col-md-9"><h4>Awa Ndiaye Sène</h4><p>Dermatologue depuis 2ans</p></div><br>
                 <hr class="sidebar-divider my-0" style="background-color: gray"><br>
                 <div class="col-md-8"><p>consultaion</p></div>
                 <div class="col-md-3"><p>10.000Fcfa</p></div>
                 <center><button style="background-color: #white; border: 1px solid #00BEB9">Voir le Profil</button></center><br><br>
               </div>
             </div>
             
             <div class="col-md-4" style="background: white; border-radius:15px;  box-shadow: 1px 1px 12px rgb(209, 200, 200);"><br><br>
              
              <div class="row">
                @foreach(App\Medecin::get() as $medecin)
                <div class="col-md-3 "><img class="rounded-circle " style="width: 75px; height:75px;" src="../img/medecin.jpg" alt=""></div>
                <div class="col-md-9 "><h4>{{ $medecin->hopital }}</h4><p>Dermatologue depuis 2ans</p></div>
                <hr class="sidebar-divider my-0" style="background-color: gray"><br>
                <div class="col-md-8"><p>consultaion</p></div>
                <div class="col-md-3"><p>10.000Fcfa</p></div>
                
                <center><button style=" border: 1px solid #00BEB9"><a class="button is-primary" href="{{ route('medecins.show', $medecin->id) }}">Voir</a></button></center>
                @endforeach
                <br><br>
              </div>
           
            </div>
            
            <div class="col-md-4" style="background: white;border-radius:15px;  box-shadow: 1px 1px 12px rgb(209, 200, 200);"><br><br>
              <div class="row">
                <div class="col-md-3 "><img class="rounded-circle " style="width: 75px; height:75px; " src="../img/medecin.jpg" alt=""></div>
                <div class="col-md-9"><h4>Awa Ndiaye Sène</h4><p>Dermatologue depuis 2ans</p></div>
                <hr class="sidebar-divider my-0" style="background-color: gray"><br>
                <div class="col-md-8"><p>consultaion</p></div>
                <div class="col-md-3"><p>10.000Fcfa</p></div>
                <center><button style="background-color: #white; border: 1px solid #00BEB9">Voir le Profil</button> </center><br><br>
              </div>
            </div>
          
        
         </div><br>
        <div class="container"><button style="background-color: #00BEB9; border: 1px solid #00BEB9; color:white">Voir plus de Dermatologue<br><br></button></div><br><br><br><br><br><br><br><br>
      </div><br>
      <div class="container-fluid" style="background: #00BEB9"><br><br>
         <center><h3>Découvrez tous nos conseils sur la peau</h3></center><br>
         
          <br></div>
          {{-- mon truc  --}}
          <div class="container">
           {{--  <div class="row mb-2">
                <div class="col-12 text-center pt-3">
                    <h1>Bootstrap Magazine Carousel</h1>
                    <p>Bootstrap Header Responsive Magazine Grid Cover Carousel</p>
                </div>
            </div> --}}
            
            <!--Start code-->
            <div class="row">
                <div class="col-12 pb-5">
                    <!--SECTION START-->
                    <section class="row">
                        <!--Start slider news-->
                        <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                            <div id="featured" class="carousel slide carousel" data-ride="carousel">
                                <!--dots navigate-->
                                <ol class="carousel-indicators top-indicator">
                                    <li data-target="#featured" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured" data-slide-to="1"></li>
                                    <li data-target="#featured" data-slide-to="2"></li>
                                    <li data-target="#featured" data-slide-to="3"></li>
                                </ol>
                                
                                <!--carousel inner-->
                                <div class="carousel-inner">
                                    <!--Item slider-->
                                    <div class="carousel-item active">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="../img/acne.jpg"
                                                             alt="#" >
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1">L’acné est un problème de peau très fréquent chez les ...</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                     <a href="/acne">En savoir plus</a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="../img/demangeaisons.jpg"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1">Walmart shares up 10% on online sales lift</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="../img/zona.jpg"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1">Bank chief warns on Brexit staff moves to other company</h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                        <span class="news-date">Oct 22, 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--Item slider-->
                                    <div class="carousel-item">
                                        <div class="card border-0 rounded-0 text-light overflow zoom">
                                            <div class="position-relative">
                                                <!--thumbnail img-->
                                                <div class="ratio_left-cover-1 image-wrapper">
                                                    <a href="#">
                                                        <img class="img-fluid w-100"
                                                             src="../img/mycose.jpg"
                                                             alt="">
                                                    </a>
                                                </div>
                                                <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                    <!--title-->
                                                    <a href="#">
                                                        <h2 class="h3 post-title text-white my-1">Vous avez la peau qui démange et vous n’arrêtez pas de vous gratter ? </h2>
                                                    </a>
                                                    <!-- meta title -->
                                                    <div class="news-meta">
                                                        <a class="text-white font-weight-bold" href="/demangeaisons">En Savoir plus</a>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end item slider-->
                                </div>
                                <!--end carousel inner-->
                            </div>
                            
                            <!--navigation-->
                            <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End slider news-->
                        
                        <!--Start box news-->
                        <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                            <div class="row">
                                <!--news box-->
                                <div class="col-6 pb-1 pt-0 pr-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="../img/eczema.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Lifestyle</a>
        
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h5 text-white my-1">Should you see the Fantastic Beasts sequel?</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-0">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="../img/eruption.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Motocross</a>
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h5 text-white my-1">Three myths about Florida elections recount</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--news box-->
                                <div class="col-6 pb-1 pr-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="../img/conseil.jpg"
                                                         alt="">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Fitness</a>
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h5 text-white my-1">Finding Empowerment in Two Wheels and a Helmet</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--news box-->
                                <div class="col-6 pb-1 pl-1 pt-1">
                                    <div class="card border-0 rounded-0 text-white overflow zoom">
                                        <div class="position-relative">
                                            <!--thumbnail img-->
                                            <div class="ratio_right-cover-2 image-wrapper">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                         src="../img/beauty.jpg"
                                                         alt="blog website templates bootstrap">
                                                </a>
                                            </div>
                                            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                                <!-- category -->
                                                <a class="p-1 badge badge-primary rounded-0" href="#">Adventure</a>
                                                <!--title-->
                                                <a href="#">
                                                    <h2 class="h5 text-white my-1">Ditch receipts and four other tips to be a shopper</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end news box-->
                            </div>
                        </div>
                        <!--End box news-->
                    </section>
                    <!--END SECTION-->
                </div>
            </div>
            <!--end code-->
        </div>
        
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <p>Design by Ari Budin <a target="_blank" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Bootstrap.News</a> | images by pixabay and pexels</p>
                </div>
            </div>
          {{-- fin mon truc --}}
           <div class="container-fluid" style="background: #343a40"><br><br>
            <div class="row">
              <div class="col-md-2"><br><h5>DERMA</h5><h6 style="color: gray">Équipe Médicale</h6><h6 style="color: gray">Tarifs</h6><h6 style="color: gray">Offre Praticien</h6></div>
              <div class="col-md-2"><br><h5>ACCÈS</h5><h6 style="color: gray">Accès Patient</h6><h6 style="color: gray">Accès Praticien</h6></div>
              <div class="col-md-2"><br><h5>AIDE</h5><h6 style="color: gray">Nous Contactez</h6><h6 style="color: gray">Accès Praticien</h6></div>
              <div class="col-md-2"><br><h5>AUTRES</h5><h6 style="color: gray">Blog</h5><h6>Accès Praticien</h6></div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>