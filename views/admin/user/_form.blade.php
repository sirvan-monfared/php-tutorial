@component('admin.components.input', ['name' => 'phone', 'label' => 'شماره موبایل', 'required' => true])
    {{ old('phone', $user->phone) }}
@endcomponent

@component('admin.components.input', ['type' => 'password','name' => 'password', 'label' => 'رمزعبور', 'required' => routeIs('admin.user.create')])

@endcomponent

@component('admin.components.input', ['type' => 'password', 'name' => 'password_confirmation', 'label' => 'تکرار رمز عبور', 'required' => routeIs('admin.user.create')])

@endcomponent

@component('admin.components.input', ['name' => 'name', 'label' => 'نام'])
    {{ old('name', $user->name) }}
@endcomponent

@component('admin.components.input', ['name' => 'last_name', 'label' => 'نام خانوادگی'])
    {{ old('last_name', $user->last_name) }}
@endcomponent


@component('admin.components.input', ['name' => 'email', 'label' => 'آدرس ایمیل'])
    {{ old('email', $user->email) }}
@endcomponent

@component('admin.components.textarea', ['name' => 'address', 'label' => 'آدرس'])
    {{ old('address', $user->address) }}
@endcomponent

<div class="row align-items-center">
    <label for="is_admin" class="col-sm-3 col-form-label form-label-title">دسترسی مدیر؟</label>
    <div class="col-sm-9">
        <label class="switch">
            <input type="checkbox" name="is_admin" id="is_admin" value="1" @checked($user->isAdmin())><span class="switch-state"></span>
        </label>
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</div>