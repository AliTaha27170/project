<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        $reports = DB::table('reports')->select('*')->get();
        return view('admin.pages.report.index',['reports'=>$reports]);
    }

    public function create()
    {
        return view('admin.pages.report.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|string',
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

            $files = $file->storeAs('reports' , $fileName  , 'public');
        }

        $data = array_merge($request->all() , ['file'=> $files]);

        $files = Report::create($data);



        return redirect('/admin/report/index')->with('success', " تم اضافة تقرير المنظمة بنجاح ");
    }

    public function destroy($id)
    {
        DB::table('reports')->where('id',$id)->delete();
        return back()->with('delete', "تم حذف التقرير بنجاح");;
    }


}


