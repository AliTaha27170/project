<?php

namespace App\Http\Controllers\admin;

use App\Models\YearlyReport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreYearlyReportRequest;
use App\Http\Requests\UpdateYearlyReportRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YearlyReportController extends Controller
{
    public function index()
    {
        $reports = YearlyReport::get();
        return view('admin.pages.yearly.index',['reports'=>$reports]);
    }

    public function create()
    {
        return view('admin.pages.yearly.create');
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

            $files = $file->storeAs('yearly-reports' , $fileName  , 'public');
        }

        $data = array_merge($request->all() , ['file'=> $files]);

        $files = YearlyReport::create($data);



        return redirect('/admin/yearly-report/index')->with('success', " تم اضافة تقرير المنظمة بنجاح ");
    }

    public function destroy($id)
    {

        DB::table('yearly_reports')->where('id',$id)->delete();
        return back()->with('delete', "تم حذف التقرير بنجاح");;
    }

}
