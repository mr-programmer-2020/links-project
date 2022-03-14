<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkRedirectRequest;
use App\Models\Link;

class LinksController extends Controller
{
    public function redirect(LinkRedirectRequest $request, Link $link)
    {
        return redirect()->to($link->link);
    }

    public function create()
    {
        return view('welcome');
    }

}
