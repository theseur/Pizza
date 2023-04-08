<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('order')->delete();
        $statement = "ALTER TABLE category AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
    
        $csv = dirname(__FILE__) . '/data/' . 'order2.txt';
        $file_handle = fopen($csv, "r");
    
        echo PHP_EOL;
        echo '------------------------------------------ open file ------------------------------------------';
        echo PHP_EOL;
        $i=1;
    
        while (!feof($file_handle)) {
    
            $line = fgetcsv($file_handle,1000, "\t");
            if (empty($line)) {
                continue; // skip blank lines
            }
            if ($line[0] == 'pizzaname') {
                continue; // skip column headers
            }
    
    /*
    CSV column names
   
    0 ...pizzaname
    1 ... amount
    2 ... taken
    3 ... dispatched

   
    */
    
                $insert = array();
                $insert['id'] = $i;
                $insert['pizzaname'] = $line[0];
                $insert['amount'] = $line[1];
                $insert['taken'] = $line[2];
                $insert['dispatched'] = $line[3];
                
    
    // insert
                DB::table('order')->insert($insert);
    
                echo 'insert: ' . $line[1] ;
                echo PHP_EOL;
                $i++;
    
            }
            fclose($file_handle);
    
            echo PHP_EOL;
            echo '------------------------------------------ close file ------------------------------------------';
            echo PHP_EOL;
        
    
        }
    
       
} // run
    

