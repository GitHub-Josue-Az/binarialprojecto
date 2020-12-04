<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class listadocumples extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:cumples';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $number = 1;

        if ($number == 1) {
            
            fcm()
                ->to(['fxwGGqMqRIKXF4EtiHIcTf:APA91bHYQbCgsgzDEiUc07aVw3GllGHvkyKcSivUKUSOF_bboPgd9I1MIz67zRJUQf4BiFTsMbSgCuCDhyeYYvX7KxRs2txb8gXReHCHWZwJbmtqkcUd7vr1NyPwgANsIef1rR-yyTrs']) 
                ->notification([
                    'title' => 'Cumpleaños para mañana 🎊🎊🎊',
                    'body' =>  'ones',
                ])->send();

            return;
        }
         fcm()
                 ->to(['fxwGGqMqRIKXF4EtiHIcTf:APA91bHYQbCgsgzDEiUc07aVw3GllGHvkyKcSivUKUSOF_bboPgd9I1MIz67zRJUQf4BiFTsMbSgCuCDhyeYYvX7KxRs2txb8gXReHCHWZwJbmtqkcUd7vr1NyPwgANsIef1rR-yyTrs']) 
                ->notification([
                    'title' => 'Cumpleaños para mañana 🎊🎊🎊',
                    'body' =>  'two',
                ])->send();

        return;
    }

}
