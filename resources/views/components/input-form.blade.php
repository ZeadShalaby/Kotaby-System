<div class="form-group">
    <label for="name" class="text-right d-block">الاسم-البريد الإلكتروني </label>
    <input type="text" class="form-control w-100" id="name" placeholder="محمد فتح الله عبدالحميد" name="field"
        value={{ old('field') }}>
</div>

<div class="form-group">
    <label for="password" class="text-right d-block">كلمة المرور</label>
    <input type="password" class="form-control w-100" placeholder="*****" id="password" name="password"
        value={{ old('password') }}>
</div>
