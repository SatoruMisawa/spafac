<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space Factory</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
</head>
<body>
    <style>
        .maintenance {
            width: 100%;
            height: 100%;
            background-color: #fff;
        }
        .maintenance-container {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        .maintenance-logo {
            width: 300px;
        }
        .maintenance-message {
            color: #777777;
            font-style: sans-serif;
            margin-top: 10px;
        }
    </style>

    <div class="maintenance">
        <div class="maintenance-container">
            <img src="{{ asset('img/logo-top.png') }}" alt="" class="maintenace-logo">
            <p class="maintenance-message">只今メンテナンス中</p>
        </div>
    </div>
</body>
</html>