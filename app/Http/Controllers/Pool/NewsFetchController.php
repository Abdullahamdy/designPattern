<?php

namespace App\Http\Controllers\Pool;

use App\Http\Controllers\Controller;
use App\Jobs\FetchNewsJob;

class NewsFetchController extends Controller
{
    public function fetch(string $source)
    {
        FetchNewsJob::dispatch($source);

        return response()->json([
            'status' => 'queued',
            'source' => $source,
        ]);
    }
}
