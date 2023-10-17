@foreach ($lessons as $lesson)
    <form action="/api/lesson/{{$lesson->lesson_id}}" method="post">
        {{csrf_field()}}
        {{method_field("GET")}}
        <div>
            <input type="submit" value="{{$lesson->lesson_id}}">
        </div>
    </form>
@endforeach