@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <div class="card p-4 mt-5"> <!-- تقليل البادينج هنا من 4 إلى 3 -->
                        <h3 class="text-center">انشاء حساب جديد</h3>
                        <form class="rounded p-4" action="{{ route('users.register') }}" method="POST">
                            {{ csrf_field() }}

                            <!---regist input--->
                            <x-edit-regist-input />

                            <div class="text-right">
                                <a href="{{ route('users.loginindex') }}" class="text-primary">لديك حساب بلفعل؟</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3 w-100" id="login">انشاء
                                حساب</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
