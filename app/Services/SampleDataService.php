<?php


namespace App\Services;


use App\Repositories\SampleRepositoryInterface;

class SampleDataService
{
    private SampleRepositoryInterface $sampleRepository;

    public function __construct(SampleRepositoryInterface $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    public function get()
    {
        return $this->sampleRepository->getData();
    }

}