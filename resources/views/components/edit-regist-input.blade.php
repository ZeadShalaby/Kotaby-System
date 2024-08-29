<!-- Name Input -->
<div class="form-group mt-3">
    <label for="name" class="text-right d-block">اسم المستخدم</label>
    <input type="text" id="name" name="name" value="{{ old('name', $user->name ?? '') }}"
        class="form-control w-100">
</div>

<!-- Email Input -->
<div class="form-group">
    <label for="email" class="text-right d-block">البريد الإلكتروني</label>
    <input type="email" id="email" name="email" value="{{ old('email', $user->email ?? '') }}"
        class="form-control w-100">
</div>

<!-- Password Input -->
<div class="form-group">
    <label for="password" class="text-right d-block">كلمة المرور</label>
    <input type="password" id="password" name="password" class="form-control w-100" value="***********">
</div>

<!-- User Role Display -->
<div class="form-group mt-3">
    <span class="text-start" style="color: #ffca42;font-weight: bold">{{ $user->role ?? '' }}</span>
</div>
