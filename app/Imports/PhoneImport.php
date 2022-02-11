<?php

namespace App\Imports;

use App\Models\Phone;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class PhoneImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Phone([
            'name' => $row['name'],
            'phone' => $row['phone'],
            'user_id' => Auth::id(),
        ]);
    }
}
