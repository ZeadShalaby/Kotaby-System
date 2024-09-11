<link rel="stylesheet" href="{{ asset('css/deopdown-menu.css') }}">

<div class="dropdown" style="display: {{ $book->user_id === auth()->id() ? 'inline' : 'none' }}">

    @if ($book->user_id === auth()->id())
        <div id="myDropdown{{ $book->id }}" class="dropdown-content" style="margin-left: 50px">
            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: none; border: none;margin-left: 50px">
                    <a href="#">
                        <img src="{{ asset('images/img/trash.png') }}" alt="Trash">
                    </a>
                </button>
            </form>
            <div style="margin-left: 10px;margin-top: -24.7px;color: #1B3764">
                <a href="{{ route('books.edit', $book->id) }}">
                    <img src="{{ asset('images/img/edit.png') }}" alt="Edit Tweet">
                </a>
            </div>
        </div>
    @endif
</div>
