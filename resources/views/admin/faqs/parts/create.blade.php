<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" action="{{route('faqs.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="question" class="form-control-label">السؤال</label>
                    <input type="text" class="form-control" name="question" id="question">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="answer" class="form-control-label">الاجابة</label>
                    <input type="text" class="form-control" name="answer" id="answer">
                </div>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
            </div>
    </form>
</div>

