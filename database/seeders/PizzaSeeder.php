<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('pizza')->delete();
        $statement = "ALTER TABLE category AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
    
        $csv = dirname(__FILE__) . '/data/' . 'pizza.txt';
        $file_handle = fopen($csv, "r");
    
        echo PHP_EOL;
        echo '------------------------------------------ open file ------------------------------------------';
        echo PHP_EOL;
    
        while (!feof($file_handle)) {
    
            $line = fgetcsv($file_handle,1000, "\t");
            if (empty($line)) {
                continue; // skip blank lines
            }
            if ($line[0] == 'pname') {
                continue; // skip column headers
            }
    
    /*
    CSV column names
   
    0 ...pname
    1 ... categoryname
    2 ... vegetarian

   
    */
    
                $insert = array();
                $insert['pname'] = $line[0];
                $insert['categoryname'] = $line[1];
                $insert['vegetarian'] = $line[2];
                
    
    // insert
                DB::table('pizza')->insert($insert);
    
                echo 'insert: ' . $line[1] ;
                echo PHP_EOL;
    
            }
            fclose($file_handle);
    
            echo PHP_EOL;
            echo '------------------------------------------ close file ------------------------------------------';
            echo PHP_EOL;
        
    
        }
    
       
} // run
    

