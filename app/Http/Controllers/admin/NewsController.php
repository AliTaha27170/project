<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();
        return view('admin.pages.news.news_table', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.news.add_news');
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
            $image = $request->file('image')->store('news' , 'public');
        }
        $data = array_merge($request->all() , ['image'=> $image]);

         News::create($data);



        return redirect()
            ->route('news.index')
            ->with('success', " تم اضافة الخبر ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.pages.news.edit_news' , [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
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

        $news = News::findOrFail($id);

        $image = $news->image;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->store('news' , 'public');
            $data = array_merge($request->all() , ['image'=> $image]);
            $news->update($data);
            return redirect()->route('news.index')->with('success', "تم تعديل الخبر بنجاح");
        }

        $dat = array_merge($request->all() , ['image'=> $image]);
        $news->update($dat);

        return redirect()->route('news.index')->with('success', "تم تعديل الخبر بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $news = News::findOrFail($id);
        //dd($News);
        $news->delete();
        return redirect(route('news.index'))
            ->with('delete' , "تم حذف الخبر من قائمة الأنشطة");
        // return view('admin.pages.news.tbody-news')->with('news',$news = news::get());
    }
}
