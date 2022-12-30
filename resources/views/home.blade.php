<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Laravel Feedback Demo Project - Uğur CAN</title>
        <style>
            html, body {
                width: 90%;
                height: 90%;
            }
            #container {
                position: fixed;
                width: 330px;
                top: 40%;
                left: 40%;
            }
            label {
                color: #555;
                display: inline-block;
                margin-left: 18px;
                padding-top: 10px;
                font-size: 14px;
            }
            p a {
                font-size: 11px;
                color: #aaa;
                float: right;
                margin-top: -13px;
                margin-right: 20px;
                transition: all .4s ease;
            }
            p a:hover {
                color: #555;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <a href="{{ url('login') }}" class="btn btn-primary" style="margin:10px 10px 10px 10px; width: 100%;">Giriş Yap</a>
            <a href="{{ url('new-feedback') }}" class="btn btn-primary" style="margin:10px 10px 10px 10px; width: 100%;">Geri Bildirim Ekle</a>
        </div>
    </body>
</html>
