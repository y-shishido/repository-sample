<?php


namespace App\Repositories;

use App\Models\SampleB;
use App\Value\SampleDataValue;

class SampleBRepository implements SampleRepositoryInterface
{
    public function getData(): SampleDataValue
    {
        $data = SampleB::getData();
        $value = new SampleDataValue();
        $value->setFromDate($data['from']);
        $value->setToDate($data['to']);
        $value->setPrice($data['price']);

        return $value;
    }
}