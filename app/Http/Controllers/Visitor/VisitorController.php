<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Contact;
use App\Mail\ContactMail;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('created_at');
        return view('index', ['posts' => $posts]);
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
    
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validationをかける
        $this->validate($request, Contact::$rules);
        // フォームデータをセッションに格納する
        $request->session()->put('contact', $request->all());
        
        return redirect()->route('confirm');
    }

        public function confirm()
    {
        return view('confirm');
    }
    
    public function create(Request $request)
    {
        // Validationをかける
        $this->validate($request, Contact::$rules);

        // 送信されてきたフォームデータを格納する（_tokenを除く）
        $contact_form = $request->except('_token');

        // Contactモデルを使用してデータベースに保存する
        Contact::create($contact_form);
        
        // メールを送信する
        Mail::send(new ContactMail($contact_form));

        // バリデーションが成功した場合、thanks画面にリダイレクト
        return redirect()->route('thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }
}
