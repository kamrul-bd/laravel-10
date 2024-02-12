<?php

namespace Kamrul\Helpers;

use Illuminate\Support\Facades\Http;

class Helper {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}