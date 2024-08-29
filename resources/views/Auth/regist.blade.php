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
                            <!-- إضافة بادينج هنا بقيمة 2 -->
                            {{-- <div class="form-group">
                                <label for="name" class="text-right d-block">الاسم</label>
                                <input type="text" class="form-control w-100" id="name"
                                    placeholder="محمد فتح الله عبدالحميد" name="name" value={{ old('name') }}>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-right d-block">البريد الإلكتروني</label>
                                <input type="email" class="form-control w-100" id="email"
                                    placeholder="mohamed@gmail.com" name="email" value={{ old('email') }}>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-right d-block">كلمة المرور</label>
                                <input type="password" class="form-control w-100" placeholder="*****" id="password"
                                    name="password" value={{ old('password') }}>
                            </div> --}}
                            @component('components.edit-regist-input')
                            @endcomponent
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
