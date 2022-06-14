<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[[
            'name'=>'Post Create',
            'permission_group_id'=>PermissionGroup::where('name','Post')->first()->id

        ],
        [
         'name'=>'Post List',
         'permission_group_id'=>PermissionGroup::where('name','Post')->first()->id

        ],
        [
            'name'=>'Post Edit',
            'permission_group_id'=>PermissionGroup::where('name','Post')->first()->id

        ],
        [
            'name'=>'Post Delete',
            'permission_group_id'=>PermissionGroup::where('name','Post')->first()->id

        ],
        [
            'name'=>'Profile Create',
            'permission_group_id'=>PermissionGroup::where('name','Profile')->first()->id

        ],
        [
            'name'=>'Profile List',
            'permission_group_id'=>PermissionGroup::where('name','Profile')->first()->id

        ],
        [
            'name'=>'Profile Edit',
            'permission_group_id'=>PermissionGroup::where('name','Profile')->first()->id

        ],
        [
            'name'=>'Profile Delete',
            'permission_group_id'=>PermissionGroup::where('name','Profile')->first()->id

           ]




    ];

        echo'------------------------------'."\n";
        echo'---------permission ropup seeding---------------------'."\n";

        foreach($permissions as $key=>$value){


         $permission=new Permission();
         $permission->name=$value['name'];
         $permission->permission_group_id=$value['permission_group_id'];
         $permission->save();
         echo"------------permission group name => $permission->name------------------"."\n";


        }
        echo"------------permission group completed-----------------"."\n";
    }
}
