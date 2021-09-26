<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortlinkRequest;
use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
        return view('short-link.index',compact('shortLinks'));
    }

    public function store(ShortlinkRequest $request)
    {

        $input['link'] = $request->link;
        $input['code'] = Str::random(5);
        ShortLink::create($input);
        return redirect()->route('shorten.index')->with('success','Shorten Link Generated Successfully');
    }

    public function shortenLink($code)
    {
          $find = ShortLink::where('code',$code)->first();
          return redirect($find->link);
    }

}
