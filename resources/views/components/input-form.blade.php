<div class="form-group">
    <label for="name" class="text-right d-block">@lang('kotaby.name_or_email')</label>
    <input type="text" class="form-control w-100 @error('field') is-invalid @enderror"
        @error('field') style="border: 2px solid red" @enderror id="name" placeholder="@lang('kotaby.name_placeholder')"
        name="field" value="{{ old('field') }}">
    @error('field')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="password" class="text-right d-block">@lang('kotaby.password')</label>
    <input type="password" class="form-control w-100 @error('password') is-invalid @enderror"
        placeholder="@lang('kotaby.password_placeholder')" id="password" name="password"
        @error('password') style="border: 2px solid red" @enderror value="{{ old('password') }}">
    @error('password')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>
