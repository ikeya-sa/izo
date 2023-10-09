<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Services\SlackNotificationServiceInterface;

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
    
    /**
     * @var SlackNotificationServiceInterface
     */
    private $slack_notification_service_interface;

    /**
     * @param SlackNotificationServiceInterface $slack_notification_service_interface
     */
    public function __construct(
        SlackNotificationServiceInterface $slack_notification_service_interface,
    ) {
        $this->slack_notification_service_interface =  $slack_notification_service_interface;
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
        
        // Slack通知を送信する
        $slack_message = "新しい問い合わせを受け付けました。\n名前: {$contact_form['name']}\nメールアドレス: {$contact_form['email']}\n電話番号: {$contact_form['tel']}\n種別: {$contact_form['genre']}\n内容: {$contact_form['message']}";
        $this->slack_notification_service_interface->send($slack_message);

        // バリデーションが成功した場合、thanks画面にリダイレクト
        return redirect()->route('thanks');
    }
    
    public function thanks()
    {
        return view('thanks');
    }
}
