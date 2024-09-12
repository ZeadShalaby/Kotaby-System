<div class="col-lg-3 col-md-6 mb-4">
    <div class="card text-center shadow-sm">
        <a href="{{ isset($route) ? route($route) : '#' }}" style="text-decoration: none">
            <div class="card-body">
                <h5 class="card-title">{{ $titles }}</h5>
                <p class="card-text">{{ $method }} {{ $title }} <i
                        class="fas fa-{{ $icon }} icon-margin"></i>
                </p>
            </div>
        </a>
    </div>
</div>
