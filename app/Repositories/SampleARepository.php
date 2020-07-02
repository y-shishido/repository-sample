<?php


namespace App\Repositories;


use App\Models\SampleA;
use App\Value\SampleDataValue;

class SampleARepository implements SampleRepositoryInterface
{
    public function getData(): SampleDataValue
    {
        $data = SampleA::getData();
        $value = new SampleDataValue();
        $value->setFromDate($data['from-date']);
        $value->setToDate($data['to-date']);
        $value->setPrice($data['price']);

        return $value;
    }
}