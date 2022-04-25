<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showOurMessage()
    {
        $msg = DB::table('vision_message_worth')->first();
        return view('admin.our-message')->with('msg',$msg);
    }
    
    public function updateOurMessage(Request $request)
    {
        $accounts = DB::table('vision_message_worth')->update([
            'message'=>$request->message,
            'vision'=>$request->vision,
            'worth'=>$request->worth,
        ]);
        return back();
    }
    
    public function showSocialAcconuts()
    {
        $accounts = DB::table('socila_media')->first();
        return view('admin.social')->with('accounts',$accounts);
    }
    
    public function updateSocialAcconuts(Request $request)
    {
        $accounts = DB::table('socila_media')->update([
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'twitter'=>$request->twitter,
            'youtube'=>$request->youtube,
        ]);
        return back();
    }

    public function showBankAcconuts()
    {
        $accounts = DB::table('bank_accounts')->first();
        return view('admin.bank-accounts')->with('accounts',$accounts);
    }
    public function updateBankAcconuts(Request $request)
    {
        $accounts = DB::table('bank_accounts')->update([
            'firstaccount'=>$request->firstaccount,
            'secondaccount'=>$request->secondaccount,
            'thiredaccount'=>$request->thiredaccount,
        ]);
        return back();
    }

    public function bossSpeachUpdate(Request $request)
    {
        $speech = DB::table('boss_speech')
        ->where('id',1)
        ->update([
            'speach'=>$request->speach,
        ]);

        return back();

    }


    public function bossSpeach()
    {

        $result = DB::table('boss_speech')->where('id','=',1)->first();
        return view('admin.pages.boss-speech')->with('result',$result);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.admin.index',['admins'=>Admin::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $request->validate([
            'email'=>'required|email|unique:admins,email',
            'name'=>'required',
            'password'=>'required'
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);

        $admin->save();
        return redirect('/admin/admin/index')->with('success','تم إنشاء مدير بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.pages.admin.edit',['admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $request->validate([
            'email'=>'required',
            'name'=>'required',
        ]);

        if($request->has('password')){
            $admin->password = Hash::make($request->password);
        }
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect()->route('admin.index')->with('update','تم تحديث البيانات');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //dd($admin);
        $admin->delete();
        return back()->with('delete','تم حذف المدير بنجاح');
    }
    
    public function popups()
    {
        return view('admin.popup')->with('popup',DB::table('popup')->select('*')->first());
    }
    public function updatePopups(Request $request)
    {
        $pop = DB::table('popup')->select('*')->first();
        DB::table('popup')->where('id',$pop->id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'active'=>$request->active,
        ]);
        return redirect('/admin/popups')->with('update','تم التعديل بنجاح');
    }
    
    public function aboutus()
    {
        return view('admin.about')->with('aboutus',DB::table('aboutus')->select('*')->first());
    }
    public function updateAboutus(Request $request)
    {
        $aboutus = DB::table('aboutus')->select('*')->first();
        DB::table('aboutus')->where('id',$aboutus->id)->update([
            'about_title'=>$request->about_title,
            'about'=>$request->about,
            'goal'=>$request->goal,
        ]);
        return redirect('/admin/aboutus')->with('update','تم التعديل بنجاح');
    }
}
