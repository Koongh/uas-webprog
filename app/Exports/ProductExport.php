<?php
namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Illuminate\Support\Facades\DB;

class ProductExport implements FromCollection, WithHeadings, WithMapping, WithStrictNullComparison, WithTitle, ShouldAutoSize {
    public function collection()
    {
        $items = Item::join('item_user', 'items.id', '=', 'item_user.item_id')->select('items.id', 'items.name', 'items.price', 'items.stock', 'items.manufacturer', 'items.updated_at', DB::raw(('SUM(item_user.quantity) as qty')))->groupBy('items.id', 'items.name', 'items.price', 'items.stock', 'items.manufacturer', 'items.updated_at')->get();
        return $items;
    }
    
    public function map($items): array{
        return [
            $items->name,
            $items->price,
            $items->stock,
            $items->manufacturer,
            $items->qty,
            $items->updated_at
        ];
    }

    public function headings(): array{
        return [
            'Nama Produk',
            'Harga',
            'Stok',
            'Produsen',
            'Jumlah Terjual',
            'Tanggal Pembelian Terbaru'
        ];
    }

    public function title(): string{
        return 'Produk';
    }
}