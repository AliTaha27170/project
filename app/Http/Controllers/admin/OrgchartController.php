<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Orgchart;
use Illuminate\Http\Request;

class OrgchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgcharts = Orgchart::get();
        return view('admin.pages.orgchart.orgchart_table' , [
            'orgcharts' => $orgcharts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.orgchart.add_orgchart');
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
            $image = $request->file('image')->store('orgchart' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

        $orgchart = Orgchart::create($data);



        return redirect()
            ->route('orgchart.index')
            ->with('success', " تم اضافة المخطط بنجاح");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orgchart  $orgchart
     * @return \Illuminate\Http\Response
     */
    public function show(Orgchart $orgchart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orgchart  $orgchart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orgchart = Orgchart::findOrFail($id);
        return view('admin.pages.orgchart.edit_orgchart', [
            'orgchart' => $orgchart,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orgchart  $orgchart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $orgchart = Orgchart::findOrFail($id);

        $image = $orgchart->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('orgchart' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $orgchart->update($data);

            return redirect()
                ->route('orgchart.index')
                ->with('success', "تم تعديل المخطط بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $orgchart->update($dat);

        return redirect()
            ->route('orgchart.index')
            ->with('success', "تم تعديل المخطط بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orgchart  $orgchart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $orgchart = Orgchart::findOrFail($id);
        $orgchart->delete();

        return redirect()
            ->route('orgchart.index')
            ->with('delete', " تم حذف المخطط بنجاح");

    }
}
