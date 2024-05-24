<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\Service;

class BaseController extends Controller
{
    public function __construct(protected Service $service)
    {
    }
}
