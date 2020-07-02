<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleB extends Model
{
    static function getData(): array
    {
        return [
            'from' => '2020-12-01',
            'to' => '2020-12-31',
            'price' => 50000
        ];
    }
}
