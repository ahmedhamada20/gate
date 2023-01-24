<?php

namespace App\Console\Commands;

use App\Models\Customer;
use App\Models\Setting;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailNewUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:EmailNewSms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send emails successfully in time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $thous = date('H');
        $smThous = $thous - (Setting::first()->numberSendSms);

        if ($smThous > 1) {

            $customers = Customer::select('*')->orderBy('id', 'DESC')->whereData(date('Y-m-d'))->where('time', $smThous)->get();
            if ($customers->count() > 0) {
                $data = $customers;
                Mail::to('hamada2031995@gmail.com')->send(new \App\Mail\MyMail($data));
            }
        }


    }
}
