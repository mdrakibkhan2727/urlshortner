<?php

namespace App\Action;


use App\Models\ShortLink;
use Illuminate\Support\Str;

class UrlShortenActions
{
    public function create(string $url): ShortLink
    {
        return ShortLink::create([
            'link' => $url,
            'code' => Str::random(5),
        ]);
    }

    public function findAll()
    {
        return ShortLink::latest()->get();
    }

    public function findOneByCode(string $code): ?ShortLink
    {
        return ShortLink::where('code', $code)->firstOrFail();
    }
}
