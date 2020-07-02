<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SampleDataService;

class SampleController extends Controller
{
    private SampleDataService $sampleDataService;

    public function __construct(SampleDataService $sampleDataService)
    {
        $this->sampleDataService = $sampleDataService;
    }

    public function index()
    {
        $sampleData = $this->sampleDataService->get();
        dd($sampleData);
    }
}
