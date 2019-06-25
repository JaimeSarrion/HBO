@extends('navbar')

@section('form')
@parent
@if($cap)
    <div class="_2x_bv _8tZJP et3Mg">
        <div class="_2AaU-">
            <div>
                <!-- react-empty: 4804 -->
                <ul class="_2DTxb Gmc0o">
                @foreach($cap as $row)
                
                    <li class="_2dh55 _3-U5Z">
                    <figure class="_1OPcT _1vbnE _2JbnS" data-automation="watchlist-results-0">
                        <div class="preview _1v20p">
                            <div class="_3vT_z">
                                <div class="thumbnail-image rTzfU" role="img" aria-label="Gato escaldado…" tabindex="-1" style="opacity: 1; background-image: url(&quot;https://production-static.hboespana.com/p/3b1f95c-00bb45cca89/HBOE-AAWDO-000-PGM-01-01-2500-HD-169-SR-1920x1080-50000_6_6-14805718.jpg&quot;); image-rendering: -webkit-optimize-contrast;"></div>
                            </div>
                            <div class="_1F2HS qK-aZ">
                                <div class="_88XGK _3LXT0"></div>
                                <div class="AQT1f _2ZMRQ">
                                </div>
                                <div class="f0RPe">
                                <a href="https://es.hboespana.com/series/big-little-lies/season-1/episode-5/3b1f95c-00bb45cca89/play" class="-DM8T TKCzG" data-automation="play-button">
                                    <svg width="20" height="26" viewBox="0 0 20 26" xmlns="http://www.w3.org/2000/svg" aria-label="Haz clic para reproducir el contenido" class="_27Bb4">
                                        <title>A9499208-7E03-41C9-B521-6AF078D61FE2</title>
                                        <g id="icon-play-symbols" fill="none" fill-rule="evenodd">
                                            <g id="icon-play" transform="translate(-25 -20)">
                                            <path d="M45.5 22.106c0-1.106-.76-1.536-1.701-.958L26.197 31.956c-.94.577-.94 1.511 0 2.09L43.8 44.852c.94.577 1.701.157 1.701-.958V22.106z" id="icon-play-path-2" fill="currentColor" transform="matrix(-1 0 0 1 70.5 0)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                </div>
                            </div>
                            <a href="https://es.hboespana.com/series/big-little-lies/season-1/episode-5/3b1f95c-00bb45cca89" class="link-primary needsclick c_VCX" aria-hidden="true" tabindex="-1"></a>
                        </div>
                        <figcaption class="caption">
                            <a href="https://es.hboespana.com/series/big-little-lies/season-1/episode-5/3b1f95c-00bb45cca89" class="link-primary needsclick ac_ai _1hvmS _3bOBw" aria-label="Gato escaldado…">
                                <span class="_3HhQi _3icqI ea_Q3">{{$row[0] -> descripcion}}</span>
                                <div class="_34PHF _1N1Iu"><span>{{$row[0] -> orden }}</span></div>
                            </a>
                        </figcaption>
                    </figure>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    @else
    <a href="">No hay series disponibles</a>
    @endif
@endsection