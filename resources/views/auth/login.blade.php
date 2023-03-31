
@extends('auth.layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="row">
                        {!! Form::open(['url' => route('login')]) !!}
                        <div class="col-md-12 mb-3">
                            <h2>تسجيل الدخول</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">البريد الإلكترونى</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">كلمة المرور</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <div class="form-check form-check-primary form-check-inline">
                                    <input class="form-check-input me-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="remember" for="form-check-default">
                                        تَـذّكرنى
                                    </label>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <div class="col-12">
                            <div class="text-center">
                                <p class="mb-0"> ليس لديك حساب ؟ <a href="{{ route('register') }}" class="text-warning">إنشاء حساب</a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
