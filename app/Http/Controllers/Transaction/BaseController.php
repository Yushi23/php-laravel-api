<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Repositories\Transaction\Repository;
use App\Services\Transaction\Service;

class BaseController extends Controller
{
    public function __construct(protected Repository $repository, protected Service $service)
    {}
}
