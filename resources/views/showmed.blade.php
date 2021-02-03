
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Derma</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

</head>

<body class="bg-gradient-primary">

  <div class="container">
      <div class="row">
      <div class="col-md-6">

        <div class="card">
            <div>{{ $medecin->users->avatar }}</div>
            <header class="card-header">
                <p class="card-header-title">Nom : {{ $medecin->users->name }}</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>E-mail : {{ $medecin->users->email }}</p>
                    <p>Téléphone : {{ $medecin->users->telephone }}</p>
                    <p>Sexe : {{ $medecin->users->sexe }}</p>
                    <hr>
                    <p>Hopital : {{ $medecin->hopital }}</p>
                </div>
            </div>
        </div>
       
        @if (Auth::user()==true)
        <form action="/" method="GET">
            <select name="id" id="">
                
            </select>
        <a class="btn btn-primary" href="/choose">Choisir</a>
        </form>
        @endif
        @if (Auth::user()==false)
        <a class="btn btn-primary" href="{{ route('login') }}">Choisir</a>
        @endif
    </div>


    <div class="col-md-6">
        <div class="container row">
            <div class="col-md-2"><strong>LUNDI</strong></div>
            <div class="col-md-2">MARDI</div>
            <div class="col-md-2">MERCREDI</div>
            <div class="col-md-2">JEUDI</div>
            <div class="col-md-2">VENDREDI</div>
        </div>
    </div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>
