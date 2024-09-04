@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">
    <!--- setting users --->
    @component('components.setting-right')
    @endcomponent
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">

                <div class="profile-container bg-light text-center card p-4 mt-5">

                    <h3 class="mb-4">تعديل الحساب</h3>
                    <form class="rounded p-4" action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <img src="{{ asset($user->media_one->media) }}" alt="Profile Image" class="profile-image">

                        <!--- input Edit --->
                        @component('components.edit-regist-input', ['user' => $user])
                        @endcomponent

                        <!-- about textarea -->
                        <div class="form-group">
                            <label for="about" class="text-right d-block">نبذة عن الكاتب </label>
                            <textarea
                                class="dark:text-white text-gray-900 placeholder-gray-400 w-full bg-transparent border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 resize-none w-100 p-2 opacity-70 transition-opacity duration-300 ease-in-out"
                                name="about" rows="4" placeholder="اكتب نبذة عنك هنا...">{{ $user->about }}</textarea>
                        </div>


                        <button type="submit" class="btn save-btn btn-block">حفظ التغييرات</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent
@endsection
