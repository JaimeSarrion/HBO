@extends('navbar')
@section('form')
@parent

<div tabindex="0">
<!-- react-empty: 5845 -->
<div class="_1q4yD _3fHf2 _8tZJP et3Mg">
   <div class="_8in9F">
      <div id="shelf-detail-header" class="_3rdfL" tabindex="0">
         <h1 class="j1e32 LD_c1 _3M_lL">Series</h1>
      </div>
   </div>
</div>
@if($data)
<div class="_1E3nf _8tZJP et3Mg">
   <div>
      <!-- react-empty: 5852 -->
      <ul class="_2JJQI Gmc0o">
      @foreach($data as $row)
         <li class="_1hK_f _3-U5Z">
            <figure class="_1OPcT _1vbnE _2JbnS">
               <div class="preview _1v20p">
                  <div class="_3vT_z">
                     <div class="thumbnail-image rTzfU" role="img" aria-label="Juego de tronos" tabindex="-1" style="opacity: 1; background-image: url(&quot;{{$row -> imagen}}&quot;); image-rendering: -webkit-optimize-contrast;"></div>
                  </div>
                  <div class="_1F2HS qK-aZ"></div>
                  <a href="/show/series/{{$row -> id}}" class="link-primary needsclick c_VCX" aria-hidden="true" tabindex="-1"></a>
               </div>
               <figcaption class="caption"><a href="/show/series/{{$row -> id}}" class="link-primary needsclick _17BGJ _1byuW _3bOBw" aria-label="Juego de tronos"><span class="_3HhQi _3icqI ea_Q3">{{$row -> nombre}}</span></a></figcaption>
            </figure>
         </li>
         @endforeach
        </ul>
    </div>
    </div>
    @else
    <a href="">No hay series disponibles</a>
    @endif
@endsection