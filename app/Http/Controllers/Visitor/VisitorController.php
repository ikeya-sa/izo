<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function discography()
    {
        return view('discography');
    }
    
    public function lesson()
    {
        return view('lesson');
    }
    
    public function add()
    {
        return view('contact');
    }

    public function create(Request $request)
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

        return redirect('confirm');
    }
    
    public function thanks()
    {
        return view('thanks');
    }
}
