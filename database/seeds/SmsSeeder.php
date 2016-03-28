<?php

use Illuminate\Database\Seeder;
use App\SmsGateway as SMS;
class SmsSeeder extends Seeder
{
  public $gateways = [
    ['name' => 'Sprint', 'gateway' => '@messaging.sprintpcs.com'],
    ['name' => 'Verizon', 'gateway' => '@vtext.com'],
    ['name' => 'T-Mobile', 'gateway' => '@tmomail.net'],
    ['name' => 'AT&T', 'gateway' => '@txt.att.net'],
    ['name' => 'Cricket', 'gateway' => '@sms.mycricket.com'],
    ['name' => 'MetroPCS', 'gateway' => '@mymetropcs.com'],
    ['name' => 'Alltel', 'gateway' => '@sms.alltelwireless.com'],
  ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach($this->gateways as $gateway){
          SMS::Create([
            'name' => $gateway['name'],
            'gateway' => $gateway['gateway'],
            ]);
        }
    }
}
