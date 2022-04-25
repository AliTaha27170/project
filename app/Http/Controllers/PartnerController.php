<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.partner.index')->with('partners',Partner::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
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
            $image = $request->file('image')->store('partner' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

         Partner::create($data);



        return redirect()
            ->route('partner.index')
            ->with('success', " تم اضافة شريك ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.pages.partner.edit')->with('partner',$partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
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

        $partner = Partner::findOrFail($partner->id);

        $image = $partner->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('partner' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $partner->update($data);
            return redirect()->route('partner.index')->with('success', "تم تعديل الشريك بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $partner->update($dat);

        return redirect()->route('partner.index')->with('success', "تم تعديل الشريك بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return back()->with('delete','تم حذف الشريك');
    }
}
