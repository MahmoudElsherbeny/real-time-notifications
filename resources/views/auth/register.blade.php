
@extends('auth.layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-8 col-10 d-flex flex-column align-self-center mx-auto">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h2>إنشاء حساب جديد</h2>
                        </div>

                        {!! Form::open(['url' => route('register')]) !!}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">الإسم:</label>
                                    <input type="text" name="name" class="form-control add-billing-address-input @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="الإسم الأول" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">البريد الإلكترونى:</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="البريد الإلكترونى" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">كلمة المرور:</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="كلمة المرور" autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">تاكيد كلمة المرور:</label>
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="تأكيد كلمة المرور" autocomplete="new-password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-secondary w-100">إنشاء حساب</button>
                                </div>
                            </div>
                        {!! Form::close() !!}

                        <div class="col-12">
                            <div class="text-center">
                                <p class="mb-0"> هل لديك حساب بالفعل ؟ <a href="{{ route('login') }}" class="text-warning">تسجيل الدخول</a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
