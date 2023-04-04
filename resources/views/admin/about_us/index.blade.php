@extends('Admin/layouts/master')

@section('title')
    معلومات عنا
@endsection
@section('page_name') معلومات عنا @endsection
@section('content')

    <!-- Form Start -->
    <form method="POST" id="updateForm" class="updateForm" action=""
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">العنوان بالعربي :</label>
                                <input type="text" name="title_ar" value="{{ $about_us->title_ar }}"
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> المكان بالعربي:</label>
                                <input type="text" name="location_url" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">  مفتوح :</label>
                                <input class="form-control" name="client_count" value=""
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">  العنوان بالانجليزي:</label>
                                <input class="form-control" name="title_en" value=""
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> المكان بالانجليزي:</label>
                                <input type="text" name="location_url" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> الايميل :</label>
                                <input class="form-control" name="sub_title_en" value=""
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> فيسبوك :</label>
                                <input type="text" name="hash_en" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> يوتيوب :</label>
                                <input type="text" name="hash_en" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> تويتر :</label>
                                <input type="text" name="hash_en" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> انستجرام :</label>
                                <input type="text" name="hash_en" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> لينكد ان :</label>
                                <input type="text" name="hash_en" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for=""> الموقع :</label>
                                <input type="text" name="hash_ar" value=""
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">لوجو :</label>
                                <input type="file" name="image" class="dropify"
                                       data-default-file="" />
                                <span class="form-text text-danger text-center">  Recomended : 370 x 370 <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="card-body">
                        <div class="container_ar">
                            <h5 class="mb0">الوصف بالعربي</h5>
                            <textarea class="form-control" id="mytextarea" name="desc_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="container_en">
                            <h5 class="mb0">الوصف بالانجليزي</h5>
                            <textarea class="form-control" id="mytextarea1" name="desc_en" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary" id="updateButton">تحديث</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us -->
    </form>
    <!-- End Form -->
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>

        CKEDITOR.replace('desc_ar');
        CKEDITOR.replace('desc_en');


    </script>
@endsection


