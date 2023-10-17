<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    //

    public function index()
    {
        return Lesson::all();
    }

    public function show($id)
    {
        return Lesson::find($id);
    }

    public function delete($id)
    {
        Lesson::find($id)->delete();
        return redirect('/lesson/list');
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->user_id = $request->user_id;
        $lesson->save();

        return redirect('/lesson/list');
    }

    public function store(Request $request)
    {

        $lesson = new Lesson();
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->user_id = $request->user_id;
        $lesson->save();

        return redirect('/lesson/list');
    }

    public function listView()
    {
        $lesson = Lesson::all();
        return view('lesson.list', ['lessons' => $lesson]);
    }

    public function editView($id){
        $lesson = Lesson::find($id);
        return view("lesson.edit", ["lesson" => $lesson]);
    }
    public function deleteView(){
        $lesson = Lesson::all();
        return view("lesson.delete", ["lessons" => $lesson]);
    
    }
    public function newView(){
        return view("lesson.new");
    
    }
}
