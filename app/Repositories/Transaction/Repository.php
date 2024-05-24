<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction;

class Repository
{
    public function getAll()
    {
        $transactions = Transaction::allAnotherFormat()->get();
        foreach ($transactions as $transaction) {
            $data[] = [$transaction->employee_id => $transaction->total_sum];
        }
        return $data ?? null;
    }
}
