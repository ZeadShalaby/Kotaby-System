@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-3 mt-5"> <!-- Padding reduced from 4 to 3 -->
                        <h3 class="text-center">@lang('kotaby.account_recovery') </h3>
                        <form class="rounded p-4" action="{{ route('users.forget.pass') }}" method="POST">
                            {{ csrf_field() }}

                            <!-- Email Input -->
                            <div class="form-group">
                                <label for="email" class="text-right d-block">@lang('kotaby.emails') </label>
                                <input type="email" class="form-control w-100 @error('email') is-invalid @enderror"
                                    @error('email') style="border: 2px solid red" @enderror id="email"
                                    placeholder="@lang('kotaby.email_placeholder')" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback d-block text-danger"
                                        style="font-weight: bold">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.loginindex') }}" class="text-primary">@lang('kotaby.return_to_home')</a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login">@lang('kotaby.submits')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
