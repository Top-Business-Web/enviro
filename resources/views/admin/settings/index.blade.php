@extends('Admin/layouts/master')

@section('title')
    | الاعدادات
@endsection
@section('page_name')
    الاعدادات
@endsection
@section('content')

    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data" action="{{ route('settings.update', $settings->id) }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $settings->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">قائمة الاعدادات </h3>
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-control-label">لوجو</label>
                                <input type="file" class="dropify" name="logo"
                                       data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                            </div>
                        </div>
                    </div>
                    <h1 class="card-title">قائمة  الاعدادات العامة : </h1>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="facebook_link">العنوان بالعربي :</label>
                                <input type="text" name="title_ar" value="{{ $settings->title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">العنوان بالانجليزي :</label>
                                <input type="text" name="title_en" value="{{ $settings->title_en }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_ar">المكان بالعربي :</label>
                                <input type="text" name="address_ar" value="{{ $settings->address_ar }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address_en">المكان بالانجليزي :</label>
                                <input type="text" name="address_en" value="{{ $settings->address_en }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link"> رابط الموقع :</label>
                                <input type="text" name="location_url" value="{{ $settings->title_ar }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> الايميل :</label>
                                <input type="text" name="email" value="{{ $settings->title_en }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <h1 class="card-title" style="font: bold">قائمة السوشيال ميديا : </h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="facebook_link">فيسبوك :</label>
                                <input type="text" name="facebook" value="{{ $settings->facebook }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">يوتيوب :</label>
                                <input type="text" name="youtube" value="{{ $settings->youtube }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">تويتر :</label>
                                <input type="text" name="twitter" value="{{ $settings->twitter }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">انستجرام :</label>
                                <input type="text" name="instagram" value="{{ $settings->instagram }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">لينكد ان :</label>
                                <input type="text" name="linkedin" value="{{ $settings->linkedin }}" value=""
                                       class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_ar">الوصف بالعربي :</label>
                                <textarea name="desc_ar" rows="8" class="form-control">{{ $settings->desc_en }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desc_en">الوصف بالانجليزي :</label>
                                <textarea name="desc_en" rows="8" class="form-control">{{ $settings->desc_en }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" id="updateButton">تحديث</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        editScript();
    </script>
@endsection


