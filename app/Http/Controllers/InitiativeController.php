<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInitiativeRequest;
use App\Http\Requests\UpdateInitiativeRequest;
use App\Models\Initiative;
use Illuminate\Http\Request;
class InitiativeController extends Controller
{
    public function index()
    {
        $init = Initiative::get();
        return view('admin.pages.init.init_table', [
            'init' => $init,
        ]);
    }

    public function create()
    {
        return view('admin.pages.init.add_init');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:9000|string',
            'description' => 'required',
            'image' => 'required|image',
            'mini_des'=>'required'


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('init' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

         Initiative::create($data);



        return redirect()
            ->route('initiative.index')
            ->with('success', " تم اضافة المبادرة ");
    }


    public function edit($id)
    {
        $init = Initiative::findOrFail($id);
        return view('admin.pages.init.edit_init' , [
            'init' => $init,
        ]);
    }


    public function update(Request $request , $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:9000|string',
            'description' => 'required',
            'image' => 'image',
            'mini_des'=>'required',


        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'image' => 'الرجاء ارفاق صورة'
        ]);

        $init = Initiative::findOrFail($id);

        $image = $init->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('init' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $init->update($data);
            return redirect()->route('initiative.index')->with('success', "تم تعديل المبادرة بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $init->update($dat);

        return redirect()->route('initiative.index')->with('success', "تم تعديل المبادرة بنجاح");
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $init = Initiative::findOrFail($id);

        $init->delete();
        return redirect(route('initiative.index'))
            ->with('delete' , "تم حذف المبادرة   ");

    }
}
