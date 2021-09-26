<?php

namespace App\Http\Controllers;

use App\Action\UrlShortenActions;
use App\Http\Requests\ShortlinkRequest;
use App\Models\ShortLink;
use Illuminate\Http\RedirectResponse;

class ShortLinkController extends Controller
{
    public function index(UrlShortenActions $shortenActions)
    {
        return view('short-link.index', [
            'shortLinks' => $shortenActions->findAll()
        ]);
    }

    public function store(ShortlinkRequest $request, UrlShortenActions $shortenActions)
    {
        $shortenActions->create( $request->input('link') );

        return redirect()->route('shorten.index')->with('success','Shorten Link Generated Successfully');
    }

    public function forwardUrl($code, UrlShortenActions $shortenActions): RedirectResponse
    {
          return redirect($shortenActions->findOneByCode($code)->link);
    }
}
