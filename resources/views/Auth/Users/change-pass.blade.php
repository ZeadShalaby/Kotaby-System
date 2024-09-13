@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-3 mt-5">
                        <h3 class="text-center">@lang('kotaby.account_recovery')</h3>
                        <form class="rounded p-4" action="{{ route('users.edit.pass', $user->id) }}" method="POST"
                            onsubmit="return validatePasswords()">
                            @csrf
                            @method('PUT')

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="text-right d-block">@lang('kotaby.password')</label>
                                <input type="password" class="form-control w-100" placeholder="*****" id="password"
                                    name="password" value="{{ old('password') }}">
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="password_confirmation" class="text-right d-block">@lang('kotaby.confirm_password')</label>
                                <input type="password" class="form-control w-100" placeholder="*****"
                                    id="password_confirmation" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}">
                                <small id="passwordError" class="text-danger d-none">@lang('kotaby.password_mismatch')</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.loginindex') }}" class="text-primary">@lang('kotaby.return_home')</a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login">@lang('kotaby.update')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/change-pass.js') }}"></script>

    <style>
        .is-invalid {
            border-color: red;
        }
    </style>
@endsection
