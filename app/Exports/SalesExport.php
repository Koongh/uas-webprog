<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class SalesExport implements WithMultipleSheets{
    public function sheets(): array{
        $items = new ProductExport();
        $users = new UserExport();

        return [$items, $users];
    }
}