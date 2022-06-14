<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo'------------------------------'."\n";
        echo'---------permission ropup seeding---------------------'."\n";
        $role=new Role();
        $role->name='Super Admin';
        $role->save();
        echo"---------role name os $role->name---------------------"."\n";

        $permissions=Permission::get();
        foreach($permissions as $key =>$value){
            $role->givePermissionTo($value->name);

            echo"--------permission  name os $value->name---------------------"."\n";


        }
        echo'---------permission rendded---------------------'."\n";
    }
}
