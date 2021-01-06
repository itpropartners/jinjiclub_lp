<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('contacts')->truncate();
        DB::table('contacts')->insert([
            [
                'first_name' => '一郎',
                'last_name' => '鈴木',
                'email' => 'user+1@itpropartners.jp',
                'type_id' => 1,
                'reply_status' => 1,
                'body' => 'パスワードを忘れてしまいました。
                どうすればよろしいでしょうか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '涼介',
                'last_name' => '井上',
                'email' => 'user+2@itpropartners.jp',
                'type_id' => 2,
                'reply_status' => 1,
                'body' => 'こちらのサービスのアプリはありますか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '春香',
                'last_name' => '坂本',
                'email' => 'user+3@itpropartners.jp',
                'type_id' => 3,
                'reply_status' => 1,
                'body' => '企業様からのメッセージの返信が来なくなりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '太郎',
                'last_name' => '田中',
                'email' => 'user+4@itpropartners.jp',
                'type_id' => 4,
                'reply_status' => 1,
                'body' => '動画をメッセージ内で送信することはできませんか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '沙友理',
                'last_name' => '伊藤',
                'email' => 'user+5@itpropartners.jp',
                'type_id' => 5,
                'reply_status' => 1,
                'body' => 'スカウトができなくなりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '舞',
                'last_name' => '渚',
                'email' => 'user+6@itpropartners.jp',
                'type_id' => 6,
                'reply_status' => 1,
                'body' => '退会はできますか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '太一',
                'last_name' => '岡本',
                'email' => 'user+7@itpropartners.jp',
                'type_id' => 1,
                'reply_status' => 1,
                'body' => 'パスワードを忘れてしまいました。
                どうすればよろしいでしょうか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '雅也',
                'last_name' => '田口',
                'email' => 'user+8@itpropartners.jp',
                'type_id' => 2,
                'reply_status' => 1,
                'body' => 'こちらのサービスのアプリはありますか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '由美子',
                'last_name' => '山口',
                'email' => 'user+9@itpropartners.jp',
                'type_id' => 3,
                'reply_status' => 1,
                'body' => '企業様からのメッセージの返信が来なくなりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '健太郎',
                'last_name' => '吉田',
                'email' => 'user+10@itpropartners.jp',
                'type_id' => 4,
                'reply_status' => 1,
                'body' => '動画をメッセージ内で送信することはできませんか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '優香',
                'last_name' => '水野',
                'email' => 'user+11@itpropartners.jp',
                'type_id' => 5,
                'reply_status' => 1,
                'body' => 'スカウトができなくなりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '隆',
                'last_name' => '伊藤',
                'email' => 'user+12@itpropartners.jp',
                'type_id' => 6,
                'reply_status' => 1,
                'body' => '退会はできますか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '里奈',
                'last_name' => '吉川',
                'email' => 'user+13@itpropartners.jp',
                'type_id' => 1,
                'reply_status' => 1,
                'body' => 'パスワードを忘れてしまいました。
                どうすればよろしいでしょうか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '健',
                'last_name' => '佐々木',
                'email' => 'user+14@itpropartners.jp',
                'type_id' => 2,
                'reply_status' => 1,
                'body' => 'こちらのサービスのアプリはありますか。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => '愛',
                'last_name' => '竹中',
                'email' => 'user+15@itpropartners.jp',
                'type_id' => 3,
                'reply_status' => 1,
                'body' => '企業様からのメッセージの返信が来なくなりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
