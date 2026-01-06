<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            View::share('user', auth()->user());

            $menus = Menu::where('is_active', 1)
                ->orderBy('sort_order', 'asc')
                ->get();

            View::share('menus', $menus);

            return $next($request);
        });
    }
}
