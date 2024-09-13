@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-3 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">@lang('kotaby.Login')</h3> <!-- Translatable string -->
                        <form class="rounded p-4" action="{{ route('admin.login') }}" method="POST">
                            {{ csrf_field() }}

                            <!--- input login --->
                            <x-input-form />

                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-primary">@lang('kotaby.Forgot password')</a>
                                <a href="{{ route('users.loginindex') }}" class="text-primary">@lang('kotaby.Register user')</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100" id="login">
                                @lang('kotaby.Login')
                            </button>
                            <div class="text-center mt-3">@lang('kotaby.admin section')</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
