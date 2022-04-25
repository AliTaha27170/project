<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Workschedule;
use Illuminate\Http\Request;


class WorkscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workschedules = Workschedule::get();
        return view('admin.pages.workschedule.workschedule_table' , [
            'workschedules' => $workschedules,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.workschedule.add_workschedule');
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
            'title' => 'required|min:3|max:255|string',
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
            $image = $request->file('image')->store('workschedule' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $workschedule = Workschedule::create($data);



        return redirect()
            ->route('workschedule.index')
            ->with('success', " تم اضافة جدول الأعمال بنجاح");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workschedule  $workschedule
     * @return \Illuminate\Http\Response
     */
    public function show(Workschedule $workschedule)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workschedule  $workschedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workschedule = Workschedule::findOrFail($id);
        return view('admin.pages.workschedule.edit_workschedule', [
            'workschedule' => $workschedule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workschedule  $workschedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:255|string',
            'image' => 'image',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $workschedule = Workschedule::findOrFail($id);

        $image = $workschedule->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('workschedule' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $workschedule->update($data);

        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $workschedule->update($dat);





        return redirect()
            ->route('workschedule.index')
            ->with('success', "تم تعديل جدول الأعمال بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workschedule  $workschedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $workschedule = Workschedule::findOrFail($id);
        $workschedule->delete();

        return redirect()
            ->route('workschedule.index')
            ->with('delete', " تم حذف جدول الأعمال بنجاح");

    }
}
