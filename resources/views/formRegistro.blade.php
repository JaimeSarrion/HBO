@extends('navbar')

@section('form')
@parent
    <div>
    <div class="_1EDbx _2maTc _3JCtE et3Mg">
        <!-- react-empty: 17 -->
        <h1 class="_3UNBY LD_c1">Crear Cuenta</h1>
        <h3 class="content-center EXM7C _2WKMQ">
        </h3>
    </div>
    <!-- react-text: 23 --><!-- /react-text -->
    <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
        <div class="_26E91 _2maTc _3JCtE et3Mg">
            <div class="_1lzZD _372a8">
                <div class="_3EOJV _2qLTd">
                <div data-automation="sign-upproduct-box" class="_2jJdD _3tSGC">
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
                <fieldset class="_3EOJV _2qLTd">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div  aria-label="Nombre" class="form-label grid-order-1">Nombre</div>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input-text fit grid-order-2" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div  aria-label="Correo electrónico" class="form-label grid-order-1">Correo electrónico</div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input-text fit grid-order-2" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                </div>
                
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="form-label" >Contraseña (Más de 6 caracteres)</div>

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
                    <div class="form-label" >Confirmar contraseña</div>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input-text fit" name="password_confirmation" required>
                            </div>
                </div>
                </fieldset>
            </div>
        </div>
        <div class="_1B7Th _2maTc _3JCtE et3Mg">
            <div class="_28kXB">
                <div class="pulse-button _3ViRN" data-phase="default">
                <button type="submit" class="button-blue-anim  c-zS9" data-automation="sign-up-button" data-analytics="create-account">Continuar</button>
                <div class="_2jF2S">
                    <div data-automation="loading-pulse" class="_2YhsZ">
                        <div class="bHfZt"></div>
                        <div class="bHfZt"></div>
                        <div class="bHfZt"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection