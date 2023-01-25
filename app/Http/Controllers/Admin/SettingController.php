<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
            'type' => $request->formTypePages,
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
