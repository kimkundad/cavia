<?php

namespace App\Imports;

use App\point;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersImport implements ToModel, WithStartRow, WithCustomCsvSettings
{

    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $point_last = DB::table('points')->where('user_key', $row[0])->orderby('id', 'desc')->first();
        $point = 0;
        if(isset($point_last)){
            $point = $point_last->last_point;
            //20
            $get_point = ($row[2]*(2))/100;
            $point = $point + $get_point;
            
        }else{
            $get_point = ($row[2]*(2))/100;
            $point = $get_point;
        }
        
        
        
        return new point([
            //
            'user_key'  => $row[0],
            'date'  => $row[1],
            'total_valid_bet_amount'  => $row[2],
            'point'  => $get_point,
            'last_point'  => $point,
        ]); 
    }
}
