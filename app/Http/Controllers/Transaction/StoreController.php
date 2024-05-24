<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $request->input();
        return $this->service->store($data);
    }
}
