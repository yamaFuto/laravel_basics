<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index() {

        //Eloquent(エロクアント)(コレクション型)
        $values = Test::all();

        //(数値)
        $count = Test::count();

        //id指定(インスタンス型)
        $first = Test::findOrFail(1);

        //エロクアント(builder型)→リレーション機能が使いやすい
        $whereBBB = Test::where('text', '=', 'bbb')->get();

        //クエリビルダ(コレクション型)
        $queryBuilder = DB::table('tests')->where('text', '=', 'aaa')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);

        //compactは文字列
        return view('tests.test', compact('values'));
    }
}


// composer→バックエンド側の管理ファイル
// package→フロントエンド側の管理ファイル

