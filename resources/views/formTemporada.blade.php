@extends('navbar')
@section('form')
@parent

<div class="_2PURe u2Omg _1JVKc" style="opacity: 1;">
<div class="_2-zGO">
   <div data-automation="account-state-error-banner" class="jI8J8 _3_YIA" tabindex="0">
      <div class="_1xjXq">
         <div aria-hidden="true" class="E3e2X _1UAj4">
            <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
               <title>CBFC85DD-8509-4F77-94BB-2FC8137009FB</title>
               <g id="Symbols" fill="none" fill-rule="evenodd">
                  <g id="icon-/-adult-/-misc-/-alert" fill="#FFF">
                     <path d="M7.5 0a7.5 7.5 0 1 0 0 15 7.5 7.5 0 0 0 0-15zm1.201 11.1c0 .608-.468 1.076-1.1 1.076-.633 0-1.101-.468-1.101-1.075v-.026c0-.607.468-1.075 1.1-1.075.633 0 1.101.468 1.101 1.075v.026zM6.5 4.1a1.1 1.1 0 1 1 2.2 0v3.8a1.1 1.1 0 1 1-2.2 0V4.1z" id="Shape"></path>
                  </g>
               </g>
            </svg>
         </div>
         <div class="OboPp">Reactiva tu suscripción hoy y vuelve a tener acceso a las mejores series online.</div>
      </div>
      <div class="OGkKw"><a data-analytics="activation-notification" aria-labelledby="Reactivar" href="https://es.hboespana.com/my-account/subscription" class="_3Rqbb">Reactivar</a></div>
   </div>
</div>
<div class="pull-below-header">
   <div class="_1zJio">
      <div class="_35agv _3vT_z">
         <div class="thumbnail-image rTzfU" role="img" aria-label="Juego de tronos" tabindex="-1" style="opacity: 1; image-rendering: -webkit-optimize-contrast; background-image: url(&quot;https://production-static.hboespana.com/p/categoryThumbnails/c6d47193-b40a-4178-959c-ad39a107b90c.jpg&quot;);"></div>
      </div>
   </div>
   <!-- react-empty: 3438 -->
   <div class="GnMTX">
      <div class="_2KlrJ _8tZJP et3Mg">
         <div class="_1fzpM"><span class="_1KTsC _2R_OM" tabindex="0" aria-label="Calificación:" style="background-color: rgb(255, 0, 0); color: rgb(255, 255, 255);">18</span><span tabindex="0" class="azoai _2WKMQ">{{$serie -> genero}}</span></div>
         <div class="_2xwoD">
            <h1 tabindex="0" class="_1YoH- LD_c1">{{$serie -> nombre}}</h1>
         </div>
         <div class="_1N6rE"></div>
      </div>
      <div class="v9Wel _8tZJP et3Mg">
         <!-- react-empty: 3494 -->
         <nav class="FjPf5 UMVMU _311Q5">
            <div class="_3vAzj">
               <div class="_1lWob">
                  <ul class="_3d8o9">
                     <li  class="_1KV1E active"><a href="/show/series/{{$serie->id}}" class="cz0LH"><span class="_3iRv9">Sinopsis </span></a></li>
                     @foreach($temporadas as $temp)
                     <li class="_1KV1E"><a href="/show/series/{{$serie->id}}/temporada/{{$temp->temporada}}" class="cz0LH"><span class="_3iRv9">Temporada {{$temp->temporada}} </span></a></li>
                     @endforeach
                     <li class="ze722">
                        <div class="_2gScx" style="transform: translate(15px); width: 73px;"></div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      
      @if($cap)
      <div class="_1E3nf _8tZJP et3Mg">
         <div>
            <!-- react-empty: 5852 -->
            <ul class="_2JJQI Gmc0o">
            @foreach($cap as $c)
               <li class="_1hK_f _3-U5Z">
                  <figure class="_1OPcT _1vbnE _2JbnS">
                     <div class="preview _1v20p">
                        <div class="_3vT_z">
                           <div class="thumbnail-image rTzfU" role="img" aria-label="Juego de tronos" tabindex="-1" style="opacity: 1; background-image: url(&quot;https://production-static.hboespana.com/p/categoryThumbnails/6bb49cca-fd45-4404-9f23-6232fa7e0d0a.jpg&quot;); image-rendering: -webkit-optimize-contrast;"></div>
                        </div>
                        <div class="_1F2HS qK-aZ"></div>
                        <a  class="link-primary needsclick c_VCX" aria-hidden="true" tabindex="-1"></a>
                     </div>
                     <figcaption class="caption"><a  class="link-primary needsclick _17BGJ _1byuW _3bOBw" aria-label="Juego de tronos"><span class="_3HhQi _3icqI ea_Q3">{{$c[0] -> id}} {{$c[0] -> descripcion}}</span></a></figcaption>
                  </figure>
               </li>
               @endforeach
              </ul>
          </div>
          </div>
          @else
          <a href="">No hay capitulos disponibles</a>
          @endif
   </div>
</div>
</div>
<div class="_2SaYk"></div>
@endsection