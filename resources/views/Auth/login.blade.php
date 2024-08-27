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

                            <div class="d-flex justify-content-center align-items-center" id="social">
                                <a href="#" class="item">
                                    <img src="{{ asset('images/img/google.png') }}" alt="Google logo"
                                        class="img-fluid me-4">
                                </a>
                                <a href="#" class="item">
                                    <img src="{{ asset('images/img/github.png') }}" alt="GitHub logo"
                                        class="img-fluid me-4">
                                </a>
                            </div>





                        </form>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
