<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INFOAQP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,body {
                background-image:url(../images/fondo.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                color:#5DC1B9;
                font-family: 'Bauhaus 93', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background-color:rgb(0, 0, 0,.7);
                height:250px;
                weight:auto;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #5DC1B9;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .almacenador{
                margin-top:70px;
                font-family: 'Arial', sans-serif;
            }
            .contenido{
                margin:100px;
                color:black;
                text-align:justify;
            }
            .contenido1{
                margin:100px;
                color:black;
                text-align:justify;
                background-color:rgb(0,0,0,.1)
            }
            
            h1{
                color: #5DC1B9;  
            }
            img{
               width:100%;
               max-width:500px;
               display:block;
               margin:auto;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    INFO AQP
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">DOCUMENTOS</a>
                    <a href="https://laracasts.com">NOTICIAS HOY</a>
                    <a href="https://laravel-news.com">PREMIUM</a>
                    <a href="https://blog.laravel.com">CHAT</a>
                    <a href="https://nova.laravel.com">GRUPOS</a>
                    <a href="https://github.com/laravel/laravel">AYUDA</a>
                </div>
            </div>
        </div>
        <div class="almacenador">
        <div class="contenido">
        <h1>EEUU declara que Hong Kong ya no goza de la autonomía prometida por China</h1>
       <p>El secretario de Estado de EEUU, Mike Pompeo, ha hecho esta declaración ante el Congreso, en vísperas de la aplicación en el enclave por parte de China de una polémica ley de seguridad</p>
       <p>Estados Unidos ha llegado a la conclusión de que China ha violado el acuerdo alcanzado con Gran Bretaña en 1984 en virtud del cual el sistema económico y político de la ex colonia británica se mantendría hasta el año 2047. Así lo declaró ayer el secretario de Estado de EEUU, Mike Pompeo, al anunciar que "considerando los hechos sobre el terreno, ninguna persona puede afirmar razonablemente que Hong Kong mantiene un alto grado de autonomía en relación a China".</p> 
       <p>Por consiguiente, la ex colonia británica "no merece el tratamiento [que está recibiendo] de Estados Unidos", según las palabras de Pompeo. Eso abre la puerta a sanciones económicas y diplomáticas a los dirigentes de la República Popular China y, lo que es más relevante, al final del estatus privilegiado que Hong Kong y sus ciudadanos han tenido en Estados Unidos en los 22 años transcurridos desde que China recuperó la soberanía sobre el territorio tras un siglo y medio de colonización británica.</p>
        <img src="../images/not1.jpg" alt="">
        </div>

        <div class="contenido1">
        <h1>Estados Unidos prepara una acusación por narcotráfico contra Cilia Flores, mujer de Nicolás Maduro</h1>
       <p>Una de las bases del proceso es el caso de los 'narcosobrinos', que supuso el encarcelamiento en Florida de dos familiares de la pareja presidencial venezolana por intentar introducir 800 kilos de coca</p>
       <p>Estados Unidos ultima su acusación por narcotráfico y corrupción contra Cilia Flores, mujer de Nicolás Maduro, a quien el aparato de propaganda del régimen bolivariano califica como "primera combatiente revolucionaria". Así lo adelantó este miércoles la agencia Reuters, que también desveló que una de las bases del proceso es el famoso caso de los "narcosobrinos", que supuso el encarcelamiento en Florida de dos sobrinos de la pareja presidencial.</p> 
       <p>El testigo principal contra Flores es Yazenky Lamas, un antiguo guardaespaldas, quien asegura que la 'primera dama' estaba al tanto de las operaciones de narcotráfico de sus sobrinos, Efraín Campo Flores y Francisco Flores de Freitas, condenados a 18 años de cárcel por intentar introducir 800 kilos de coca en EEUU.</p>
       <img src="../images/not2.jpg" alt="">
        </div>

        <div class="contenido">
        <h1>La OMS declara al continente americano nuevo epicentro de la pandemia</h1>
       <p>EEUU y la región latinaomericana superan a Europa en número de casos, mientras que los países del segundo grupo lideran el número de infecciones diariasEEUU y la región latinaomericana superan a Europa en número de casos, mientras que los países del segundo grupo lideran el número de infecciones diarias</p>
       <p>Corría el mes de marzo cuando Italia y España comenzaban a batallar contra el coronavirus que había viajado de Asia para acabar convirtiendo a Europa en el epicentro de la pandemia declarada por la Organización Mundial de la Salud (OMS). EEUU y América Latina observaban con temor no fuera a ser que el virus atravesara el charco en busca de un nuevo territorio en el que propagarse. Donald Trump no tardó en suspender los vuelos procedentes del Viejo Continente, mientras sus vecinos del sur adoptaban medidas, líderes con más éxito que otros.</p> 
       <p>El citado organismo ha confirmado lo que se venía adivinando por las cifras de muertos por la Covid-19 y de infectados en los distintos países: el continente americano es el nuevo epicentro del virus.</p>
       <img src="../images/not3.jpg" alt="">
        </div>

        <div class="contenido1">
        <h1>Repunte de muertos en Italia tras tres jornadas por debajo de 100 fallecidos diarios</h1>
       <p>El país está en pleno proceso de desconfinamiento, que comenzó el pasado 4 de mayo, cuando se permitió la reanudación de algunas actividades</p>
       <p>Los casos de contagios por coronavirus subieron hoy en Italia a 584, frente a los 397 del día anterior, y también hubo más muertos, 117 las últimas 24 horas, hasta superar los 33.000 fallecidos, después de tres días por debajo de 100.</p> 
       <p>Casi dos tercios de los nuevos casos correspondieron a la región septentrional de Lombardía, la más afectada por la pandemia, y también allí se registraron 58 de los fallecidos del último día.</p>
       <img src="../images/not4.jpg" alt="">
        </div>
        </div>
    </body>
</html>
