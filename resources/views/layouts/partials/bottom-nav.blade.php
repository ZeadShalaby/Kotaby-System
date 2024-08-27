<nav class="navbar navbar-expand-lg sub-nav navbar-light bg-light" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="container d-flex flex-column ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto" style="margin-right:50px; "> <!-- Align to the right for RTL -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homeindex') }}" id="active">الرئيسية</a>
                    <div class="cricle"></div>
                </li>
                <li class="nav-item" id="nav-item">
                    <a class="nav-link" href="#">الافضل</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="authorsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الأقسام
                    </a>
                    <div class="dropdown-menu" aria-labelledby="authorsDropdown">
                        <a class="dropdown-item" href="#">مؤلف 1</a>
                        <a class="dropdown-item" href="#">مؤلف 2</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">المؤلفين</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn custom-button my-2 my-sm-0" style="border: 2px solid #1B3764"
                        type="button">
                        <img src="{{ asset('images/img/open-book.png') }}" style="width: 20px">
                        انشر كتابك
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
