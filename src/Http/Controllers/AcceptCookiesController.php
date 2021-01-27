<?php

namespace TJGazel\Laravel\AcceptCookies\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AcceptCookiesController extends Controller
{
    public function accept(Request $request)
    {
        $sessionName = Config::get('accept-cookies.sessionName');
        session(["{$sessionName}" => $request->accept]);

        return response()->json(['success' => true]);
    }
}
