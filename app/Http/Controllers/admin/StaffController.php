<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
        return view('admin.pages.staff.staff_table' ,  [
            'staffs' => $staffs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.staff.add_staff');
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
            'name' => 'required|min:4|max:9000|string',

            'r1' => 'required',
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
          $image =  $request->file('image')->store('staffs' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        Staff::create($data);

        return redirect()->route('staff.index')->with('success' , 'تم اضافة الموظف بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staf = staff::findOrFail($id);
        return view('admin.pages.staff.edit_staff' , [
            'staf' => $staf ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4|max:9000|string',

            'r1' => 'required',
            'image' => 'image',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'

        ]);
        $staff = staff::findOrFail($id);

        $image = $staff->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('staffs' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $staff->update($data);
            return redirect()->route('staff.index')->with('success', "تم تعديل الموظف بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $staff->update($dat);

        return redirect()->route('staff.index')->with('success', "تم تعديل الموظف بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $st = Staff::findOrFail($id);
        $st->delete();

        return redirect()->route('staff.index')->with('success' , 'تم حذف الموظف بنجاح');
    }
}
