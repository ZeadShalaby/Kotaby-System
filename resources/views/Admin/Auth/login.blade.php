@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">تسجيل الدخول</h3>
                        <form class="rounded p-4" action="{{ route('admin.login') }}" method="POST">
                            {{ csrf_field() }}

                            <!--- input login --->
                            @component('components.input-form')
                            @endcomponent

                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-primary">نسيت كلمة المرور ؟</a>
                                <a href="{{ route('users.loginindex') }}" class="text-primary"> التسجيل ك مستخدم!</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100" id="login">تسجيل
                                الدخول</button>
                            <div class="text-center mt-3">مرحبا بل المسؤلين</div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
