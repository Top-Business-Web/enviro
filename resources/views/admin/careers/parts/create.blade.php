<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{route('careers.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">ملف</label>
                    <input type="file" class="form-control" name="file" id="file">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">الاسم</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-control-label">الايميل</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-control-label">الهاتف</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-control-label">المرتب</label>
                    <input type="number" class="form-control" name="salary" id="salary">
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
            </div>
    </form>
</div>

