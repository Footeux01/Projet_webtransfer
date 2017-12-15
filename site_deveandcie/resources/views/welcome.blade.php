<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome !</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <main class="container">
        <div class="row justify-content-between">
            <div class="col-5" id="blocleft">
                <form id="formupload" method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row justify-content-center">
                        <input class="col-12" type="file" name="file_name">
                    </div>
                    <div class="row justify-content-center">
                        <input class="col-12" type="text" name="exp_mail" placeholder="email expéditeur">
                    </div>
                    <div class="row justify-content-center">
                        <input class="col-12" type="text" name="dest_mail" placeholder="email destinataire">
                    </div>
                    <div class="row justify-content-center">
                        <textarea class="col-12" name="dest_message" placeholder="Message"></textarea>
                    </div>
                    <div class="row justify-content-center">
                        <button id="btnup" type="submit" class="btn btn-dark">Envoyer</button>
                    </div>

                </form>
            </div>

            <div class="col-6" id="blocright">
                <div class="row justify-content-center">
                    <figure>
                        <img src="{{asset('img/logo.png')}}" id="logo" width="30%">
                        <figcaption><h3>Deve &amp; Cie</h3></figcaption>
                    </figure>
                    <p>
                        Nos vous proposons un service de transfert de fichier, sans connexion.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>