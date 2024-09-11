<!-- Form Group Container for all fields in one div -->
<div class="row mb-3">
    <div class="d-flex flex-wrap w-100">
        <!-- Author Name and Title -->
        <div class="col-md-6 mb-3">
            <label for="author_name" class="form-label text-right d-block">*إسم الكاتب</label>
            <input type="text" class="form-control {{ $errors->has('author_name') ? 'is-invalid' : '' }}" id="title"
                placeholder="إسمك كاملاً" name="author_name" value="{{ old('author_name', $book->author_name ?? '') }}">
            @error('author_name')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="title" class="form-label text-right d-block">*عنوان الكتاب</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title"
                placeholder="عنوان الكتاب" name="title" value="{{ old('title', $book->title ?? '') }}">
            @error('title')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Language -->
        <div class="col-md-6 mb-3"> <!-- Adjust the column size for half-width -->

            <label for="language" class="form-label text-right d-block">*اللغة</label>
            <select class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" id="title"
                name="language">
                <option value="" disabled {{ old('language') ? '' : 'selected' }}>اختر لغة الكتاب</option>

                <option value="ar" {{ old('language', $book->language ?? '') == 'ar' ? 'selected' : '' }}>
                    عربي
                </option>

                <option value="en" {{ old('language', $book->language ?? '') == 'en' ? 'selected' : '' }}>
                    إنجليزي
                </option>
            </select>

            @error('language')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Number of Pages -->
        <div class="col-md-6 mb-3"> <!-- Adjust the column size for half-width -->
            <label for="num_pages" class="form-label text-right d-block">*عدد الصفح</label>
            <input type="number" class="form-control {{ $errors->has('num_pages') ? 'is-invalid' : '' }}"
                id="title" placeholder="عدد صفح الكتاب" name="num_pages"
                value="{{ old('num_pages', $book->num_pages ?? '') }}">
            @error('num_pages')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Book Department (Categories) -->
        <div class="col-md-12 mb-3"> <!-- Full width column -->
            <label for="dep_id" class="form-label text-right d-block">*قسم الكتاب</label>
            <select class="form-control {{ $errors->has('dep_id') ? 'is-invalid' : '' }}" id="title"
                name="dep_id">
                <option value="" disabled {{ old('dep_id') ? '' : 'selected' }}>اختر قسم الكتاب</option>
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

        <!-- Publishing Location -->
        <div class="col-md-12 mb-3" style="display: none"> <!-- Full width column -->
            <label for="locations" class="form-label text-right d-block">*دار النشر</label>
            <input type="text" class="form-control {{ $errors->has('locations') ? 'is-invalid' : '' }}"
                id="locations" placeholder="مكان النشر" name="locations"
                value="{{ old('locations', $book->locations ?? '') }}">
            @error('locations')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Book Description -->
        <div class="col-md-12 mb-3"> <!-- Full width column -->
            <label for="description" class="form-label text-right d-block">*وصف عن الكتاب</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="title" rows="3"
                placeholder="وصف عن الكتاب" name="description">{{ old('description', $book->description ?? '') }}</textarea>
            @error('description')
                <span class="invalid-feedback d-block text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div> <!-- End of Flexbox -->
</div>
