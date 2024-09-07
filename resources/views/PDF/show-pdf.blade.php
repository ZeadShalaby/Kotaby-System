@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/user-dashboard.css') }}">

    <!--- setting users --->
    @component('components.setting-right')
    @endcomponent

    <object data="{{ asset('images/books/pdf/pdfs.pdf') }}" type="application/pdf" width="100%" height="600px">
        <p>PDF غير مدعوم على المتصفح الخاص بك. يمكنك <a href="{{ asset('images/books/pdf/pdf.pdf') }}">تحميل الملف هنا</a>.
        </p>
    </object>
@endsection
