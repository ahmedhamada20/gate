<?php

namespace App\Imports;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToCollection, WithHeadingRow, WithChunkReading, ShouldQueue
{

    public $dataCustmer;


    public function __construct()
    {
        $this->dataCustmer = DB::table('customers')->select(['id', 'phone', 'duplicate', 'data'])->get();
    }


    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            $duplicate = $this->dataCustmer->where('phone', $row['phone'])->first();
            if ($duplicate) {
                DB::table('customers')->where('id', $duplicate->id)->update([
                    'duplicate' => $duplicate->duplicate + 1,
                    'data' => "2023-01-24",
                    'pagesTypes'
                ]);
            } else {
                $newCutomer = new Customer();

                $newCutomer->name = $row['name'] ?? null;
                $newCutomer->email = $row['email'] ?? null;
                $newCutomer->phone = $row['phone'] ?? null;
                $newCutomer->code = $row['code'] ?? null;
                $newCutomer->sloppy = $row['sloppy'] ?? null;
                $newCutomer->jops = $row['jops'] ?? null;
                $newCutomer->type = $row['type'] ?? null;
                $newCutomer->TitlePagesTYpe = $row['pagestypes'];
                $newCutomer->data = date('Y-m-d');
                $newCutomer->time = date('H');

                $newCutomer->save();
            }
        }
    }


    public function chunkSize(): int
    {
        return 2500;
    }
}
