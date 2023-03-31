@extends('layouts.app')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-lg-12">

            <div class="widget-content widget-content-area">

                <div class="row">
                    <div class="col-lg-12 col-12 ">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">العنوان:</label>
                                <div class="">{{ $message->name }}</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">الرسالة:</label>
                                <div class="">{{ $message->discreption }}</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection