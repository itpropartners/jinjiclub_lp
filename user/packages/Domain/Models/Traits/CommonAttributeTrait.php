<?php

namespace Domain\Models\Traits;

/**
 * CommonAttributeTrait
 */
trait CommonAttributeTrait
{
    protected $date = 'Y年m月d日';
    protected $datetime = 'Y年m月d日 H:i';

    /**
     * 作成日
     * @return string
     */
    public function getCreatedAttribute()
    {
        if (isset($this->created_at)) {
            return $this->created_at->format($this->date);
        }
    }

    /**
     * 作成日時
     * @return string
     */
    public function getCreatedTimeAttribute()
    {
        if (isset($this->created_at)) {
            return $this->created_at->format($this->datetime);
        }
    }

    /**
     * 更新日時
     * @return string
     */
    public function getUpdatedAttribute()
    {
        if (isset($this->updated_at)) {
            return $this->updated_at->format($this->date);
        }
    }

    /**
    * 退会日時
    * @return string
    */
    public function getDeletedAttribute()
    {
        if (isset($this->deleted_at)) {
            return $this->deleted_at->format($this->date);
        }
    }

    /**
    * 最終ログイン
    * @return string
    */
    public function getLastLoginAttribute()
    {
        if (!empty($this->last_login_at)) {
            return $this->last_login_at->format($this->date);
        }
    }
}
