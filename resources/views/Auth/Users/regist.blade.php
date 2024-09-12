@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- Reduce padding here from 4 to 3 -->
                        <h3 class="text-center">@lang('kotaby.create_account')</h3>
                        <form class="rounded p-4" action="{{ route('users.register') }}" method="POST">
                            {{ csrf_field() }}

                            <!---regist input--->
                            <x-edit-regist-input />

                            <div class="text-right">
                                <a href="{{ route('users.loginindex') }}" class="text-primary">@lang('kotaby.already_have_account')</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login">@lang('kotaby.create_account_button')</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
