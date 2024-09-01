@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">استعادة الحساب</h3>
                        <form class="rounded p-4" action="{{ route('users.forget.pass') }}" method="POST">
                            {{ csrf_field() }}

                            <!-- Email Input -->
                            <div class="form-group">
                                <label for="email" class="text-right d-block">البريد الإلكتروني</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="form-control w-100">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.loginindex') }}" class="text-primary">الرجوع الي الصفحه
                                    الرئيسية!</a>
                            </div>

                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100"
                                id="login">ارسال</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
