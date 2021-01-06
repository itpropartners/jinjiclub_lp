<?php
namespace Domain\Models\Traits;

/**
 * モデル共通処理
 */
trait ModelCommonTrait
{
    /**
     * リクエストの値をすべてプロパティに追加
     *
     * @param array $request
     * @return void
     */
    public function executeFill(?array $request): void
    {
        // リクエストがなければ何もしない
        if (isset($request) === false) {
            return;
        }

        foreach ($this->fillable as $value) {
            if (array_key_exists($value, $request) === false) {
                continue;
            }

            $this->{$value} = $request[$value] ?? null ;
        }
        $this->changeToEmptyFromNull($request);
    }

    /**
     * nullを空文字に変換
     *
     * @return void
     */
    protected function changeToEmptyFromNull(?array $request)
    {
        foreach ($this->fillable as $value) {
            if (array_key_exists($value, $request) === false) {
                continue;
            }

            foreach ($this->notNullColumns as $column) {
                if ($value === $column && is_null($this->{$value})) {
                    $this->{$value} = '';
                }
            }
        }
    }

    /**
     * 404リダイレクト判定
     *
     * @return boolean
     */
    public function is404RedirectJudgment(): bool
    {
        return empty($this->id);
    }
}
