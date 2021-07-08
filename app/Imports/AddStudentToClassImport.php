<?php

namespace App\Imports;

use Illuminate\Database\Eloquent\Model;
// use Maatwebsite\Excel\Concerns\ToModel;
use App\models\User;
use App\models\ClassInfor;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AddStudentToClassImport implements WithHeadingRow
{

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        dd($row);
        $user = User::where('user_id', $row['ma_nhan_su'] - 100000)->update([
            'owner_card_bank' => $row['chu_the'],
            'bank_name' => $row['ten_ngan_hang'],
            'bank_number' => $row['so_the'],
            'province_bank' => $row['dia_chi_ngan_hang'],
            'agency_bank' => $row['chi_nhanh']
        ]);
        // $question = User::where('user_id', $row['ma_nhan_su'] - 100000)->update([
        //     'owner_card_bank' => $row['chu_the'],
        //     'bank_name' => $row['ten_ngan_hang'],
        //     'bank_number' => $row['so_the'],
        //     'province_bank' => $row['dia_chi_ngan_hang'],
        //     'agency_bank' => $row['chi_nhanh']
        // ]);

        return null;
    }

    public function headingRow(): int
    {
        return 1;
    }

}