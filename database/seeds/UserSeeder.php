<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\hash;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0;');

        $user0 = new User();

        $user0->name = 'admin';
        $user0->email = 'admin@evac.com.br';
        $user0->password = hash::make('admin123');
        $user0->save();
        
        $user1 = new User();

        $user1->name = 'pedro';
        $user1->email = 'pedro@evac.com.br';
        $user1->password = hash::make('pedro123');
        $user1->save();

        $user2 = new User();

        $user2->name = 'jorge';
        $user2->email = 'jorge@evac.com.br';
        $user2->password = hash::make('jorge123');
        $user2->save();

        $user3 = new User();

        $user3->name = 'maria';
        $user3->email = 'maria@evac.com.br';
        $user3->password = hash::make('maria123');
        $user3->save();

        $user4 = new User();

        $user4->name = 'lucas';
        $user4->email = 'lucas@evac.com.br';
        $user4->password = hash::make('lucas123');
        $user4->save();

        $user5 = new User();

        $user5->name = 'carlos';
        $user5->email = 'carlos@evac.com.br';
        $user5->password = hash::make('carlos123');
        $user5->save();

        $user6 = new User();

        $user6->name = 'beatriz';
        $user6->email = 'beatriz@evac.com.br';
        $user6->password = hash::make('beatriz123');
        $user6->save();

        $user7 = new User();

        $user7->name = 'luciano';
        $user7->email = 'luciano@evac.com.br';
        $user7->password = hash::make('luciano123');
        $user7->save();
        
        $user8 = new User();

        $user8->name = 'fabio';
        $user8->email = 'fabio@evac.com.br';
        $user8->password = hash::make('fabio123');
        $user8->save();
        
        $user9 = new User();

        $user9->name = 'italo';
        $user9->email = 'italo@evac.com.br';
        $user9->password = hash::make('italo123');
        $user9->save();      

        DB::statement('SET foreign_key_checks = 1;');


    }
}
