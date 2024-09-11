@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/add-book.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- setting users --->
    <x-setting-right />

    <div class="container form-container">
        <h2 class="text-center mb-4" id="title">أنشر كتابك على مكتبة كتبي</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-add-edit-book :categories="$categories" :book="$book ?? ''" />

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="bookCover" class="form-label text-right d-block">Book Cover</label>
                    <div class="custom-file-upload">
                        <i id="bookCoverIcon" class="fas fa-upload"></i>
                        <span id="bookCoverText">اختر غلاف الكتاب</span>
                        <input type="file" id="bookCover" name="bookCover" accept="image/*"
                            onchange="updateCoverIcon('bookCover')">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="bookFile" class="form-label text-right d-block">Upload Book</label>
                    <div class="custom-file-upload">
                        <i id="bookFileIcon" class="fas fa-upload"></i>
                        <span id="bookFileText">اختر ملف الكتاب</span>
                        <input type="file" id="bookFile" name="bookFile" accept=".pdf,.ppt,.doc,.docx"
                            onchange="updateCoverIcon('bookFile')">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary share">حفظ كتابك</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/add-book.js') }}"></script>
@endsection
