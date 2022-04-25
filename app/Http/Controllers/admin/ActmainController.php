<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Actmain;
use Illuminate\Http\Request;

class ActmainController extends Controller
{
    public function index()
    {
        $actmain = Actmain::get();
        return view('admin.pages.actimain.actmain', [
            'actmain' => $actmain,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.actimain.add_actmain');
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
            $image = $request->file('image')->store('actmain' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $actmain = Actmain::create($data);



        return redirect()
        ->route('actmain.index')
        ->with('success', " تم اضافة النشاط ");
    }




    public function edit($id)
    {
        $actmain = Actmain::findOrFail($id);
        return view('admin.pages.actimain.edit_actmain', [
            'actmain' => $actmain,
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

        $actmain = Actmain::findOrFail($id);

        $image = $actmain->image;

        // $description = strip_tags($product->description);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('actmain' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $actmain->update($data);

        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $actmain->update($dat);

        return redirect()
        ->route('actmain.index')
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
        $actmain = Actmain::findOrFail($id);
        //dd($activity);
        $actmain->delete();
        return redirect()
        ->route('actmain.index')
        ->with('success', "تم الحذف النشاط بنجاح");
        // return view('admin.pages.activity.tbody-activity')->with('activity',$activity = Activity::get());
    }
}
