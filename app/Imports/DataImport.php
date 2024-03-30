<?php
  
namespace App\Imports;
  
use App\Models\A1topup_operators;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
  
class DataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new A1topup_operators([
            'operator_name'     => $row['name'],
            'operator_code'    => $row['code'], 
        'operator_service' => $row['service']
        ]);
    }
}