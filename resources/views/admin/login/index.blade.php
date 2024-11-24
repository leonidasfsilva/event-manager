@extends('layouts.app')

@section('app-content')

    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h1">Sistema para Gestão de Eventos</h1>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        {{-- <h1 class="h2">Bem vindo de volta!</h1> --}}
                        <p class="lead">
                            Acesse sua conta para continuar
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-3">
                                <form action="{{ route('admin.signin') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"
                                               placeholder="Digite seu email"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Senha</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                               placeholder="Digite sua senha"/>
                                        <small>
                                            {{-- <a href='pages-reset-password.html'>Forgot password?</a> --}}
                                        </small>
                                    </div>
                                    <div>
                                        {{-- <div class="form-check align-items-center"> --}}
                                        {{--     <input id="customControlInline" type="checkbox" class="form-check-input" --}}
                                        {{--            value="remember-me" name="remember-me" checked> --}}
                                        {{--     <label class="form-check-label text-small" for="customControlInline"> --}}
                                        {{--         Lembrar de mim --}}
                                        {{--     </label> --}}
                                        {{-- </div> --}}
                                    </div>
                                    <div class="d-grid gap-2 mt-5">
                                        <button class='btn btn-lg btn-primary'>Entrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        Não tem uma conta? <a href='pages-sign-up.html'>Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
