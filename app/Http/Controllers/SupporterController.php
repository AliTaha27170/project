<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupporterRequest;
use App\Http\Requests\UpdateSupporterRequest;
use App\Models\Supporter;
use Illuminate\Http\Request;

class SupporterController extends Controller
{
    public function index()
    {
        return view('admin.pages.supporter.index')->with('supporters',Supporter::get());
    }

    public function create()
    {
        return view('admin.pages.supporter.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            // 'name' => 'required|min:3|max:9000|string',
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
            $image = $request->file('image')->store('supporter' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

         Supporter::create($data);



        return redirect()
            ->route('supporter.index')
            ->with('success', " تم اضافة داعم ");
    }


    // public function show(Partner $partner)
    // {
    //     //
    // }


    public function edit(Supporter $supporter)
    {
        return view('admin.pages.supporter.edit')->with('supporter',$supporter);
    }


    public function update(Request $request, Supporter $supporter)
    {
        $request->validate([
            // 'name' => 'required|min:3|max:9000|string',
            'image' => 'image',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $supporter = Supporter::findOrFail($supporter->id);

        $image = $supporter->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('supporter' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $supporter->update($data);
            return redirect()->route('supporter.index')->with('success', "تم تعديل الداعم بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $supporter->update($dat);

        return redirect()->route('supporter.index')->with('success', "تم تعديل الشريك بنجاح");
    }


    public function destroy($id)
    {
        $supporter = Supporter::find($id);
        $supporter->delete();
        return back()->with('delete','تم حذف الداعم');
    }
}
