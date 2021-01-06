<?php

namespace App\Http\Requests\Traits;

use Illuminate\Validation\Validator;
use Arr;

/**
 * 共通フォームリクエストトレイと
 */
trait CommonRequestTrait
{
    /**
     * 西暦年月日のフィールドを結合したフィールドを追加する<br>
     * ex) join_date => join_date_year,join_date_month,join_date_dayが完備の場合、
     *   field: join_date , value: 日付文字列('Y-m-d') を追加
     * @param $fieldName
     */
    public function addDateFieldYmd($fieldName, $required=false, $suffix1='_year', $suffix2='_month', $suffix3='_day')
    {
        $this->addFieldCombineThreeFields($fieldName, $required, '-', $suffix1, $suffix2, $suffix3);
    }

    /**
     * 西暦年月日のフィールドを結合したフィールドを追加する<br>
     * ex) join_date => join_date_year,join_date_monthが完備の場合、
     *   field: join_date , value: 日付文字列('Y-m-d') を追加
     * @param $fieldName
     */
    public function addDateFieldYm($fieldName, $required=false, $suffix1='_year', $suffix2='_month')
    {
        $this->addFieldCombineTwoFields($fieldName, $required, '-', $suffix1, $suffix2, '-01');
    }

    /**
     * 分割された2つフィールドを結合したフィールドを追加する
     * @param string $fieldName 項目名
     * @param bool $required default:false
     * @param string $delimiter default:blank
     * @param string $suffix1 default:blank
     * @param string $suffix2 default:blank
     */
    public function addFieldCombineTwoFields($fieldName, $required=false, $delimiter = '', $suffix1='', $suffix2='', $appendSuffix='')
    {
        $param = [$suffix1, $suffix2, $appendSuffix];

        $this->addFieldCombineCommon(function ($fieldName, $delimiter, $suffix1, $suffix2, $appendSuffix) {
            $newFielde = null;

            // 完備の場合フィールド値を生成
            if (($val1 = $this->input($fieldName.$suffix1)) && ($val2 = $this->input($fieldName.$suffix2))) {
                $newFielde = implode($delimiter, [$val1, $val2]) . $appendSuffix;
            }

            return $newFielde;
        }, $fieldName, $required, $delimiter, $param);
    }

    /**
     * 分割された3つフィールドを結合したフィールドを追加する
     * @param $fieldName 項目名
     * @param string $delimiter default:blank
     * @param bool $required default:false
     * @param string $suffix1 default:blank
     * @param string $suffix2 default:blank
     * @param string $suffix3 default:blank
     */
    public function addFieldCombineThreeFields($fieldName, $required=false, $delimiter = '', $suffix1='', $suffix2='', $suffix3='')
    {
        $param = [$suffix1, $suffix2, $suffix3];

        $this->addFieldCombineCommon(function ($fieldName, $delimiter, $suffix1, $suffix2, $suffix3) {
            $newFielde = null;

            // 完備の場合フィールド値を生成
            if (($val1 = $this->input($fieldName.$suffix1)) && ($val2 = $this->input($fieldName.$suffix2)) && ($val3 = $this->input($fieldName.$suffix3))) {
                $newFielde = implode($delimiter, [$val1, $val2, $val3]);
            }

            return $newFielde;
        }, $fieldName, $required, $delimiter, $param);
    }

    /**
     * 分割された Nつフィールドを結合したフィールドを追加する
     * @param callable  $callback
     * @param string $fieldName 項目名
     * @param boolean $required
     * @param string  $delimiter
     * @param array   $params
     */
    private function addFieldCombineCommon($callback, $fieldName, $required=false, $delimiter = '', $params = [])
    {
        $keys = explode('.', $fieldName);

        // ドット(.)なし
        if (count($keys) < 1) {

            // 完備の場合フィールド値を生成
            $callbackParam = array_merge([$fieldName, $delimiter], $params);

            $newFielde = call_user_func_array($callback, $callbackParam);

            // 必須項目 or フィールド値がある場合は、リクエストパラメータにフィールドを追加する
            if ($required || $newFielde != null) {
                $this->merge([$fieldName => $newFielde]);
            }

            return ;
        }

        // ドット(.)あり
        $pos_wild = Arr::where($keys, function ($value, $key) {
            return $value == '*';
        });

        // ワイルドカードなし
        if (count($pos_wild) < 1) {
            $callbackParam = array_merge([$fieldName, $delimiter], $params);

            $this->addFieldDotName(
                $required,
                $fieldName,
                call_user_func_array($callback, $callbackParam)
            );
        } else {
            // ワイルドカードあり
            $data = $this->all();

            $pos_wild = key($pos_wild);

            $itemName = $keys[$pos_wild - 1];

            $replaceTargets = array_keys($data[$itemName]);

            foreach ($replaceTargets as $value) {
                // 「*」を置換
                $keys[$pos_wild] = $value;
                // ドット文字列に変換
                $fieldName = implode('.', $keys);

                $callbackParam = array_merge([$fieldName, $delimiter], $params);

                $this->addFieldDotName(
                    $required,
                    $fieldName,
                    call_user_func_array($callback, $callbackParam)
                );
            }
        }
    }

    /**
     * ドット項目のマージ
     * @param boolean $required
     * @param string $fieldName 項目名
     * @param mixed $newFielde
     */
    private function addFieldDotName($required, $fieldName, $newFielde)
    {
        // 必須項目 or フィールド値がある場合は、リクエストパラメータにフィールドを追加する
        if ($required || $newFielde != null) {
            $array = $this->all();

            Arr::set($array, $fieldName, $newFielde);

            $this->merge($array);
        }
    }

    /**
     * エラーをコピー
     *
     * @param \Illuminate\Validation\Validator $v
     * @param string $orgItem
     * @param string $item
     * @return void
     */
    public function copyErrors(Validator $v, string $orgItem, string $item): void
    {
        $v->errors()->merge([$item => $v->errors()->get($orgItem)]);
    }
}
