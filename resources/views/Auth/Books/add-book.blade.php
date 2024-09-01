@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/add-book.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- setting users --->
    @component('components.setting-right')
    @endcomponent
    <div class="container form-container">
        <h2 class="text-center mb-4" id="title">أنشر كتابك على مكتبة كتبي</h2>
        <form>
            <div class="location-option text-left d-block">
                <button type="button" id="useLocation" class="btn-icon">
                    <i class="fas fa-location-arrow"></i>
                </button>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="fullName" class="form-label text-right d-block" id="title">*إسمك كاملاً </label>
                    <input type="text" class="form-control" id="fullName" placeholder="إسمك كاملاً">
                </div>
                <div class="col-md-6">

                    <label for="bookTitles" class="form-label text-right d-block">*عنوان الكتاب </label>
                    <input type="text" class="form-control" id="bookTitl" placeholder="عنوان الكتاب">


                </div>

            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="bookCategory" class="form-label text-right d-block">*قسم الكتاب </label>
                    <input type="text" class="form-control" id="bookCategory" placeholder="قسم الكتاب">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="bookTitle" class="form-label text-right d-block">*مكان النشر </label>
                <input type="text" class="form-control" id="bookTitle" placeholder="عنوان الكتاب">
                <br>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <label for="bookDescription" class="form-label text-right d-block">*وصف عن الكتاب </label>
                    <textarea class="form-control" id="bookDescription" rows="3" placeholder="وصف عن الكتاب"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="bookCover" class="form-label text-right d-block">غلاف الكتاب</label>
                    <div class="custom-file-upload">
                        <i class="fas fa-upload"></i>
                        <span>اختر غلاف الكتاب</span>
                        <input type="file" id="bookCover">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="bookFile" class="form-label text-right d-block">رفع الكتاب</label>
                    <div class="custom-file-upload">
                        <i class="fas fa-upload"></i>
                        <span>اختر ملف الكتاب</span>
                        <input type="file" id="bookFile">
                    </div>
                </div>
            </div>

            <div class="form-text mb-4">
                <ul>
                    <li>أن يكون العمل من إنتاج خاص وليس منقول.</li>
                    <li>أن يكون العمل خالياً من استخدام أي ألفاظ أو صور مسيئة.</li>
                    <li>ألا يشمل ما يحرّض على كراهية أي طائفة من طوائف المجتمع.</li>
                    <li>أن يكون العمل خالياً من الأخطاء الإملائية بقدر ما يمكن.</li>
                </ul>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary share">أنشر كتابك</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/add-book.js') }}"></script>
@endsection
