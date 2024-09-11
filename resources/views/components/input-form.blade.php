<div class="form-group">
    <label for="name" class="text-right d-block">الاسم-البريد الإلكتروني</label>
    <input type="text" class="form-control w-100 @error('field') is-invalid @enderror"
        @error('field') style="border: 2px solid red" @enderror id="name" placeholder="محمد فتح الله عبدالحميد"
        name="field" value="{{ old('field') }}">
    @error('field')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>


<div class="form-group">
    <label for="password" class="text-right d-block">كلمة المرور</label>
    <input type="password" class="form-control w-100 @error('password') is-invalid @enderror" placeholder="*****"
        id="password" name="password" @error('password') style="border: 2px solid red" @enderror
        value={{ old('password') }}>
    @error('password')
        <span class="invalid-feedback d-block text-danger" style="font-weight: bold">{{ $message }}</span>
    @enderror
</div>
