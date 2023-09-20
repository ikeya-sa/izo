<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function admin(Request $request)
    {
        $posts = User::all();
        return view('admin.admin', ['posts' => $posts]);
    }
    
    public function add()
    {
        return view('admin.admin.create');
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    public function create(Request $request)
    {
        // Validationをかける
        $this->validator($request->all())->validate();

        // バリデーションが成功した場合、ユーザーを登録する
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // 登録が成功した場合、Admin管理画面にリダイレクトする
        return redirect()->route('admin.admin')->with('create-success', '管理者が追加されました。');
    }
    
    public function edit(Request $request)
    {
        // admin Modelからデータを取得する
        $admin = User::find($request->id);
        if (empty($admin)) {
            abort(404);
        }
        return view('admin.admin.edit', ['admin_form' => $admin]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($request->id),
                ],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        // User Modelからデータを取得する
        $admin = User::find($request->id);
        if (!$admin) {
            abort(404);
        }

        // 送信されてきたフォームデータを格納する
        $admin_form = $request->all();
        unset($admin_form['_token']);

        // パスワードが変更された場合に新しいパスワードをbcryptでハッシュ化して保存
        if ($request->filled('password')) {
            $admin_form['password'] = bcrypt($request->input('password'));
        }

        // 該当するデータを上書きして保存する
        $admin->fill($admin_form)->save();

        // 更新が成功した場合、Admin管理画面にリダイレクトする
        return redirect()->route('admin.admin')->with('update-success', '管理者が更新されました。');
    }
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $admin = User::find($request->id);

        // 削除する
        $admin->delete();

        return redirect()->route('admin.admin')->with('delete-success', '管理者が削除されました。');
    }
}
