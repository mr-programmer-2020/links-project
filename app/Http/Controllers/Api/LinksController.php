<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkStoreRequest;
use App\Http\Resources\LinkResource;
use App\Models\Link;
use Dirape\Token\Token;


class LinksController extends Controller
{
    public function store(LinkStoreRequest $request)
    {
        return new LinkResource(Link::firstOrCreate(
            [
                'link' => $request->link
            ],
            [
                'token' => (new Token())->uniqueString('links', 'token', 6)
            ]
        ));
    }
}
