@foreach($lessons as $lesson)
<form method="post" action="/api/lesson/{{ $lesson->lesson_id }}">
    {{csrf_field()}}
    @method('DELETE')

    <p>
        Id: {{ $lesson->lesson_id }} <br>
        Status: {{ $lesson->status }} <br>
        Subject_id: {{ $lesson->subject_id }}<br>
        User_id: {{ $lesson->user_id }}
    </p>

    <input type="submit" value="Törlés">

</form>
@endforeach