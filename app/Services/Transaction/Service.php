<?php

namespace App\Services\Transaction;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        $sumPerHour = 300;
        $data['sum'] = $data['hours'] * $sumPerHour;
        try {
            DB::beginTransaction();
            Transaction::create($data);
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->noContent(400);
        }
        return response()->noContent(201);
    }
}
