<?php

namespace App\Http\Controllers\Transaction;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Request $request)
    {
        $transactions = Transaction::select('id')->get();
        Transaction::destroy($transactions);
        return response()->noContent(204);
    }
}
