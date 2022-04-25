<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Plan;
use App\Models\Report;
use App\Models\staff;
use App\Models\visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact_us()
    {
        return view('contact_us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    {

        $report = Report::paginate();
        return view('orgpolicy' , [
            'orgpolicy' => $report,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about = About::orderBy('updated_at','DESC')->where('is_publish' , 1)->latest()->limit(1)->get();
        // $about = DB::table('abouts')->orderBy('updated_at')->where('is_publish' , 1)->latest()->limit(1)->first();
        return view('about' , [
            'about'=>$about,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function staff()
    {
        $staff = staff::orderBy('updated_at','DESC')->where('is_publish' , 1)->latest()->limit(1)->get();

        return view('staff' , [
            'staff' => $staff,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function plane()

    {
        $plane = Plan::orderBy('updated_at','DESC')->where('is_publish' , 1)->latest()->limit(1)->get();

        return view('plane' , [
            'plane' => $plane,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $active = Activity::findOrFail($id);
        return view('activity' , [
            'active' => $active,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(visitor $visitor)
    {
        //
    }
}
