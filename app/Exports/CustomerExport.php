<?php

namespace App\Exports;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;

class CustomerExport implements FromCollection, WithStyles ,WithHeadings
{
    use Exportable;

    public function __construct($day)
    {
        $this->day = $day;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('I')->getFont()->setBold(true)->getColor();
    }

    public function collection()
    {
        return DB::table('customers')->orderByDesc('id')->where('data', $this->day)->get([


            'name', 'code', 'phone', 'sloppy', 'jops', 'email', 'duplicate', 'data', 'pagesTypes', 'type','created_at',

        ]);
    }


    public function headings(): array
    {
        return [
            'اسم العميل',
            'كود الدوله',
            'رقم الهاتف',
            'المؤهل الدراسى الحاصل عليه',
            'الوظفيه',
            'البريد الالكتروني',
            'عدد المكرر من قبل',
            'تاريخ اخر تسجيل',
            'الصفحات',
            'التخصص',
            'تاريخ اول تسجيل',
        ];
    }
}
