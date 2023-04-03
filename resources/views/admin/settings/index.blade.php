@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | الاعدادات
@endsection
@section('page_name')
    الاعدادات
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    اعدادات الموقع
                </div>
                <div class="card-body">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>

        <!--Delete MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">حذف بيانات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>هل انت متأكد من حذف البيانات التالية <span id="title" class="text-danger"></span>؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">
                            اغلاق
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_btn">حذف !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

        <!-- Create Or Edit Modal -->
        <div class="modal fade" id="editOrCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">بيانات المشرف</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">
                        <div class="modal-body">
                            <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('admins.update',$setting->id)}}" >
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="form-control-label">الصورة</label>
                                    <input type="file" id="testDrop" class="dropify" name="image" data-default-file="{{get_user_file($setting->image)}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="form-control-label">الاسم</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$setting->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-control-label">الايميل</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{$setting->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-control-label">كلمة المرور</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="********">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                    <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
                                </div>
                            </form>
                        </div>
                        <script>
                            $('.dropify').dropify()
                        </script>

                    </div>
                </div>
            </div>
        </div>
        <!-- Create Or Edit Modal -->
    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        editScript();
    </script>
@endsection


