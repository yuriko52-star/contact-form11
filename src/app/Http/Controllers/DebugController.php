<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function show($view)
    {
        // 例: /debug/index → resources/views/index.blade.php
        // 例: /debug/pages/home → resources/views/pages/home.blade.php

        // "."区切りでも "/"区切りでも対応可能にする
        $view = str_replace('/', '.', $view);

        if (view()->exists($view)) {
            return view($view);
        } else {
            abort(404, "指定されたビューが存在しません: $view");
        }
    }
}
