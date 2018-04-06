<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    private function announcements()
    {
        return array(
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => str_random(18),
                'content' => str_random(100),
                'tag' => 'episkeptes',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        );
    }

    private function insured()
    {
        return array(
            [
                'name' => 'Κώστας',
                'surname' => 'Χατζόπουλος',
                'afm' => 123456789,
                'amka' => 12345678901,
                'ama' => 1234567,
                'retired' => false,
            ],
            [
                'name' => 'Δημήτριος',
                'surname' => 'Κρικώνης',
                'afm' => 987654321,
                'amka' => 91025488458,
                'ama' => 7654321,
                'retired' => true,
            ],
        );
    }

    private function users()
    {
        return array(
            [
                'username' => 'kwstarikanos',
                'email' => 'kwstarikanos@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'username' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'username' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        );
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert($this->users());
        DB::table('announcements')->insert($this->announcements());
        DB::table('insured')->insert($this->insured());
    }
}
