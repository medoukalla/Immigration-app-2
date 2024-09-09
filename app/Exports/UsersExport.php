<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select("id", "name", "email", 'game_id')->where('is_admin', 0)->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "Name", "Email", 'Dofus ID'];
    }
}
