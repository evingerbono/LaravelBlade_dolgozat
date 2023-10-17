<form action="/api/lesson" method="post">
    {{csrf_field()}}
    <input type="number" name="status">
    <input type="number" name="subject_id">
    <input type="number" name="user_id">
    <input type="submit" value="Ok">
</form>