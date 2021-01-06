<?php
namespace Domain\Models\User;

/**
 * ユーザーリポジトリインターフェイス
 */
interface UserRepositoryInterface
{
    /**
     * 取得
     *
     * @param string $id
     * @return User
     */
    public function get(string $id): User;

    /**
     * 更新or追加
     *
     * @param User $user
     * @return void
     */
    public function updateOrInsert(User $user): void;
}
