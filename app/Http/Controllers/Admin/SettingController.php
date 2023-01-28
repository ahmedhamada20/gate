<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionOne;
use App\Models\Seo;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function getUpdatedSettings($id)
    {
        $setting = Setting::where('type',$id)->first();
        return view('website.types.index',compact('id','setting'));

    }


    public function update(Request $request, $id)
    {


        $pageId = Setting::findorfail($request->id);

        if ($request->file('photo_site')) {
            $file = $request->file('photo_site');
            $filenamephotoSite = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('admin/assets/setting'), $filenamephotoSite);
        }

        $pageId->update([
            'name_site' =>  $request->name_site,
            'notes' => $request->notes,
            'numberSendSms' => $request->numberSendSms,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'title' =>  $request->title,
            'url' => $request->url,
            'type' => $request->type,
            'titleSections2' => $request->titleSections2,
            'photo_site' => $filenamephotoSite ?? $pageId->photo_site,
        ]);

        return redirect()->back()->withMessage('تم التعديل  بنجاح', 'my msg');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public  function destroy($id)
    {
        //
    }
}
