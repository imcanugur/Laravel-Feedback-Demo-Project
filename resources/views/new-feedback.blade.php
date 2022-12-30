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
            var msgSuccess = '{{Session::get('success')}}';
            var controlSuccess = '{{Session::has('success')}}';
            var msgError = '{{Session::get('error')}}';
            var controlError = '{{Session::has('error')}}';
            if(controlError){
                document.writeln('<div class="alert alert-danger alert-dismissible fade show" role="alert">' + msgError + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            } else if(controlSuccess){
                document.writeln('<div class="alert alert-success alert-dismissible fade show" role="alert">' + msgSuccess + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            }
        </script>
        <title>Laravel Feedback Demo Project - Uğur CAN</title>
    </head>
    <body style="margin: 25px 100px 25px 100px;">
        <h1>İletişim</h1>
        <label> </label>
        <form action="{{ route("addFeedback") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">İsim</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name') <font color="red">{{ $message }}</font> @enderror<br>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">E-Posta</label>
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="mail" name="mail">
                    @error('mail') <font color="red">{{ $message }}</font> @enderror<br>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Mesaj</label>
                <div class="col-sm-12">
                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    @error('message') <font color="red">{{ $message }}</font> @enderror<br>
                </div>
            </div>
            <input type="submit"  class="btn btn-primary" style="margin:10px 10px 10px 0px; float: left; width:100%" value="Kaydet">
        </form>
    </body>
</html>


