<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Illuminate\Http\Request;


class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::get();
        return view('admin.pages.meeting.meeting-table', [
            'meetings' => $meetings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.meeting.add_meeting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeetingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:9000|string',
            'description' => 'required|min:4|max:9000|string',
            'r1' => 'required',
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

            $files = $file->storeAs('meeting' , $fileName  , 'public');
        }

        $data = array_merge($request->all() , ['file'=> $files]);

         Meeting::create($data);

        return redirect()
            ->route('meeting.index')
            ->with('success', " تم حفظ الاجتماع بنجاح ");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        $meeting = Meeting::findOrFail($meeting->id);
        return view('admin.pages.meeting.update_meeting' , [
            'meeting' => $meeting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeetingRequest  $request
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        $request->validate([
            'title' => 'required|min:4|max:9000|string',
            'description' => 'required|min:4|max:9000|string',
            'r1' => 'required',
            'file' => 'file',
        ],[
            'required' => 'هذا الحقل مطلوب',
            'string' => 'هذا الحقل يجب ان يحتوي على نص',
            'max' => 'هذا الحقل طويل للفاية',
            'min' => 'هذا الحقل قصير للغاية',
            'file' => 'الرجاء ارفاق ملف'

        ]);

        $meeting = Meeting::findOrFail($meeting->id);
        $file = $meeting->file;

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            $files = $file->storeAs('meeting' , $fileName  , 'public');

            $dat = array_merge($request->all() , ['file'=> $files]);
            $meeting->update($dat);

            return redirect()
                ->route('meeting.index')
                ->with('success', " تم تعديل الاجتماع بنجاح ");
        }

        $dat = array_merge($request->all() , ['file'=> $file]);
        $meeting->update($dat);

        return redirect()
            ->route('meeting.index')
            ->with('success', " تم تعديل الاجتماع بنجاح ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $meeting = Meeting::findOrFail($id);
        $meeting->delete();

        return redirect()->route('meeting.index')->with('delete', "تم حذف الاجتماع بنجاح");
    }
}
