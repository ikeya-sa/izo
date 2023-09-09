<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('admin.contact');
    }

    public function edit(Request $request)
    {
        // Contact Modelからデータを取得する
        $contact = contact::find($request->id);
        if (empty($contact)) {
            abort(404);
        }
        return view('admin.contact.edit', ['contact_form' => $contact]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, contact::$rules);
        // contact Modelからデータを取得する
        $contact = contact::find($request->id);
        // 送信されてきたフォームデータを格納する
        $contact_form = $request->all();
        unset($contact_form['_token']);

        // 該当するデータを上書きして保存する
        $contact->fill($contact_form)->save();

        return redirect('admin/contact');
    }
}
