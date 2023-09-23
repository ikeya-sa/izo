<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $posts = Contact::orderBy('created_at', 'desc')->paginate(10); // 1ページあたり10件のデータを取得
        return view('admin.contact', ['posts' => $posts]);
    }

    public function edit(Request $request)
    {
        // Contact Modelからデータを取得する
        $contact = Contact::find($request->id);
        if (empty($contact)) {
            abort(404);
        }
        return view('admin.contact.edit', ['contact_form' => $contact]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Contact::$rules_admin);
        // Contact Modelからデータを取得する
        $contact = Contact::find($request->id);
        // 送信されてきたフォームデータを格納する
        $contact_form = $request->all();
        // User Modelからデータを取得して追加する
        $contact_form['user_name'] = Auth::user()->name;
        
        unset($contact_form['_token']);

        // 該当するデータを上書きして保存する
        $contact->fill($contact_form)->save();

        return redirect()->route('admin.contact')->with('update-success', '回答記録が更新されました。');
    }
}
