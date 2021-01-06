<?php

namespace Domain\Models\User;

use Domain\Models\Traits\ModelCommonTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * ユーザーエンティティ
 */
class User extends Authenticatable
{
    use Notifiable;
    use ModelCommonTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'company',
        'position',
        'birthday_year',
        'birthday_month',
        'birthday_day',
        'job_change_flg',
        'side_business_flg',
        'note',
    ];

    // not null対象カラム
    protected $notNullColumns = [
        'first_name',
        'last_name',
        'email',
        'company',
    ];

}
