<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function admin()
    {
        return view('admin.admin');
    }
    
    public function add()
    {
        return view('admin.admin.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, admin::$rules);

        $admin = new admin;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$admin->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $admin->image_path = basename($path);
        } else {
            $admin->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $admin->fill($form);
        $admin->save();

        return redirect('admin/admin');
    }
    
    public function edit(Request $request)
    {
        // admin Modelからデータを取得する
        $admin = admin::find($request->id);
        if (empty($admin)) {
            abort(404);
        }
        return view('admin.admin.edit', ['admin_form' => $admin]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, admin::$rules);
        // admin Modelからデータを取得する
        $admin = admin::find($request->id);
        // 送信されてきたフォームデータを格納する
        $admin_form = $request->all();
        unset($admin_form['_token']);

        // 該当するデータを上書きして保存する
        $admin->fill($admin_form)->save();

        return redirect('admin/admin');
    }
}
