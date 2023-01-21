<?php

namespace App\Http\Controllers;

use App\Services\WPDumpService;
use Illuminate\Http\Request;

class WPDumpController extends Controller
{
    private $WPDumpService;
    public function __construct(WPDumpService $WPDumpService)
    {
        $this->WPDumpService = $WPDumpService;
    }

    public function getShows(){
        $this->WPDumpService->getShows();
    }
    public function getDjs(){
        $this->WPDumpService->getDjs();
    }

}
