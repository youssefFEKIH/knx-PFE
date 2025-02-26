<!DOCTYPE html>
<html lang="Fr">

@if( (Route::is('home')) && !(session()->has('mail')))
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mirage Group "KNX Training"</title>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">

  <!-- readMore-->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  var max = 100;
  $(".readMore").each(function() {
      var str = $(this).text();
      if ($.trim(str).length > max) {
          var subStr = str.substring(0, max);
          var hiddenStr = str.substring(max, $.trim(str).length);
          $(this).empty().html(subStr);
          $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus...</a>');
          $(this).append('<span class="addText">' + hiddenStr + '</span>');
      }
  });
  $(".lire-plus").click(function() {
      $(this).siblings(".addText").contents().unwrap();
      $(this).remove();
  });
});
  </script>
  <style>
  .readMore .addText {
  display: none;
}
  </style>


</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}"> Accueil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#featureX">Mirage Group</a></li>
          <li><a href="#courses">Cours En Ligne</a></li>
          <li><a href="#coursesP">Cours Présentiel</a></li>
          <li><a href="#faculity-member">Projet PFE</a></li>
          <li><a href="#postuler">KNX Travail</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Connexion</a></li>
          <li class="btn-trial"><a href="#" data-target="#inscrire" data-toggle="modal">S'inscrire</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Connexion</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
            <div class="form-group">
              <form name="" action="/home/connect" method="POST" id="loginForm">
                @csrf
                <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input class="form-control"  placeholder="Email" name="mail" id="loginid" type="Email" autocomplete="off" required/>
                  </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" name="mot_de_passe"  placeholder="mot de passe" id="loginpsw" type="password" autocomplete="off" required />
                  </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Connexion</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
    <!--Modal box-->
    <div class="modal fade" id="inscrire" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">S'inscrire</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Enregistrer un nouveau compte</p>
              <div class="form-group">
                <form action="" method="POST"  id="loginForm">
                  @csrf
                  <div class="form-group has-feedback">
                    <!----- username -------------->
                    <input class="form-control" placeholder="Nom d'utilisateur" name="nom" id="loginid" type="text" autocomplete="off" required />
                    </div>
                  <div class="form-group has-feedback">
                    <!----- Email -------------->
                      <input type="email" class="form-control" name="mail" id="email" placeholder="Email" autocomplete="off" required/>
                      </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <input class="form-control" placeholder="mot de passe" name="mot_de_passe" id="loginpsw" type="password" autocomplete="off" required/>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- Repat password -------------->
                    <input class="form-control" placeholder="Repeter votre mot de passe" name="mot_de_passe_2" id="loginpsw" type="password" autocomplete="off" required />
                    </div>

                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-green btn-block btn-flat"  >S'inscrire</button>
                    </div>
                    <p class="link-bottom"> Êtes vous membre?  <a href="#" data-target="#login" data-dismiss="modal" data-toggle="modal">Connexion</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->

@elseif(!(Route::is('home')) &&!(session()->has('mail')) )

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mirage Group "KNX Training"</title>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">

<!-- readMore-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var max = 100;
$(".readMore").each(function() {
    var str = $(this).text();
    if ($.trim(str).length > max) {
        var subStr = str.substring(0, max);
        var hiddenStr = str.substring(max, $.trim(str).length);
        $(this).empty().html(subStr);
        $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus...</a>');
        $(this).append('<span class="addText">' + hiddenStr + '</span>');
    }
});
$(".lire-plus").click(function() {

});
});
</script>
<style>
.readMore .addText {
display: none;
color:green;
}
</style>


