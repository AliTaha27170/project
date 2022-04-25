<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Actmain;
use App\Models\GoalMain;
use App\Models\Meeting;
use App\Models\News;
use App\Models\Initiative;
use App\Models\Orgchart;
use App\Models\Orgpolicy;
use App\Models\Partner;
use App\Models\Supporter;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\User;
use App\Models\visitor;
use App\Models\Workschedule;
use App\Models\YearlyReport;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function contactus()
    {
        return view('guest.contact-us');
    }

    public function initiatives()
    {
        return view('guest.initiatives');
    }
    public function subscribe()
    {
        return view('guest.subscripe');
    }

    public function storeContactus(Request $request)
    {
        //return view('guest.contact-us');
    }
    public function bossSpeach()
    {
        $result = DB::table('boss_speech')->where('id','=',1)->first();

        return view('guest.boss-letter')->with('result',$result);
    }
    public function searchYearly(Request $request)
    {
        //dd($request->all());
        $result = YearlyReport::where('name','=',$request->search)->first();
        //dd($result);
        return view('guest.yearly-reports')->with('result',$result)->with('reports',YearlyReport::get());
    }
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = Slider::get();
        $actmain = Actmain::latest()->limit(3)->get();
        $activity = Actmain::latest()->limit(4)->get();
        $goals = GoalMain::latest()->limit(6)->get();
        $staff = staff::count();
        $activ = Activity::count();
        $user = User::count();
        $visitor = visitor::count();
        $msg = DB::table('vision_message_worth')->select('*')->first();
        $social = DB::table('socila_media')->select('*')->first();
        $banks = DB::table('bank_accounts')->select('*')->first();
        $popup = DB::table('popup')->select('*')->first();
        $aboutus = DB::table('aboutus')->select('*')->first();
        $partners = Partner::get();
        $supporters = Supporter::get();
        $new_slides = News::latest()->limit(4)->get();
        $news = News::latest()->limit(3)->get();

        return view('guest.main',[
            'actmain'=> $actmain,
           'activity'=> $activity,
           'activ'=> $activ,
           'staff'=>$staff,
           'user'=>$user,
           'visitor' => $visitor,
           'goals'=>$goals,
           'slides'=>$slides,
           'msg'=>$msg,
           'social'=>$social,
           'banks'=>$banks,
           'popup'=>$popup,
           'aboutus'=>$aboutus,
           'partners'=>$partners,
           'supporters'=>$supporters,
           'new_slides'=>$new_slides,
           'news' => $news,
    ]);
    }

    public function showMainActivity($id)
    {
        $activity = Actmain::find($id);
        return view('guest.activity',['activity'=>$activity]);
    }

    public function showActivities()
    {
        $activities = Activity::paginate(9);
        return view('guest.activities',compact('activities'));
    }
    public function showActivity($id)
    {
        $activity = Activity::find($id);
        return view('guest.activity',['activity'=>$activity]);
    }

    public function showCouncil()
    {
        $members = Staff::where('r1','director')->paginate(6);
        return view('guest.council-members',compact('members'));

    }
    public function showCreator()
    {
        $members = Staff::where('r1','creator')->paginate(6);
        return view('guest.creator-members',compact('members'));

    }

    public function showReport()
    {
        $reports = DB::table('reports')->paginate(3);
        return view('guest.finance-reports',compact('reports'));
    }

    public function showNews()
    {
        $news = News::paginate(6);
        return view('guest.news',compact('news'));
    }
    
        public function showInit()
    {
        $inits = Initiative::paginate(6);
        return view('guest.initiatives',compact('inits'));
    }

    public function showSingleNews($id)
    {
        $news = News::find($id);
        return view('guest.news-details',['news'=>$news]);
    }
    
        public function showSingleInit($id)
    {
        $init = Initiative::find($id);
        return view('guest.initiative-details',['init'=>$init]);
    }

    public function showPolicies()
    {
        $policies = Orgpolicy::get();
        return view('guest.policies',compact('policies'));
    }

    public function showMeeting()
    {
        $meetings = Meeting::get();
        return view('guest.meetings',compact('meetings'));
    }

    public function showStructure()
    {
        $struct = Orgchart::latest()->first();
        return view('guest.structure',compact('struct'));
    }

    public function showScheduling()
    {
        $scheduling = Workschedule::paginate(3);
        return view('guest.scheduling',compact('scheduling'));
    }

    public function showYearly()
    {
        $reports = YearlyReport::get();
        return view('guest.yearly-reports',compact('reports'));
    }
}
