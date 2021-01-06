<?php

namespace Domain\Models\Traits;

/**
 * CommonScopeTrait
 */
trait CommonScopeTrait
{
    /**
     * 最新のレコードを取得
     * @param  \Illuminate\Database\Query\Builder $query
     * @param  integer $cnt (optional) 取得レコード数(default:1)
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeLatests($query, $cnt = 1)
    {
        return $query->latest()->take($cnt);
    }

    /**
     * IDをキーにしたリストを返却する
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeList($query)
    {
        return $query->get()->pluck('name', 'id');
    }

    /**
     * 活動中ユーザーを取得
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeActiveUser($query)
    {
        return $query
            ->whereNull('deleted_at') // 未退会
            ->where('registered_profile_flag', 1); // プロフィール登録済み
    }

    /**
     * カテゴリー１のリストを取得
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeList1($query)
    {
        return $query->where('depth', 1)->get()->pluck('name', 'id');
    }

    /**
     * カテゴリー２のリストを取得
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeList2($query)
    {
        return $query->where('depth', 2)->get()->pluck('name', 'id');
    }

    /**
     * カテゴリー３のリストを取得
     * @param  \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeList3($query)
    {
        return $query->where('depth', 3)->get()->pluck('name', 'id');
    }

    /**
     * 汎用 日付範囲 検索
     * @param  \Illuminate\Database\Query\Builder $query
     * @param  string $prefix 項目名
     * @param  array $param  パラーメータ
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeWhereDatetimeFromTo($query, $prefix, $param)
    {
        if (!empty($param[$prefix.'_from']) && !empty($param[$prefix.'_to'])) {
            return $query->whereBetween($prefix, [$param[$prefix.'_to'], $param[$prefix.'_from']]);
        }
        if (!empty($param[$prefix.'_from'])) {
            return $query->where($prefix, '<=', $param[$prefix.'_from']);
        }
        if (!empty($param[$prefix.'_to'])) {
            return $query->where($prefix, '>=', $param[$prefix.'_to']);
        }
        return $query;
    }

    /**
     * 汎用 範囲検索
     * @param  \Illuminate\Database\Query\Builder $query
     * @param  string $prefix 項目名
     * @param  array $param  パラーメータ
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeWhereFromTo($query, $prefix, $param)
    {
        if (!empty($param[$prefix.'_from']) && !empty($param[$prefix.'_to'])) {
            return $query->whereBetween($prefix, [$param[$prefix.'_from'], $param[$prefix.'_to']]);
        }
        if (!empty($param[$prefix.'_from'])) {
            return $query->where($prefix, '>=', $param[$prefix.'_from']);
        }
        if (!empty($param[$prefix.'_to'])) {
            return $query->where($prefix, '<=', $param[$prefix.'_to']);
        }
        return $query;
    }
}
