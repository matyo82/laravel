<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check()
    {
        if (auth()->user()) {
            switch (auth()->user()->user_type) {
                case 0:
                    return redirect(route('front.home'));
                    break;
                case 1:
                    return redirect(route('admin.home'));
                    break;
                case 2:
                    return redirect(route('admin.home'));
                    break;
                default:
                    return redirect(route('front.index'));
                    break;
            }
        } else {
            abort(403);
        }
    }
}
