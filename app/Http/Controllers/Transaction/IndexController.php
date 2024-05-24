<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        return $this->repository->getAll();
    }
}
