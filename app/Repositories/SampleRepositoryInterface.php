<?php


namespace App\Repositories;


use App\Value\SampleDataValue;

interface SampleRepositoryInterface
{
    public function getData(): SampleDataValue;
}