<form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('careers.update',$career->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="form-control-label">ملف</label>
                <input type="file" class="form-control" value="{{ $career->file }}" name="file" id="file">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email" class="form-control-label">الاسم</label>
                <input type="text" class="form-control" value="{{ $career->name }}" name="name" id="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="password" class="form-control-label">الايميل</label>
                <input type="email" class="form-control" value="{{ $career->email }}" name="email" id="email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="password" class="form-control-label">الهاتف</label>
                <input type="number" class="form-control" value="{{ $career->phone }}" name="phone" id="phone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="password" class="form-control-label">المرتب</label>
                <input type="number" class="form-control" value="{{ $career->salary }}" name="salary" id="salary">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>


