<html class="no-js" lang="">
   <head>
      <meta charset="utf-8">
      
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ver las Mejores Series Online | HBO España</title>
      <link rel="shortcut icon" href="/images/favicon.ico" />   
      <meta name="apple-itunes-app" content="app-id=571917630">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#000000">
      
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link rel="stylesheet" type="text/css" href="https://production-static.hboespana.com/v3/main.global.0d37f.css">
      <link rel="stylesheet" type="text/css" href="https://production-static.hboespana.com/v3/main.local.502cb.css">
      <link rel="stylesheet" property="stylesheet" href="https://es.hboespana.com/main.theme.css" data-theme="main">
      <link rel="prefetch" property="stylesheet" href="https://es.hboespana.com/kids.theme.css" data-theme="kids">
      <link is="is" rel="stylesheet" href="https://cloud.typography.com/7848756/7813372/css/fonts.css" as="style" onload="this.rel='stylesheet'">
      <noscript>&lt;link rel="stylesheet" href="https://cloud.typography.com/7848756/7813372/css/fonts.css"/&gt;</noscript>
      <link is="is" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" as="style" onload="this.rel='stylesheet'">
      <noscript>&lt;link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans"/&gt;</noscript>
      
      <meta name="google-site-verification" content="cg53QzYtOUkWaf6_MQ2k6UsKeznhXTqSpPxYLf8xBbg">
      <meta name="description" content="Tus Series favoritas con más de 5.000 episodios y una selección de las mejores Películas. Prueba un mes gratis hoy y accede a estrenos exclusivos.">
      <link href="https://en.hboespana.com/" rel="alternate" hreflang="en-US">
      <link href="https://es.hboespana.com/" rel="alternate" hreflang="es-ES">
</head>
   <body class="ready hide-focus-outlines">
      <div id="app" class="app">
         <div data-reactroot="" tabindex="-1" class="app-container">
            <div id="" class="page">
               <header class="_2xsDy">
                  <noscript></noscript>
                  <span></span><span></span>
                  <div class="iLiU9 et3Mg">
                     <a href="/" class="_1Orws" aria-label="Volver a Home" data-automation="header-home-button"><img src="https://production-static.hboespana.com/v3/images/tenant/hboe-main.svg"></a>
                     <nav class="_3jYHT">
                        <ul role="navigation" class="_1uxf-">
                        @if (Auth::guest())
                           <li class="aFEHE"><a href="/" data-automation="header-why-hbo-link" data-analytics="header-why-hbo" class="_1RJz_ _3C5GD link-primary active">Why HBO?</a></li>
                           <li class="aFEHE"><a href="/show/series" data-automation="header-family-link" data-analytics="header-family" class="_1RJz_ _3C5GD link-primary">Series</a></li>
                           @else
                           <li class="aFEHE"><a href="/" data-automation="header-unauthed-home" data-analytics="header-unauthed-home" class="_1RJz_ _3C5GD link-primary">Home</a></li>
                           <li class="aFEHE"><a href="/show/series" data-automation="header-family-link" data-analytics="header-family" class="_1RJz_ _3C5GD link-primary">Series</a></li>
                           <li class="aFEHE"><a href="/show/milista" data-automation="header-family-link" data-analytics="header-family" class="_1RJz_ _3C5GD link-primary">Mi Lista</a></li>
                        @endif
                        </ul>
                     </nav>
                     @if (Auth::guest())
                     <a href={{url('/registro')}} data-analytics="free-trial" data-automation="header-free-trial-button" class="button-outline-pill _2V4CD _3C5GD">EMPEZAR</a>
                     <a href={{url('/log-in')}} data-automation="header-sign-in-button" class="link-primary _27mrp z38cv _1RJz_ _3C5GD">Iniciar sesión</a>
                     @else
                     <a  data-automation="header-sign-in-button" class="link-primary _27mrp z38cv _1RJz_ _3C5GD">{{ Auth::user()->name }}</a>
                     @if(Auth::user()->admin)
                     <a href="/administrar" data-automation="header-sign-in-button" class="link-primary _27mrp z38cv _1RJz_ _3C5GD">Administrar</a>
                     @endif
                     <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-analytics="free-trial" data-automation="header-free-trial-button" class="button-outline-pill _2V4CD _3C5GD">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                     
                        @endif
                  </div>
               </header>
               <div class="_2PURe u2Omg _1JVKc" style="opacity: 1;">
                  <noscript></noscript>
                  @section('form')

                     @show
                  
               </div>
               <div class="_2SaYk"></div>
               <footer class="V2V8_" style="opacity: 1; margin-bottom: 0px;">
                  <div class="_1bAAf et3Mg">
                     <div class="_3aUJI">
                     @if (Auth::guest())
                        <ul class="_7sjb0"><a href="/registro" class="M7xT7">Cómo ver HBO España</a>
                        @endif
                        <a class="M7xT7">Sobre nosotros</a><a  class="M7xT7">FAQs</a><a  class="M7xT7">Contacto</a><a  class="M7xT7">Prensa</a><a  class="M7xT7">Términos y Condiciones</a><a  class="M7xT7">Política de Datos Personales</a>
                        @if (Auth::guest())
                        <a class="button-blue _2Fv7K" href="/registro" data-analytics="free-trial">CÓMO VER HBO ESPAÑA</a></ul>
                        @endif
                        <ul class="_3UCeg"><a href="https://www.youtube.com/channel/UCBZY_8jva8y73h9cXIDEHHg" target="_blank" rel="noopener" title="Youtube" aria-label="Haz click para seguir HBO en Youtube" class="XDrGr"><img src="https://v3-static.hbonordic.com/stream/v3/1a528543-ec19-4ebc-a28c-b5a173c89138.png" class="cTytv"></a><a href="https://www.facebook.com/HBOEspana/" target="_blank" rel="noopener" title="Facebook" aria-label="Haz click para seguir HBO en Facebook" class="XDrGr"><img src="https://v3-static.hbonordic.com/stream/v3/46556d94-be02-4f5c-ac81-26c002ac492a.png" class="cTytv"></a><a href="https://twitter.com/hbo_es" target="_blank" rel="noopener" title="Twitter" aria-label="Haz click para seguir HBO en Twitter" class="XDrGr"><img src="https://v3-static.hbonordic.com/stream/v3/b0faba78-0ef4-4971-a080-2afd2a225aaf.png" class="cTytv"></a><a href="https://www.hbostore.eu" target="_blank" rel="noopener" title="E-Store" aria-label="Haz click para seguir HBO en E-Store" class="XDrGr"><img src="https://v3-static.hbonordic.com/stream/v3/a472b08d-a0a6-4296-9a39-219fd2ba164a.png" class="cTytv"></a></ul>
                     </div>
                     
                     
                  </div>
                  
               </footer>
               <span class="_1NvEM"></span>
            </div>
            <div><span></span><span></span></div>
            <!-- react-empty: 133 -->
            <div class="j9Lhn _2hexk _1x4HU">
               <div class="Oc8OM"></div>
            </div>
         </div>
      </div>
      </iframe>
      <div id="ads"></div>
   </body>
</html>