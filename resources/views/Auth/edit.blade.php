@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">

                <div class="profile-container bg-light text-center card p-4 mt-5">

                    <h3 class="mb-4">تعديل الحساب</h3>
                    <form class="rounded p-4" action="{{ route('users.login') }}" method="POST">
                        {{ csrf_field() }}

                        <img src="{{ asset($user->media_one->media) }}" alt="Profile Image" class="profile-image">

                        <!--- input Edit --->
                        @component('components.edit-regist-input', ['user' => $user])
                        @endcomponent

                        <button type="button" class="btn save-btn btn-block">حفظ التغييرات</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
@endsection
