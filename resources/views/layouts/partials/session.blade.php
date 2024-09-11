    <!--  Warn alert -->
    @if (Session::has('warn'))
        <div class="alert-warning">
            {{ Session::get('warn') }}
        </div>
    @endif
    <!-- success alert -->
    @if (Session::has('success'))
        <div class="alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <!-- error alert -->
    @if (Session::has('error'))
        <div class="alert-error">
            {{ Session::get('error') }}
        </div>
    @endif
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert-error">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}
    {{-- @error('author_name')
        @dd($errors)
        <span class="text text-danger">{{ $errors }}</span>
    @enderror --}}
    <!-- delete alert -->
    @if (Session::has('delete'))
        <div class="alert-delete">
            {{ Session::get('delete') }}
        </div>
        </div>
    @endif
