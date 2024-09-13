@extends('layouts.dashboard.app-admin')
@section('content-admin')
    <!----- content ----->

    <link rel="stylesheet" href="{{ asset('css/admin-dep.css') }}">

    <div class="container">
        <div class="card-grid">
            @foreach ($departments as $item)
                <div class="card">
                    <a href="{{ route('admin.dep.show', $item->id) }}" style="text-decoration: none;">
                        <div class="book-card">
                            <img src="{{ asset($item->media_one->media) }}" alt="{{ $item->media_one->media }}">
                            <div>

                                <h5 class="book-card-title">{{ $item->name }}</h5>
                                <a href="{{ route('admin.dep.book.show', $item->id) }}" style="text-decoration: none">
                                    <p class="book-card-text">
                                        {{ $item->getBooksCount($item->id) }} @lang('kotaby.books')
                                        <i class="fas fa-book book-card-icon"></i>
                                    </p>
                                </a>
                                <div class="action-icons" style="margin-top: -25px">
                                    <!-- Delete Form -->
                                    <form action="{{ route('admin.dep.destroy', $item->id) }}" method="POST"
                                        style="display: inline;margin-top: -25px;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; cursor: pointer;">
                                            <i class="fas fa-trash"
                                                style=" height: 20px; margin-left: 100px; color: rgb(168, 33, 62);font-size: 17px"></i>
                                        </button>
                                    </form>

                                    <!-- Edit Link -->
                                    <a href="{{ route('admin.dep.edit', $item->id) }}" class="action-link"
                                        style="width: 20px; height: 20px; margin-left: 140px; margin-top: -22px;color: rgb(108, 175, 233)">
                                        <i class="fas fa-edit" style="color: rgb(108, 175, 233);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
