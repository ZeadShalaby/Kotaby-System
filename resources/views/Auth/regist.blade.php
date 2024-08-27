@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4 mt-5">
                        <h3 class="text-center ">تسجيل الدخول</h3>
                        <form>
                            <div class="form-group">
                                <label for="name" class="text-right d-block">الاسم</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder=" محمد فتح الله عبدالحميد">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-right d-block">البريد الإلكتروني</label>
                                <input type="email" class="form-control" id="email" placeholder="mohamed@gmail.com">
                            </div>
                            <div class="text-right">
                                <a href="#" class="text-primary">نسيت كلمة المرور؟</a>
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3" id="login">تسجيل
                                الدخول</button>
                            <div class="text-center mt-3">أو</div>
                            <button type="button" class="btn btn-light btn-block mt-3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"
                                    alt="Google logo" style="width:20px; height:20px; margin-right:10px;">
                                التسجيل بالبريد الالكتروني
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