</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('home') }}/#featureX">Mirage Group</a></li>
          <li><a href="{{ route('home') }}/#courses">Cours En Ligne</a></li>
          <li><a href="{{ route('home') }}/#coursesP">Cours Présentiel</a></li>
          <li><a href="{{ route('home') }}/#faculity-member">Projet PFE</a></li>
          <li><a href="{{ route('home') }}/#postuler">KNX Travail</a></li>
          <li><a href="{{ route('home') }}/#contact">Contact</a></li>
          <li><a href="#" data-target="#login" data-toggle="modal">Connexion</a></li>
          <li class="btn-trial"><a href="#" data-target="#inscrire" data-toggle="modal">S'inscrire</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Connexion</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
            <div class="form-group">
              <form name="" action="/home/connect" method="POST" id="loginForm">
                @csrf
                <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input class="form-control"  placeholder="Email" name="mail" id="loginid" type="Email" autocomplete="off" required/>
                  </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" name="mot_de_passe"  placeholder="mot de passe" id="loginpsw" type="password" autocomplete="off" required />
                  </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Connexion</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
 <!--Modal box-->
 <div class="modal fade" id="inscrire" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">S'inscrire</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Enregistrer un nouveau compte</p>
              <div class="form-group">
                <form action="" method="POST"  id="loginForm">
                  @csrf
                  <div class="form-group has-feedback">
                    <!----- username -------------->
                    <input class="form-control" placeholder="Nom d'utilisateur" name="nom" id="loginid" type="text" autocomplete="off" required />
                    </div>
                  <div class="form-group has-feedback">
                    <!----- Email -------------->
                      <input type="email" class="form-control" name="mail" id="email" placeholder="Email"  required/>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <input class="form-control" placeholder="mot de passe" name="mot_de_passe" id="loginpsw" type="password" autocomplete="off" required/>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- Repat password -------------->
                    <input class="form-control" placeholder="Repeter votre mot de passe" name="mot_de_passe_2" id="loginpsw" type="password" autocomplete="off" required />
                    </div>

                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-green btn-block btn-flat" >S'inscrire</button>
                    </div>
                    <p class="link-bottom"> Êtes vous membre?  <a href="#" data-target="#login" data-dismiss="modal" data-toggle="modal">Connexion</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    @elseif(!(Route::is('home'))&&(session()->has('mail')))
    <!DOCTYPE html>
<html lang="Fr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mirage Group "KNX Training"</title>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">

<!-- afficher la suite-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var max = 100;
$(".readMore").each(function() {
    var str = $(this).text();
    if ($.trim(str).length > max) {
        var subStr = str.substring(0, max);
        var hiddenStr = str.substring(max, $.trim(str).length);
        $(this).empty().html(subStr);
        $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus...</a>');
        $(this).append('<span class="addText">' + hiddenStr + '</span>');
    }
});
$(".lire-plus").click(function() {

});
});
</script>
<style>
.readMore .addText {
display: none;
color:green;
}
</style>


</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('home') }}/#featureX">Mirage Group</a></li>
          <li><a href="{{ route('home') }}/#courses">Cours En Ligne</a></li>
          <li><a href="{{ route('home') }}/#coursesP">Cours Présentiel</a></li>
          <li><a href="{{ route('home') }}/#faculity-member">Projet PFE</a></li>
          <li><a href="{{ route('home') }}/#postuler">KNX Travail</a></li>
          <li><a href="{{ route('home') }}/#contact">Contact</a></li>
          <li><a href="{{ route('profil') }}" >Profil</a></li>
          <li class="btn-trial"><a href="/deconnexion" >Se déconnecter</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->


@elseif((Route::is('home'))&&(session()->has('mail')))
<!DOCTYPE html>
<html lang="Fr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mirage Group "KNX Training"</title>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">

<!-- afficher la suite-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var max = 100;
$(".readMore").each(function() {
    var str = $(this).text();
    if ($.trim(str).length > max) {
        var subStr = str.substring(0, max);
        var hiddenStr = str.substring(max, $.trim(str).length);
        $(this).empty().html(subStr);
        $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus...</a>');
        $(this).append('<span class="addText">' + hiddenStr + '</span>');
    }
});
$(".lire-plus").click(function() {

});
});
</script>
<style>
.readMore .addText {
display: none;
color:green;
}
</style>


</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#featureX">Mirage Group</a></li>
          <li><a href="#courses">Cours En Ligne</a></li>
          <li><a href="#coursesP">Cours Présentiel</a></li>
          <li><a href="#faculity-member">Projet PFE</a></li>
          <li><a href="#postuler">KNX Travail</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ route('profil') }}" >Profil</a></li>
          <li class="btn-trial"><a href="/deconnexion" >Se déconnecter</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
@endif

