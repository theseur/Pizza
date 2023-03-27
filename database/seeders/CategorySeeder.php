<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('category')->delete();
        $statement = "ALTER TABLE category AUTO_INCREMENT = 1;";
        DB::unprepared($statement);
    
        $csv = dirname(__FILE__) . '/data/' . 'category.txt';
        $file_handle = fopen($csv, "r");
    
        echo PHP_EOL;
        echo '------------------------------------------ open file ------------------------------------------';
        echo PHP_EOL;
    
        while (!feof($file_handle)) {
    
            $line = fgetcsv($file_handle,1000, "\t");
            if (empty($line)) {
                continue; // skip blank lines
            }
            if ($line[0] == 'cname') {
                continue; // skip column headers
            }
    
    /*
    CSV column names
   
    0 ...cname adatbázisbab: pname lett
    1 ... price
   
    */
    
                $insert = array();
                $insert['pname'] = $line[0];
                $insert['price'] = $line[1];
                
    
    // insert
                DB::table('category')->insert($insert);
    
                echo 'insert: ' . $line[1] ;
                echo PHP_EOL;
    
            }
            fclose($file_handle);
    
            echo PHP_EOL;
            echo '------------------------------------------ close file ------------------------------------------';
            echo PHP_EOL;
        
    
        }
    
       
} // run
    

