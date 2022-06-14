<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissionGroups=[[
           'name'=>'Post'
       ],[
        'name'=>'Profile'
       ]];

       echo'------------------------------'."\n";
       echo'---------permission ropup seeding---------------------'."\n";

       foreach($permissionGroups as $key=>$value){


        $permissionGroup=new PermissionGroup();
        $permissionGroup->name=$value['name'];
        $permissionGroup->save();
        echo"------------permission group name => $permissionGroup->name------------------"."\n";


       }
       echo"------------permission group completed-----------------"."\n";

    }
}
