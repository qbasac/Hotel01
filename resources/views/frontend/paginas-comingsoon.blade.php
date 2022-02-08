<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" >
        <meta name="keywords" content="HTML5 Template, Hotels near me, Motel, booking hotel,hotel booking,rooms,discounted,offers,deals,last minute,hotels,oscarthemes,Oscar Themes,Jasmine Hotel" >
        <meta name="description" content="Discover Oscar Themes - Jasmine Hotel HTML5 Template, Hotel, Travel,Top Destinations Discover responsive Bootstrap templates, & HTML templates," >
        <meta name="theme-color" content="#f4b843">
        <title>Coming Soon Hotel</title>
        <link href="{{ asset('frontend/css/css-plugin-collection.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/typography.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/shortcodes.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/color.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
        <link rel="icon" sizes="192x192" href="images/favicon/icon-192x192.png">
    </head>
    <body>

        <div id="loader-overflow">
          <div id="loader3" class="loader-cont">Por favor, active JS</div>
        </div>
        <div class="chr-wrapper">

            <div class="chr-fixed-section comingsoon-page">
                <div class="container">
                    <p>Pronto llegaremos</p>
                    <h4>Reciba una notificación cuando <br> El sitio se pone en marcha</h4>

                    <div id="mc_embed_signup" class="nl-form-container clearfix">
                        <form action="https://twitter.us16.list-manage.com/subscribe/post-json?u=c768d55d7a9fca1c581bc5614&amp;id=6db56c6523&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                            <div class="input-field">
                                <input type="email" placeholder="Introduzca su nombre" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Email address" required>
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value="">
                                </div>
                                <label class="search_icon"><input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Enviar"></label>
                            </div>
                        </form>
                        <div id="notification_container"></div>
                    </div>

                    <ul class="chr-countdown countdown">
                        <li>
                            <span class="days">69</span>
                            <p class="days_ref">días</p>
                        </li>
                        <li>
                            <span class="hours">13</span>
                            <p class="hours_ref">horas</p>
                        </li>
                        <li>
                            <span class="minutes">44</span>
                            <p class="minutes_ref">mins</p>
                        </li>
                        <li>
                            <span class="seconds last">12</span>
                            <p class="seconds_ref">secs</p>
                        </li>

                    </ul>

                    <li>
                        {{-- <button type="button" class="btn btn-black" id="regresar" >Regresar</button> --}}
                        <a href="{{ url('/') }}" class="btn btn-lg btn-warning" id="regresar">Regresar</a>
                    </li>
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend/js/jquery.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('frontend/js/imageloader.js') }}"></script>
        <script src="{{ asset('frontend/js/browser-detect.js') }}"></script>
        <script src="{{ asset('frontend/js/waypoint.js') }}"></script>
        <script src="{{ asset('frontend/js/countdown.js') }}"></script>
        <script src="{{ asset('frontend/js/custom.js') }}"></script>
    </body>

</html>
