    <!--  Warn alert -->
    @if (Session::has('warn'))
        <div class="alert-warning">
            {{ Session::get('warn') }}
        </div>
        </div>
    @endif
    <!-- success alert -->
    @if (Session::has('success'))
        <div class="alert-success">
            {{ Session::get('success') }}
        </div>
        </div>
    @endif
    <!-- error alert -->
    @if (Session::has('error'))
        <div class="alert-error">
            {{ Session::get('error') }}
        </div>
        </div>
    @endif

    <!-- delete alert -->
    @if (Session::has('delete'))
        <div class="alert-delete">
            {{ Session::get('delete') }}
        </div>
        </div>
    @endif
