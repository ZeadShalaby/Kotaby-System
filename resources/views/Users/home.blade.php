@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <!-- Hero Section -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center p-4">
        <h1 class="display-4">كتبي... سافر بكُتبك إلى عالم آخر.</h1>
        <div class="d-flex">
            <input type="text" class="form-control custom-input me-2" placeholder="ابحث عن كتاب أو مؤلف أو قسم كتاب"
                style="width: 632px;" />
            <button class="btn btn-warning">ابحث</button>
        </div>
    </div>

    <!--- input Edit --->
    @component('components.setting-right')
    @endcomponent

    <!-- Books Section -->
    <section class="books py-5">
        <div class="container">
            <div class="row">
                <!-- Your book items will go here -->
            </div>
        </div>
    </section>
@endsection
