<?php

namespace App\Imports;

use App\Models\Coursedetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CoursesImport implements ToModel,WithStartRow
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
        return new Coursedetails([
            
                'course_id'     => $row[0],
                'course_type'     => $row[1],
                'session_id'     => $row[2],
                'title'     => $row[3],
                'descep'    => $row[4], 
                'incharge_email' => $row[5],
                'start_time'     => $row[6],
                'end_time'     => $row[7],
                'instuctor_email'     => $row[8],
                'duration'     => $row[9],
                'credit_hour'    => $row[10], 
                'cpe_hour' => $row[11],
                'contact_hour' => $row[12],
        ]);
    }
    
}
