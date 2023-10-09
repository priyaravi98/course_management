<?php

namespace App\Imports;

use App\Models\Userdetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class UsersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new Userdetails([
            'user_id'     => $row[0],
            'firstname'     => $row[1],
            'lastname'     => $row[2],
            'active'     => $row[3],
            'email'    => $row[4], 
            'country' => $row[5],
        ]);
    }
}
