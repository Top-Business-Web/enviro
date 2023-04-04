<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{route('contact.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name" class="form-control-label">الاسم</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-control-label">الايميل</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone" class="form-control-label">الهاتف</label>
                    <input type="number" class="form-control" name="phone" id="phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject" class="form-control-label">الموضوع</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message" class="form-control-label">رسالة</label>
                    <textarea class="form-control" name="message" rows="8" id="message"></textarea>
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
            </div>
    </form>
</div>

