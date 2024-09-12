@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- Reduce padding here from 4 to 3 -->
                        <h3 class="text-center">@lang('kotaby.login')</h3>
                        <form class="rounded p-4" action="{{ route('users.login') }}" method="POST">
                            {{ csrf_field() }}

                            <!--- input login --->
                            <x-input-form />

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.forgetpass') }}" class="text-primary">@lang('kotaby.forgot_password')</a>
                                <a href="{{ route('admin.loginindex') }}" class="text-primary">@lang('kotaby.login_as_admin')</a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login">@lang('kotaby.login')</button>
                            <div class="text-center mt-3">@lang('kotaby.or')</div>

                            <div class="d-flex justify-content-center align-items-center" id="social">
                                <a href="{{ route('social-service', 'google') }}" class="item">
                                    <img src="{{ asset('images/img/google.png') }}" alt="@lang('kotaby.google_logo_alt')"
                                        class="img-fluid me-4">
                                </a>
                                <a href="{{ route('social-service', 'github') }}" class="item">
                                    <img src="{{ asset('images/img/github.png') }}" alt="@lang('kotaby.github_logo_alt')"
                                        class="img-fluid me-4">
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
