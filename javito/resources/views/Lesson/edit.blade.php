<form action="/api/lesson/{{$lesson->lesson_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <input type="number" name="status" placeholder="0" value="{{ $lesson->status }}">
    </div>

    <div class="form-group">
        <input type="number" name="subject_id" placeholder="1" value="{{ $lesson->subject_id }}">
    </div>

    <div class="form-group">
        <input type="number" name="user_id" placeholder="1" value="{{ $lesson->user_id }}">
    </div>
    <br>
    <input type="submit" class="btn btn-primary"></input>
</form>