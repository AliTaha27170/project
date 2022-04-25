<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Orgpolicy;
use Illuminate\Http\Request;

class OrgpolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgpolicys = Orgpolicy::get();
        return view('admin.pages.orgpolicy.orgpolicy_table', [
            'orgpolicys' => $orgpolicys,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.orgpolicy.add_orgpolicy');
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
            'file' => 'required|file',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'file' => 'الرجاء ارفاق ملف'
        ]);

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            $files = $file->storeAs('orgpolicy' , $fileName  , 'public');
        }
        // if ($request->hasFile('file'))
        // {
        //     $file = $request->file('file')->store('orgpolicy' , 'public');
        // }
        $data = array_merge($request->all() , ['file'=> $files]);

        $files = Orgpolicy::create($data);



        return redirect()
            ->route('orgpolicy.index')
            ->with('success', " تم اضافة سياسة المنظمة بنجاح ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orgpolicy  $orgpolicy
     * @return \Illuminate\Http\Response
     */
    public function show(Orgpolicy $orgpolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orgpolicy  $orgpolicy
     * @return \Illuminate\Http\Response
     */
    public function edit(Orgpolicy $orgpolicy)
    {
        $orgpolicy = Orgpolicy::findOrFail($orgpolicy->id);
        return view('admin.pages.orgpolicy.edit_orgpolicy' , [
            'orgpolicy' => $orgpolicy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orgpolicy  $orgpolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgpolicy $orgpolicy)
    {
        $request->validate([
            'title' => 'required|min:3|max:255|string',



        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'file' => 'الرجاء ارفاق ملف'
        ]);

        $orgpolicy = Orgpolicy::findOrFail($orgpolicy->id);

        $file = $orgpolicy->file;

        // $description = strip_tags($product->description);

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            $files = $file->storeAs('orgpolicy' , $fileName  , 'public');
        }

        $data = array_merge($request->all() , ['file'=> $files]);
        $orgpolicy->update($data);


        return redirect()
            ->route('orgpolicy.index')
            ->with('success', "تم تعديل السياسة بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orgpolicy  $orgpolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $orgpolicy = Orgpolicy::findOrFail($id);
        $orgpolicy->delete();

        return redirect()
            ->route('orgpolicy.index')
            ->with('delete', "تم حذف السياسة بنجاح");
    }
}
