<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Title;
use App\Task;
use Validator;


class VitasController extends Controller
{
    public function viewIndex(){
        $titles = Title::all();
        return view('index',['titles' => $titles]);
    }

    public function viewaddTitle(){
        return view ('addtitle');
    }

    public function delTitle($id){
        $title = Title::where('id',$id)->first();
        Task::where('title_id',$id)->delete();
        Title::where('id',$id)->delete();
        return redirect()->back()->with('title_name',$title->name);
    }

    public function postTitle(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:titles|max:255',
            
        ]);

        if ($validator->fails()) {
            return redirect('/addtitle')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $title = new Title;
            $title->name = $request->input('name');

            $title->save();  
            return redirect()->back()->with('title', $request->input('name'));    

        }

    }

    public function viewTask($title_id){
        $tasks = Task::where('title_id',$title_id)->get();
        $title_name = Title::where('id',$title_id)->first()->name;
        return view('viewtask',['tasks' => $tasks , 'title_name' => $title_name, 'title_id' => $title_id]);
    }

    public function viewaddTask($title_id){
        return view('addtask',['title_id' => $title_id]);
    }

    public function postTask(Request $request , $title_id){
        $validator = Validator::make($request->all(), [
            'desc' => 'required|max:255',
            'startdate' => 'required|date|after:today',
            'starttime' => 'required|date_format:H:i',
            'endtime' => 'required|date_format:H:i|after:starttime',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $task = new Task;
            $task->title_id = $title_id;
            $task->desc = $request->input('desc');
            $task->startdate = $request->input('startdate');
            $task->starttime = $request->input('starttime');
            $task->endtime = $request->input('endtime');
            $task->save();  
            return redirect()->back()->with('task', 1);    

        }

    }

    public function delTask($id){
        Task::where('id',$id)->delete();
        return redirect()->back()->with('mess','Delete task successfully!');
    }
}
