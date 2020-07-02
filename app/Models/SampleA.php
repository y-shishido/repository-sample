<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleA extends Model
{
    //
    static function getData(): array
    {
        return [
            'from-date' => '2020-01-01',
            'to-date' => '2020-01-31',
            'price' => 10000,
        ];
    }
}
