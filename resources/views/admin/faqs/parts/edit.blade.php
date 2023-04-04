<form id="updateForm" method="POST" action="{{route('faqs.update',$faq->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="question" class="form-control-label">السؤال</label>
                <input type="text" class="form-control" value="{{ $faq->question }}" name="question" id="question">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="answer" class="form-control-label">الاجابة</label>
                <input type="text" class="form-control" value="{{ $faq->answer }}" name="answer" id="answer">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-success" id="updateButton">تعديل</button>
    </div>
</form>


