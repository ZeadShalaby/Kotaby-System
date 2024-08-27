@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <div class="hero d-flex flex-column justify-content-center align-items-center text-center p-4">
        <h1 class="display-4">كتبي... سافر بكُتبك إلى عالم آخر.</h1>
        <input type="text" class="form-control my-3" placeholder="ابحث عن كتاب أو مؤلف أو قسم كتاب" />
        <button class="btn btn-warning">ابحث</button>
    </div>

    <!-- Books Section -->
    <section class="books py-5">
        <div class="container">
            <div class="row">
                <!-- Your book items will go here -->
            </div>
        </div>
    </section>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
