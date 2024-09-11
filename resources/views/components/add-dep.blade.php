{{-- @if ($errors->any())
    {{ dd($errors) }}
@endif --}}
<h1 class="login__title">
    {{ isset($department) ? 'Edit Department' : 'New Department' }}
</h1>
<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="Name" name="name"
        class="login__input {{ $errors->has('name') ? 'is-invalid' : '' }}"
        value="{{ old('name', $department->name ?? '') }}" />

</div>
@error('name')
    <span class="invalid-feedback d-block text-danger"
        style="color: red;font-weight: bold;font-size: 12px">{{ $message }}</span>
@enderror
<div class="login__box">
    <i class="bx bx-user login__icon"></i>
    <input type="text" placeholder="Code" name="code"
        class="login__input {{ $errors->has('code') ? 'is-invalid' : '' }}"
        value="{{ old('code', $department->code ?? '') }}" />

</div>
@error('code')
    <span class="invalid-feedback d-block text-danger"
        style="color: red;font-weight: bold;font-size: 12px">{{ $message }}
    </span>
@enderror
@if (!isset($department))
    <div class="login__box">
        <a href="#" class="text-blue-400 hover:bg-blue-50 dark:hover:bg-dim-800 rounded-full p-2">
            <label for="file-upload" style="cursor: pointer; border: none; background: none;">
                <input id="file-upload" class="form-control-file {{ $errors->has('img') ? 'is-invalid' : '' }}"
                    type="file" name="img" accept="image/*" style="width: 10%; display: none" />
                <i class="bx bx-camera login__icon"></i>

            </label>
        </a>
    </div>
    @error('img')
        <span class="invalid-feedback d-block text-danger"
            style="color: red;font-weight: bold;font-size: 12px">{{ $message }}</span>
    @enderror
@endif
