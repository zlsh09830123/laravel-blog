<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id; // 只有當前登入用戶為管理員且刪除的用戶對象不能為自己才能執行刪除動作
    }

    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id; // 自己不能追蹤自己
    }
}
