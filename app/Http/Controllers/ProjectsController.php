<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
namespace App\Http\Controllers;
use App\Project;
use App\User;
use App\Mail\SecurityAlarm;

class ProjectsController extends Controller
{

    /** Authenticate users */
     public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->id == 1){
             $projects = Project::orderBy('title', 'desc')->paginate(6);
            return view('projects.index')->with('projects', $projects);
        } else {
            \Mail::to(User::find(1))->send(new SecurityAlarm);
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->id == 1){
            return view('projects.create');
        } else {
            \Mail::to(User::find(1))->send(new SecurityAlarm);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'image1' => 'image|required|max:1999',
            'image2' => 'image|required|max:1999',
            'image3' => 'image|required|max:1999',

        ]);

        // Handle File Upload
        $filenameWithExt1 = $request->file('image1')->getClientOriginalName();
        $filenameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filenameWithExt3 = $request->file('image3')->getClientOriginalName();
        // Get Just Filename
        $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
        $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
        $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
        // Get Just Extension
        $extension1 = $request->file('image1')->getClientOriginalExtension();
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $extension3 = $request->file('image3')->getClientOriginalExtension();

        // Filename to Store
        $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
        $filenameToStore2 = $filename2.'_'.time().'.'.$extension2;
        $filenameToStore3 = $filename3.'_'.time().'.'.$extension3;

        // Upload Image
        $path1 = $request->file('image1')->storeAs('public/images', $filenameToStore1);
        $path2 = $request->file('image2')->storeAs('public/images', $filenameToStore2);
        $path3 = $request->file('image3')->storeAs('public/images', $filenameToStore3);



        // Create New Project
        $project = new Project;
        $project->title = $request->input('title');
        $project->details = $request->input('details');
        $project->image1 = $filenameToStore1;
        $project->image2 = $filenameToStore2;
        $project->image3 = $filenameToStore3;
        $project->save();

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->id == 1){
            $project = Project::find($id);
            return view('projects.edit')->with('project', $project);
        } else {
            \Mail::to(User::find(1))->send(new SecurityAlarm);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'image1' => 'image|required|max:1999',
            'image2' => 'image|required|max:1999',
            'image3' => 'image|required|max:1999',
        ]);

                // Handle File Upload
        $filenameWithExt1 = $request->file('image1')->getClientOriginalName();
        $filenameWithExt2 = $request->file('image2')->getClientOriginalName();
        $filenameWithExt3 = $request->file('image3')->getClientOriginalName();
        // Get Just Filename
        $filename1 = pathinfo($filenameWithExt1, PATHINFO_FILENAME);
        $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
        $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
        // Get Just Extension
        $extension1 = $request->file('image1')->getClientOriginalExtension();
        $extension2 = $request->file('image2')->getClientOriginalExtension();
        $extension3 = $request->file('image3')->getClientOriginalExtension();

        // Filename to Store
        $filenameToStore1 = $filename1.'_'.time().'.'.$extension1;
        $filenameToStore2 = $filename2.'_'.time().'.'.$extension2;
        $filenameToStore3 = $filename3.'_'.time().'.'.$extension3;

        // Upload Image
        $path1 = $request->file('image1')->storeAs('public/images', $filenameToStore1);
        $path2 = $request->file('image2')->storeAs('public/images', $filenameToStore2);
        $path3 = $request->file('image3')->storeAs('public/images', $filenameToStore3);


        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->details = $request->input('details');
        if($request->has_file('image1')){
            $project->image1 = $filenameToStore1;
        }
        if($request->has_file('image1')){
            $project->image1 = $filenameToStore1;
        }
        if($request->has_file('image1')){
            $project->image1 = $filenameToStore1;
        }
        $project->save();

        return redirect('/projects');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        Storage::delete('public/images/'.$project->image1);
        Storage::delete('public/images/'.$project->image2);
        Storage::delete('public/images/'.$project->image3);
        return redirect('/projects');
    }
}
