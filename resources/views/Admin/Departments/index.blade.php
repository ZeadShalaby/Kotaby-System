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
                                <p class="book-card-text">
                                    {{ $item->getBooksCount($item->id) }} كتاب
                                    <i class="fas fa-book book-card-icon"></i>
                                </p>

                                <form action="{{ route('admin.dep.destroy', $item->id) }}" method="POST"
                                    style="margin-top: -23px;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: none;border: none">
                                        <a href="#" class="action-link">
                                            <i class="fas fa-trash"
                                                style="width: 20px; height: 20px; margin-left: 100px; color: rgb(168, 33, 62)">
                                            </i>
                                        </a>
                                    </button>
                                </form>

                                <a href="{{ route('admin.dep.edit', $item->id) }}" class="action-link">
                                    <i class="fas fa-edit"
                                        style="width: 20px; height: 20px; margin-left: 140px; margin-top: -27px;color: rgb(108, 175, 233)">
                                    </i>

                                </a>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
