<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/data.json';
        $file = File::get($path);
        $data = json_decode($file, true);
        foreach ($data as $key => $value) {
            $data[$key]['created_at'] = Carbon::now();
            $data[$key]['updated_at'] = $data[$key]['created_at'];
        }
        DB::table('listings')->insert($data);

    }
}
