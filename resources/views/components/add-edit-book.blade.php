<!-- Form Group Container for all fields in one div -->
<div class="row mb-3">
    <div class="d-flex flex-wrap w-100">
        <!-- Author Name -->
        <div class="col-md-6 mb-3">
            <label for="author_name" class="form-label text-right d-block">@lang('kotaby.author_name')</label>
            <input type="text" class="form-control {{ $errors->has('author_name') ? 'is-invalid' : '' }}"
                id="author_name" placeholder="@lang('kotaby.author_name')" name="author_name"
                value="{{ old('author_name', $book->author_name ?? '') }}">
            @error('author_name')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Book Title -->
        <div class="col-md-6 mb-3">
            <label for="title" class="form-label text-right d-block">@lang('kotaby.book_title')</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title"
                placeholder="@lang('kotaby.book_title')" name="title" value="{{ old('title', $book->title ?? '') }}">
            @error('title')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Language -->
        <div class="col-md-6 mb-3">
            <label for="language" class="form-label text-right d-block">@lang('kotaby.language')</label>
            <select class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" id="language"
                name="language">
                <option value="" disabled {{ old('language') ? '' : 'selected' }}>@lang('kotaby.choose')</option>
                <option value="ar" {{ old('language', $book->language ?? '') == 'ar' ? 'selected' : '' }}>
                    @lang('kotaby.arabic')
                </option>
                <option value="en" {{ old('language', $book->language ?? '') == 'en' ? 'selected' : '' }}>
                    @lang('kotaby.english')
                </option>
            </select>
            @error('language')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Number of Pages -->
        <div class="col-md-6 mb-3">
            <label for="num_pages" class="form-label text-right d-block">@lang('kotaby.num_pages')</label>
            <input type="number" class="form-control {{ $errors->has('num_pages') ? 'is-invalid' : '' }}"
                id="num_pages" placeholder="@lang('kotaby.num_pages')" name="num_pages"
                value="{{ old('num_pages', $book->num_pages ?? '') }}">
            @error('num_pages')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Book Department (Categories) -->
        <div class="col-md-12 mb-3">
            <label for="dep_id" class="form-label text-right d-block">@lang('kotaby.dep_id')</label>
            <select class="form-control {{ $errors->has('dep_id') ? 'is-invalid' : '' }}" id="dep_id"
                name="dep_id">
                <option value="" disabled {{ old('dep_id') ? '' : 'selected' }}>@lang('kotaby.dep_id')</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}"
                        {{ old('dep_id', $book->dep_id ?? '') == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            @error('dep_id')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Book Description -->
        <div class="col-md-12 mb-3">
            <label for="description" class="form-label text-right d-block">@lang('kotaby.description')</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" rows="3"
                placeholder="@lang('kotaby.description')" name="description">{{ old('description', $book->description ?? '') }}</textarea>
            @error('description')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div> <!-- End of Flexbox -->
</div>
