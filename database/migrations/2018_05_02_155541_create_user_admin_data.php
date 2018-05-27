<?php

use CodeFlix\Models\User;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdminData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $model = (new CodeFlix\Models\User)->create([
            'name' => env('ADMIN_DEFAULT_NAME', 'Administrator'),
            'email' => env('ADMIN_DEFAULT_EMAIL', 'admin@user.com'),
            'password' => bcrypt(env('ADMIN_DEFAULT_PASSWORD', 'secret')),
            'role' => User::ROLE_ADMIN
        ]);
        $model->verified = true;
        $model->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * @throws Exception
     */
    public function down()
    {
        $user = (new CodeFlix\Models\User)->where('email', '=', env('ADMIN_DEFAULT_PASSWORD', 'secret'))->first();
        if($user instanceof User) {
            $user->delete();
        }
    }
}
