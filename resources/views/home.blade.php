<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

    <body> 
        <style>
            ul {
                list-style: none;
                font-size: 24px;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-self: center;
                align-items: center;
                gap: 5px;
            }
        </style>
        <div class="container">
            <h1>
                Ciao Laravel, Im finally Here !!!
            </h1>
            <ul>
                <li><span>I'm {{ $nome . ' ' . $cognome }}</h2></span>
                <li>Ho {{$eta . ' '. 'anni'. ' ' . 'e faccio il' . ' ' . $lavoro }}</li>
            </ul>
        </div>
    </body>
</html>
