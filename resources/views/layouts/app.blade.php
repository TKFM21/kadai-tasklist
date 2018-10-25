<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Task-Board</title>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--
        <style>
            /* デフォルトのスタイル */
            body {
                background-color: #000;
            }

            @media (min-width: 500px) {
            /* ウインドウ幅500px以上の時に適用されるスタイル */
                body {
                    background-color: #f00;
                }
            }

            @media (min-width: 750px) {
            /* ウインドウ幅750px以上の時に適用されるスタイル */
                body {
                    background-color: #0f0;
                }
            }

            @media (min-width: 1000px) {
            /* ウインドウ幅1000px以上の時に適用されるスタイル */
                body {
                    background-color: #00f;
                }
            }
        </style>
        -->
        
    </head>

    <body>
        @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_tasks')
        
            @yield('content')
        </div>
    </body>
</html>