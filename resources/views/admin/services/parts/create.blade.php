<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('services.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="form-control-label">الصورة</label>
                    <input type="file" class="dropify" name="files[]" multiple="multiple"
                           data-default-file="{{asset('assets/uploads/post.png')}}"
                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                    <span
                        class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name" class="form-control-label">صورة لوجو</label>
                    <input type="file" class="dropify" name="image_logo"
                           data-default-file="{{asset('assets/uploads/logo-social.png')}}"
                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                    <span
                        class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">العنوان بالعربي</label>
                    <input type="text" class="form-control" name="title_ar" id="title_ar">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">العنوان بالانجليزي</label>
                    <input type="text" class="form-control" name="title_en" id="title_en">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc_ar" class="form-control-label">الوصف بالعربي</label>
                    <textarea class="form-control" rows="8" name="desc_ar" id="desc_ar"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="desc_en" class="form-control-label">الوصف بالانجليزي</label>
                    <textarea class="form-control" rows="8" name="desc_en" id="desc_ar"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>

