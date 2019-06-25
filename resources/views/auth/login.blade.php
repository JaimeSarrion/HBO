@extends('navbar')
@section('form')
@parent
    <div>
    <div class="_1EDbx _2maTc _3JCtE et3Mg">
        <h1 data-automation="sign-in-page-title" aria-label="Iniciar sesión" class="_2qbme LD_c1">Iniciar sesión</h1>
    </div>
    <div class="_26E91 _2maTc _3JCtE et3Mg">
        <div class="_2jU8a _372a8">
            <div class="_1gSh- _2qLTd">
                <div class="_3ZkRQ">
                <div data-automation="sign-in-product-box" class="_3tSGC">
                    <div data-automation="product-box-image" class="grid-content shrink no-gutters _2D2ii" style="background-image: url(&quot;https://v3-static.hbonordic.com/stream/v3/aeebe946-9159-4e88-9665-8fca39482333.jpeg&quot;); image-rendering: -webkit-optimize-contrast;"></div>
                    <div data-automation="product-box-copy" class="grid-content _2oW7D _1ios8">
                        <div class="A6nEz">
                            <p tabindex="0">
                            <p>Suscríbete   a HBO España y disfruta de estrenos exclusivos de tus series favoritas con   más de 5.000 episodios y una selección del mejor cine. </p>
                            </p>
                        </div>
                        <div class="jMAZ1" tabindex="0">
                            <ul>
                            <li>Sólo 7,99€ al mes.</li>
                            <li>Sin Compromiso: cancela cuando quieras.</li>
                            <li>2 Reproducciones Simultáneas.</li>
                            <li>Todas las temporadas. Todos los Episodios. </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="OEglh">
                <p>¿No tienes una cuenta?</p>
                <a data-automation="sign-in-free-trial-link" data-analytics="free-trial" href="/registro" class="button-outline-pill caps">EMPEZAR</a>
                </div>
            </div>
            <div class="_1w3i1 _2qLTd">
                <form class="Im_hJ" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div aria-label="Correo electrónico" class="form-label grid-order-1">Correo electrónico</div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input-text fit grid-order-2" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="form-label">Contraseña</div>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input-text fit" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>
                
                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label class="_2Q3eY WT7c1">
                                        <input type="checkbox" name="remember" class="_1-Pgq" {{ old('remember') ? 'checked' : '' }}> 
                                        <div  class="_38Q-q mUWT7"><span>Recordar</span></div>
                                    </label>
                                </div>
                            </div>
                </div>

                
                <div class="form-input-group cqZL-">
                    <div class="pulse-button _3ViRN" data-phase="default">
                        <button class="button-blue-anim fit c-zS9" tabindex="0" data-automation="sign-in-submit-button" data-analytics="sign-in">Iniciar sesión</button>
                        <div class="_2jF2S">
                            <div data-automation="loading-pulse" class="_2YhsZ">
                            <div class="bHfZt"></div>
                            <div class="bHfZt"></div>
                            <div class="bHfZt"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-center"><a href="/password/reset" id="sign-in-forgot-password-link" data-automation="sign-in-forgot-password-link" class="_1g7x2 _1Ojdv">Olvidé mi contraseña</a></div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection