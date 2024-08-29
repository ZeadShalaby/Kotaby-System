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
                    <a class="nav-link" href="{{ view('Users.best') }}">الافضل</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="authorsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الأقسام
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="authorsDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">المؤلفين</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bookindex') }}" class="btn custom-button my-2 my-sm-0"
                        style="border: 2px solid #1B3764" type="button">
                        <img src="{{ asset('images/img/open-book.png') }}" style="width: 20px">
                        انشر كتابك
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
