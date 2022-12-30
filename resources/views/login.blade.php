<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Feedback Demo Project - Uğur CAN</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <style>
            html, body {
                width: 90%;
                height: 90%;
                background: #f0f0f0;
            }
            .close:focus,.close:hover{
                color:#000;
                text-decoration:none;
                opacity:0.90;
            }
            .close:not(:disabled):not(.disabled){
                cursor:pointer
            }
            button.close{
                padding:0;background-color:transparent;border:0;-webkit-appearance:none
            }
            .close{
                position:absolute;
                right: 15px;
            }
        </style>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            var msg = '{{Session::get('error')}}';
            var control = '{{Session::has('error')}}';
            if(control){
                document.writeln('<div class="alert alert-danger alert-dismissible fade show" role="alert">' + msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }
        </script>
        <title>Giriş Yap - Uğur CAN</title>
    </head>
    <body style="margin: 25px 100px 25px 100px;">
        <h1>Giriş Yap</h1>
        <label> </label>
        <form action="{{ route("check") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">E-Posta Adresi:</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="mail" placeholder="E-Posta Adresi" required>
                @error('name') <font color="red">{{ $message }}</font> @enderror<br>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
                @error('password') <font color="red">{{ $message }}</font> @enderror<br>
            </div>
            <input type="submit"  class="btn btn-primary" style="margin:10px 10px 10px 0px; float: left; width:100%" value="Giriş Yap">
        </form>
    </body>
</html>



