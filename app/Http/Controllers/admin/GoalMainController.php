<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\GoalMain;
use App\Http\Requests\StoreGoalMainRequest;
use App\Http\Requests\UpdateGoalMainRequest;
use Symfony\Component\HttpFoundation\Request;
class GoalMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.goal-main.index',['goals'=>GoalMain::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.goal-main.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGoalMainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);
        $goal = new GoalMain();
        $goal->title = $request->title;
        $goal->description = $request->description;
        $goal->save();
        return redirect()->route('goal-main.index')->with('success','تم انشاء هدف بالصفحة الرئيسية');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoalMain  $goalMain
     * @return \Illuminate\Http\Response
     */
    public function show(GoalMain $goalMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoalMain  $goalMain
     * @return \Illuminate\Http\Response
     */
    public function edit(GoalMain $goalMain)
    {
        return view('admin.pages.goal-main.edit',['goal'=>$goalMain]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoalMainRequest  $request
     * @param  \App\Models\GoalMain  $goalMain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoalMain $goalMain)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $goalMain->title = $request->title;
        $goalMain->description = $request->description;
        $goalMain->save();
        return redirect()->route('goal-main.index')->with('update','تم تعديل هدف بالصفحة الرئيسية');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoalMain  $goalMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoalMain $goalMain)
    {
        $goalMain->delete();
        return back()->with('delete','تم حذف الهدف بنجاح');
    }
}
