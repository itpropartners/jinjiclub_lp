<?php
namespace Domain\Models\User;

/**
 * ユーザーリポジトリ
 */
class UserRepository implements UserRepositoryInterface
{
    /**
     * 取得
     *
     * @param string $id
     * @return User
     */
    public function get(string $id): User
    {
        $user = User::find($id);
        return $user ?? null;
    }

    /**
     * 更新or追加
     *
     * @param User $user
     * @return void
     */
    public function updateOrInsert(User $user): void
    {
        $user->save();
    }
}
