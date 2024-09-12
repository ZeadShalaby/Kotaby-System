<!-- Name Input -->
<div class="form-group mt-3">
    <label for="name" class="text-right d-block">@lang('kotaby.username')</label>
    <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}"
        class="form-control w-100 @error('name') is-invalid @enderror"
        @error('name') style="border: 2px solid red" @enderror>
    @error('name')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>

<!-- Email Input -->
<div class="form-group">
    <label for="email" class="text-right d-block">@lang('kotaby.email')</label>
    <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
        class="form-control w-100 @error('email') is-invalid @enderror"
        @error('email') style="border: 2px solid red" @enderror>
    @error('email')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>

<!-- Password Input -->
<div class="form-group">
    <label for="password" class="text-right d-block">@lang('kotaby.password')</label>
    <input type="password" id="password" name="password"
        class="form-control w-100 @error('password') is-invalid @enderror"
        @error('password') style="border: 2px solid red" @enderror>
    @error('password')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>

<!-- User Role Display -->
<div class="form-group mt-3">
    <span class="text-start" style="color: #ffca42; font-weight: bold"> {{ $user->role ?? '' }}</span>
</div>
