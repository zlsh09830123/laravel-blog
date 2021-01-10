<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 獲取除了 ID 為 1 的所有用戶 ID 陣列
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 追蹤除了 1 號用戶以外的所有用戶
        $user->follow($follower_ids);

        // 除了 1 號用戶以外的所有用戶都來追蹤 1 號用戶
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
