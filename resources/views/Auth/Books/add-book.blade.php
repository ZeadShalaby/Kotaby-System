@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/add-book.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- setting users --->
    @component('components.setting-right')
    @endcomponent

    <div class="container form-container">
        <h2 class="text-center mb-4" id="title">@lang('kotaby.text-top')</h2>
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <x-add-edit-book :categories="$categories" :book="$book ?? ''" />

            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="bookCover" class="form-label text-right d-block">@lang('kotaby.upload') </label>
                    <div class="custom-file-upload">
                        <i id="bookCoverIcon" class="fas fa-upload"></i>
                        <span id="bookCoverText"> @lang('kotaby.upload')</span>
                        <input type="file" id="bookCover" name="bookCover" accept="image/*"
                            onchange="updateCoverIcon('bookCover')">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="bookFile" class="form-label text-right d-block">@lang('kotaby.select')</label>
                    <div class="custom-file-upload">
                        <i id="bookFileIcon" class="fas fa-upload"></i>
                        <span id="bookFileText">@lang('kotaby.select')</span>
                        <input type="file" id="bookFile" name="bookFile" accept=".pdf,.ppt,.doc,.docx"
                            onchange="updateCoverIcon('bookFile')">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary share"> @lang('kotaby.sharebook')</button>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/add-book.js') }}"></script>
@endsection
