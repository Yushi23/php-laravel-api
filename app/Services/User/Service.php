<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data)
    {
        $data['password'] = Hash::make($data['password']);
        $userExists = User::where('email', $data['email'])->exists();
        try {
            DB::beginTransaction();
            if ($userExists) {
                throw new \Exception();
            }
            User::create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->noContent(400);
        }
        return response()->noContent(201);
    }
}
