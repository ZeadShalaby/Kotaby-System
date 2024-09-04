@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/book-show.css') }}">

    <body>
        <div class="container mt-5">
            <div class="card mb-4" style="max-width: 1110px; margin: 20px auto;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-center"
                                style="font-family: 'Almarai', sans-serif; color: #1C2A39; font-weight: 700;">
                                كتاب أفول شمس المعارف الكبرى
                            </h5>
                            <p class="card-text text-center text-warning">العلوم الاسلامية</p>
                            <ul class="list-unstyled">
                                <li><strong>اللغة:</strong> اللغة العربية</li>
                                <li><strong>تاريخ الإصدار:</strong> 01 يناير 2018</li>
                                <li><strong>الصفحات:</strong> 3416</li>
                                <li><strong>حجم الملف:</strong> 148.13 ميجا بايت</li>
                                <li><strong>نوع الملف:</strong> PDF</li>
                                <li><strong>التحميلات:</strong> 148313</li>
                            </ul>
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <span>(124) مراجعات</span>
                                <span class="mx-3">|</span>
                                <span>(124) تقييم</span>
                                <span class="text-warning me-2">★ ★ ★ ★ ☆</span>
                            </div>
                            <!--- star مراجعاتي --->
                            @component('components.star-commit')
                            @endcomponent
                            <div class="btn-container">
                                <button class="btn btn-primary">تصفح الكتاب</button>
                                <button class="btn btn-secondary">تحميل الكتاب</button>

                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                                    data-bs-target="#rateModal">أضف
                                    تقييم</button>
                                <button class="btn btn-outline-primary">حفظ</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/books/img/book1.png') }}" class="img-fluid book-image" alt="Book Cover">
                    </div>
                </div>
            </div>
        </div>








        <div class="container mt-5">
            <div class="summary-section">
                <h5 class="summary-title">نبذة مختصرة عن الكتاب</h5>
                <p class="summary-text">
                    رواية الشيطان يبكي بقلم أحمد خالد مصطفى .. ليس مهما أن أرحب بكم. أنا شيخ متعصب، من النوع الذي لا يروق
                    لأحد .. وأنتم مجموعة شباب فضوليين من النوع الذي لا يروق لي استخدامهما فيما بينهم. سأتيح لكم الفرصة
                    لمعرفة أكثر .. لكن ليس مني لأنني مصاب بداء المال السريع .. <a href="#">اقرأ المزيد</a>
                </p>
                <div class="share-section">
                    <p class="share-text">شارك الكتاب مع الأصدقاء</p>
                    <div class="share-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="reviews-section">
                <h5 class="reviews-title">التقييمات</h5>

                <!-- Review 1 -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="name">حسين الدهامي</div>
                        <div class="date">2022-10-24</div>
                    </div>
                    <div class="review-body">
                        رواية الشيطان يبكي بقلم أحمد خالد مصطفى .. ليس مهما أن أرحب بكم. أنا شيخ متعصب، من النوع الذي لا
                        يروق لأحد. أنا شيخ متعصب من النوع الذي لا يروق...
                    </div>
                    <div class="review-footer">
                        <div class="rating">
                            ★★★★★
                        </div>
                        <div class="reviews-count">
                            (124 مراجعات)
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="name">حسين الدهامي</div>
                        <div class="date">2022-10-24</div>
                    </div>
                    <div class="review-body">
                        رواية الشيطان يبكي بقلم أحمد خالد مصطفى .. ليس مهما أن أرحب بكم. أنا شيخ متعصب، من النوع الذي لا
                        يروق لأحد. أنا شيخ متعصب من النوع الذي لا يروق...
                    </div>
                    <div class="review-footer">
                        <div class="rating">
                            ★★★★☆
                        </div>
                        <div class="reviews-count">
                            (124 مراجعات)
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-card">
                    <div class="review-header">
                        <div class="name">حسين الدهامي</div>
                        <div class="date">2022-10-24</div>
                    </div>
                    <div class="review-body">
                        رواية الشيطان يبكي بقلم أحمد خالد مصطفى .. ليس مهما أن أرحب بكم. أنا شيخ متعصب، من النوع الذي لا
                        يروق لأحد. أنا شيخ متعصب من النوع الذي لا يروق...
                    </div>
                    <div class="review-footer">
                        <div class="rating">
                            ★★★☆☆
                        </div>
                        <div class="reviews-count">
                            (124 مراجعات)
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
