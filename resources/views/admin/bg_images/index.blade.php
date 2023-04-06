@extends('Admin/layouts/master')

@section('title')
    |خلفيات الصفحات
@endsection
@section('page_name')
    خلفيات الصفحات
@endsection
@section('content')
    <form method="POST" id="updateForm" class="updateForm" enctype="multipart/form-data"
          action="">
        @csrf
        @method('PUT')
        {{--        <input type="hidden" name="id" value="{{ $image->id }}">--}}
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-header">
                        <h3 class="card-title">قائمة الاعدادات </h3>
                    </div>

                    foreach ($images as $key => $value) {
                    echo "Key: " . $key . ", Value: " . $value . "<br>";
                    }
                    <!-- Start Row -->
                    @foreach($background_image as $images)
                     @dd($images)
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">لوجو</label>
                                    <input type="file" class="dropify" name="images[]" value=""
                                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">لوجو</label>
                                    <input type="file" class="dropify" name="images[]" value=""
                                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">لوجو</label>
                                    <input type="file" class="dropify" name="images[]" value=""
                                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">لوجو</label>
                                    <input type="file" class="dropify" name="images[]" value=""
                                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">لوجو</label>
                                    <input type="file" class="dropify" name="images[]" value=""
                                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
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


