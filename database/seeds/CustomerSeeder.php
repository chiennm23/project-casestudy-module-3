<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $customer = new \App\Customer();
       $customer->name='Dung';
       $customer->idCard='151875612';
       $customer->phone='0965279961';
       $customer->save();

       $customer=new \App\Customer();
       $customer->name='Chien';
       $customer->idCard='151634213';
       $customer->phone='0332783241';
        $customer->save();

    }
}
