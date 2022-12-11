<?php
namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Illuminate\Support\Facades\DB;

class UserExport implements FromCollection, WithHeadings, WithMapping, WithStrictNullComparison, WithTitle, ShouldAutoSize {
    public function collection()
    {
        $users = User::join('item_user', 'users.id', '=', 'item_user.user_id')->select('users.id', 'users.name', DB::raw(('SUM(item_user.quantity) as qty')))->groupBy('users.id', 'users.name')->get();
        return $users;
    }
    
    public function map($users): array{
        return [
            $users->name,
            $users->qty
        ];
    }

    public function headings(): array{
        return [
            'Nama Pegawai',
            'Jumlah Penjualan'
        ];
    }

    public function title(): string{
        return 'Pegawai';
    }
}