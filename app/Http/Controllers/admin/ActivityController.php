<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::get();
        return view('admin.pages.activity.activity_table', [
            'activity' => $activity,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.activity.add_activity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:9000|string',
            'description' => 'required',
            'image' => 'required|image',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('activity' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $activity = Activity::create($data);



        return redirect()
        ->route('activity.index')
        ->with('success', " تم اضافة النشاط ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('admin.pages.activity.edit_activity' , [
            'activity' => $activity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:9000|string',
            'description' => 'required',
            'image' => 'image',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $activity = Activity::findOrFail($id);

        $image = $activity->image;

        // $description = strip_tags($product->description);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('activity' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $activity->update($data);

        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $activity->update($dat);





        return redirect()
        ->route('activity.index')
        ->with('success', "تم تعديل النشاط بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $activity = Activity::findOrFail($id);
        //dd($activity);
        $activity->delete();
         return redirect(route('activity.index'))
        ->with('delete' , "تم حذف النشاط من قائمة الأنشطة");
        // return view('admin.pages.activity.tbody-activity')->with('activity',$activity = Activity::get());
    }


}
