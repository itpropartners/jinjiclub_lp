<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('projects')->truncate();
        DB::table('projects')->insert([
            [
                'company_id' => 1,
                'thumbnail_path' => 'projects/1/thumbnail_path/ADCU60JBayB8AumL6Ud23wUkQRU7lCAagEYDGQPk.jpg',
                'title' => 'プログラミング学習サービスの機械学習講師Wanted！',
                'job_category_id' => 1,
                'reason' => '最もフォーカスしている点は「機械学習エンジニア」を育てることです。
                機械学習エンジニアとは、「機械学習アルゴリズムを用いたビジネス応用の要件定義や実装ができる人材」と定義しています。
                私たちは、既存のアルゴリズムをベースに、実ビジネスへの応用ができるエンジニアを育成します。
                さらに、コンテンツの多言語化を行い、日本/世界に対してサービスを提供し、
                「先端技術領域のエンジニアのプラットフォーム」を作り、日本の先端技術の素晴らしさを世界に広めるのが、私たちのミッションです。',
                'requirement' => '弊社では10秒で始めるプログラミング学習サービスを提供しています。
                プログラミング学習サービスは2ヶ月弱で5,000名以上のユーザーに利用頂き、その7割は理系出身の方です。
                サービスも50万回以上演習されており、大きな手応えを感じており、
                今後は「世界へのビジネス展開」を中心に、さらに拡大を模索します。',
                'qualification' => '・コンピューターサイエンスに関する基礎知識
                ・機械学習に関する基礎知識（1年以上の実務経験）
                ・教育・研修・後輩育成への熱意',
                'place' => '東京都渋谷区道玄坂一丁目16番10号 渋谷DTビル8階',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助
                交通費補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'thumbnail_path' => 'projects/2/thumbnail_path/ZUNicODjEZQ4al993gmrQZGPsMWYqzYafOFWVYwJ.jpg',
                'title' => '働き方の未来をつくるWebエンジニアを募集！',
                'job_category_id' => 1,
                'reason' => 'ライフスタイルが変わっていく中で、一人ひとりがもっと都市や建物を住みこなし、使いこなすことで豊かに楽しく生活できるのではないか、私たちはそう考えています。
                オンラインの世界では当たり前に行われている自動化、パーソナライゼーション、データ取得とアップデートをリアルな世界に持って来たらどんなことがおこるだろうか？
                MyCityは技術を使って”あなたの”都市をもっと便利に楽しくし、都市の未来をつくります。
                都市が本当に面白くなるのはこれからです。',
                'requirement' => 'オフィス・住宅向けIoTプラットフォームを通じて新しいワークスタイルやライフスタイルを一緒につくっていけるWebエンジニアを募集しています。
                具体的な業務 としては、オフィス・住宅向けIoTプラットフォームのWebアプリケーションの企画/設計/開発/テスト/改善を行います。新しい働き方、暮らし方をテクノロジーの力で
                提案していくため、設計フェーズを重要視しており、UX・UIデザイナーと一緒に、提供したい体験について話したり、インフラエンジニアと一緒に、最適な環境について話しをながら、設計・構築を行います。',
                'qualification' => 'Ruby on Rails, Django, Laravelなどフレームワークを活用したWebアプリケーションの設計/開発経験
                Webフロントエンド技術の知識/開発経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 3,
                'thumbnail_path' => 'projects/3/thumbnail_path/X9ta17sAl4Za1y6igAuMff4oDYFeik1FA5pMGRXV.jpg',
                'title' => '訪日外国人客向け買い物支援サービスのiOS/Androidエンジニア募集！',
                'job_category_id' => 1,
                'reason' => '様々な事業を展開・成功されている企業の多くが、デジタルトランスフォーメーションや
                ITとの融合に課題を抱えています。そこには技術開発やサステナビリティな運用体制を構築するために専門的な知識はもとより、
                時間とコストが必要となり自社で全て揃えるための先行投資が踏め込めないという問題があります。
                当社の強みであるコアテクノロジーを提供することで、デジタル領域での新事業創出や既存事業のイノベーションを開花させる橋渡し的な存在でありたいと考えています。',
                'requirement' => '2019/10/29にリリースしたばかりの訪日外国人客向け（インバウンド）買い物支援プラットフォームサービス
                「SOUVENI（スーベニ）」のiOS/Androidモバイルアプリ開発者を募集します！
                「SOUVENI」のiOS/Androidモバイルアプリ開発',
                'qualification' => 'iOSアプリケーションの設計・開発・リリース経験
                もしくはAndroidアプリケーションの設計・開発・リリース経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 4,
                'thumbnail_path' => 'projects/4/thumbnail_path/1ILHr8GG8SHX2oPjkhDacyQKgLkybWSTmin5E2FM.jpg',
                'title' => 'デザインで開発中のアプリを成長させる人募集！',
                'job_category_id' => 2,
                'reason' => '旅行者の頼れる相棒的存在がいたら、観光地のリアルな情報を常に得ることができたら、今まで味わうことのできなかった旅行体験が実現できるのではないか。その思いをこのサービスに詰め込みました。
                トリピアは、ただの旅行予約サービスでは終わりません。旅行者の頼れる相棒として、安心していつでもどこでも旅行ができる世界を創っていきます。',
                'requirement' => '現在開発中のアプリをさらに加速改善させていくためのメンバーを募集しています。
                ツアー、アクティビティショップの方から日々いただくご意見をもとに、アプリデザインを行っていただきます。
                新機能実装から、新プロジェクトまで幅広く業務をこなしていただきます。
                これからデザイナーとしての実績を残していきたい方は、プロダクトマネージャーの方と一緒に自分のペースに合わさせてアプリデザインを行うことができます。',
                'qualification' => '●iOS・Androidいずれかのアプリデザイン経験
                ●Adobe Creative Cloudを使ってのデザイン技術',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 5,
                'thumbnail_path' => 'projects/5/thumbnail_path/levneEJXLs66fE7tlCA2t2JogqsR9LR9mZJu0LrC.jpg',
                'title' => '長期インターン生募集！テッペン目指したいヤツ求ム',
                'job_category_id' => 4,
                'reason' => '第二創業期に突入するにあたり、ミッションやビジョンといったErevistaにとっての根幹を改めて見直しました。その時重要だったことが、月並みではありますが「人をハッピーにしたい」ということでした。
                これは善でも偽善ではなく“エゴ”。
                「人をハッピーにすることで喜んでもらえる、それによって私たちもハッピーになる」
                というエゴです。
                一直線ではないかもしれません。
                紆余曲折しながらも、私たちが「目指す姿・ゴール」のために、今の様々な事業を進めています。',
                'requirement' => '【こんなことやります】
                エレビスタでは今年からインターン採用を強化し、現在は7名のメンバーが在籍中です！
                さらに2月内に3名採用したいと考えておりますので引き続き長期インターン生募集中です！

                【こんな方にオススメです】
                ■週3レベルでガンガン出れる
                ■雑用ではなく、社員と同レベルの仕事を経験したい
                ■将来の大きな目標やビジョンを持っている
                ■考えることが好きで、自分のアイデアを形にしたい
                ■インターネットが好きで普段から情報収集をしている
                ■何か一つのことに熱中しやすい性格',
                'qualification' => '週3レベルでガンガン出れる',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 6,
                'thumbnail_path' => 'projects/6/thumbnail_path/4i4uTEunVaXmvPIue2BzDIkeqSQIU2SXUxol79l7.jpg',
                'title' => 'WEBエンジニア募集！快適なオフィスで一緒に働きませんか？？',
                'job_category_id' => 1,
                'reason' => 'お客様からパートナー企業として選定していただけけるような会社でありたい。そのために私達が出来ること、それはビジネスの現場で培った経験から生まれた商品開発力、それぞれの企業に合った運用提案、そしてそれを実行するシステムの構築。
                これら全ての問題に対するソリューションを用意しています。ノウハウをフルに生かし、お客様との信頼関係を築き、お客様の将来を一緒になって考えいきます。
                私たちはそんな企業であり続けたいと思います。',
                'requirement' => '都心部の高級不動産サイトの立ち上げ～運営までを手掛け
                業界トップクラスの集客力を持つサイトに成長させている実績があります。
                その他、大手賃貸サイトを多数制作・運営してきました。
                自社サービス・プロダクト開発にも力を入れ、各事業ごとに本気で日本一を目指します。
                事業拡大に向け、一緒に力を伸ばしたい方を募集します。
                ■SE・PG業務
                ■自社運営サイトの保守
                ■新規プロダクトの開発　等',
                'qualification' => '●IT業界プログラミング経験者（半年以上）ある方
                ●自社サービスの開発経験（Web・ゲーム業界）
                ●Webアプリケーションの開発経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 7,
                'thumbnail_path' => 'projects/7/thumbnail_path/07mJe1jYVg3mm6nQrc1C21xFlawR11JaE6SnL6x1.jpg',
                'title' => 'デザインもしながら英語も学びたいデザイナー！',
                'job_category_id' => 2,
                'reason' => '日本より全世界からのユーザーが多く、月間28万ほどのユーザーが増え続けています。
                取り扱い言語は110言語以上あり今後もグローバル展開を進めていきます。
                社内には、日本人だけではなく外国人のスタッフも多数在籍しています。またユーザーの方々も外国の方なので自然と語学も身に付き、海外のサイトを調べる機会が増えます。
                もちろん日本語しか出来なくても全く問題ありません！
                全員で組織を作っていく楽しいフェーズです！ぜひ一緒に働きましょう！',
                'requirement' => '社内には、日本人だけではなく外国人のスタッフも多数在籍しています。またユーザーの方々も外国の方なので自然と語学も身に付き、海外のサイトを調べる機会が増えます。
                今はまだ外国語の使用頻度はそこまで高くはないのですが、
                今後英語を使用しながら仕事をしていきたい方にとっては良い環境です！もちろん日本語しか出来なくても全く問題ありません！
                全員で組織を作っていく楽しいフェーズです！ぜひ一緒に働きましょう！',
                'qualification' => '●C向けサービスの iOS/Android/Web開発者との共同開発・デザイン・運用経験 （1案件につき3ヶ月以上、運用してること）
                ●SketchもしくはFigmaの使用経験（1プロジェクトでもあれば）
                ●Gitなどのバージョン管理ツールを使用した開発経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 8,
                'thumbnail_path' => 'projects/8/thumbnail_path/ZBkRxl0hWwROMnYFsQsehDkSoDYg2b5FEk66gnPG.jpg',
                'title' => 'アプリケーションエンジニアとしてAI分野に領域を広げたい人募集！',
                'job_category_id' => 1,
                'reason' => '機械学習・ディープラーニング技術には、現在人間の手によって行われている作業の多くを自動化し、
                人間が本来集中して取り組むべきことに注力できるようにすることで、社会をより高い次元に押し上げていける大きな可能性があると考えています。
                特に画像解析系のディープラーニングは基本的な物体検出・認識の精度は実用可能なレベルまで向上しており、企業における業務への活用のために需要が急激に高まっています。
                また災害などの早期検出など社会的需要も増えています。',
                'requirement' => '【業務内容】
                今後アプリ開発を行う予定です。そこで、今回AIエンジニアの経験はないけれど、興味がある方と一緒に働きたいと考え、募集を始めました。

                【求めるスキル】
                ・アプリケーション開発経験が3年以上ある
                ・Webアプリケーション（GUI）開発経験がある
                ・論理的な思考ができ、分かりやすい説明ができる
                ・技術的な興味がある
                ・強い学習意欲がある',
                'qualification' => '・アプリケーション開発経験が3年以上ある
                ・Webアプリケーション（GUI）開発経験がある',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 9,
                'thumbnail_path' => 'projects/9/thumbnail_path/V98arM12gNS92wxd3n29DsXmXYEzuKRoeE1pPtXR.jpg',
                'title' => '新しい営業手法で売る　インサイドセールス募集',
                'job_category_id' => 4,
                'reason' => 'ドローンはスマートフォン以上のスピードで技術革新が行われているまだまだ発展途上の技術だからこそ、大手企業が入り辛く、まだ独走している企業がいない状態です。
                このような状況だからこそ、ドローン市場は小さなスタートアップが世界で戦える絶好のチャンスをもたらしてくれると考えています。',
                'requirement' => '中核事業であるDroneRooferでリード顧客獲得のためのマーケティング業務に携わって頂きます。リードを獲得するだけをゴールとして置くのではなく、実際の商談機会の創出まで担っていただきます。
                【職務内容】
                ▼ 商談への接続
                ・リードナーチャリング
                ・獲得リードへの商談アポイントメント
                ▼ マーケティング
                ・リード獲得施策の企画、実行
                ・営業代行業者（テレマ）の進捗管理
                ・マーケティング活動の効果検証と改善案の策定
                ・新規市場の開拓に向けたマーケティング',
                'qualification' => 'アウトバウンドコール経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 10,
                'thumbnail_path' => 'projects/10/thumbnail_path/XWCegPiNNacSJqqDprX0TUsQp7OZBGYav995NqIa.jpg',
                'title' => 'クラフト・ファッション×IoT領域の新製品企画ディレクターをウォンテッド',
                'job_category_id' => 3,
                'reason' => '「なくすを、なくす。」
                これが私たちのミッションです。
                日本では、年間2800万件の落とし物が届けられています。
                届けられなかったものも含むとその数はもっと大きくなるでしょう。
                なくす悲しみ、なくしての不便さ、探す時間、探す間のハラハラとした不安な想い…
                そういった気持ちや手間・時間の解消を実現していきたいと思います。',
                'requirement' => 'Erevista×○○の新しいプロダクト商品企画開発担う通称「クラフト部」のメンバーとして組織や文化を創り、ErevistaのMission、Vision、Valueを実現する新規事業部を立ち上げていただきます。
                具体的には

                ■Erevistaを活用ノベルティ戦略・企画
                ■Erevistaを使った商品企画（コンセプト立案・商品開発・OEM他パートナー、工場等との調整）
                ■担当商品の売上・原価・生産管理
                ■販売戦略、コミュニケーション戦略立案
                ■全国のデザイン、サンプル、素材などの調査・提案',
                'qualification' => '■プロダクトデザイナーの業務経験
                ■プロジェクトの新規企画・ディレクション経験
                ■プログラミング/メカや電気設計等のIoTに関する興味',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 11,
                'thumbnail_path' => 'projects/11/thumbnail_path/iOKT2k9PP3cZJgOLIXZieHfGgCK5fvWGMZWc5bFU.jpg',
                'title' => 'AI・機械学習メディアの編集長',
                'job_category_id' => 6,
                'reason' => 'AI技術を適切に活用することで、多くの課題を解決することができます。しかし、まだまだ新しい技術であるために、多くの日本企業はその活用が遅れてしまっています。
                より多くの人々が最先端のテクノロジーを理解・活用できる社会です。
                私たちは、テクノロジーの普及は個人の可能性を大きく広げ、豊かな社会の実現に繋がると信じています。',
                'requirement' => 'AI・機械学習のビジネス系Webメディアの編集長を募集します！
                これからの世界を大きく変えていくであろうAIの技術の最先端に触れたい、多くの人々にAI技術を伝えていきたいという方からの応募をお待ちしております！
                （ライターや記者、編集、編集補佐の募集もしていますので、「いきなり編集長は荷が重い」という方も気軽に応募していただければ幸いです。）',
                'qualification' => '・機械学習分野に関する学習・情報収集を自律的に行い、成長していく意欲のある方
                ・コミュニケーション能力が高い方
                ・プロジェクトチームをリードするリーダーシップを発揮できる方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'thumbnail_path' => 'projects/12/thumbnail_path/SAjU1rqPhGthfQnZI6LGYpd1AUvSrGWwZsB9kmAa.jpg',
                'title' => '意識 のモデル化と実装を目指す、機械学習リサーチエンジニア求む！',
                'job_category_id' => 1,
                'reason' => '研究で得た「仮想現実を生み出すとされる神経アルゴリズム」についての知見についても、多くの社会課題の解決に有用と考えています。
                特に有用性が期待される領域は、医療・ヘルスケアをはじめ、スマートシティ、自動運転、宇宙・航空など、高度な専門性が必要とされ、かつ市場の成長が著しい分野です。',
                'requirement' => '「仮想現実を生み出す神経アルゴリズム」の研究チームでは、技術顧問の計算論的神経科学についての知見をもとに、
                人間や動物が脳内に獲得している機能を、機械学習リサーチエンジニアたちとモデル化し、それを実装。さらに、実際のデータを用いた学習・推定を行うことで、それを検証しています。
                研究のサイクルは非常に早く、すでに立体視の分野などで一定の成果が確認できています。議論　=>　実装・検証　=>　議論・・・のサイクルにより、知見を積み重ねています。
                チームには多国籍の研究者が在籍し、必要とあらば英語で活発な議論しながら日々取り組んでいます。',
                'qualification' => '・機械学習を用いた業務経験が1.5年以上ある方
                ・deep learningフレームワーク（Pytorch, Tensorflow等）を業務で使用した経験のある方
                ・学術英論文を読み、実装した経験のある方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'thumbnail_path' => 'projects/13/thumbnail_path/So7nQ4rLePI4RVLZc9APm0St68nRRKYc1sa2zTGH.jpg',
                'title' => 'コードを書くことが好き、開発の上流工程に携わりたい人 WANTED！',
                'job_category_id' => 1,
                'reason' => '「IoT分野のリモート管理技術」を私たちは磨き続けてきました。あらゆる人にとって日々の業務にモバイルが利用されることが当たり前になった今、
                2007年から更新し続けている「ノウハウ」を次の市場に還元できる手応えを感じています。',
                'requirement' => '会社自体が大きくありませんし、扱っているのは「自社サービス」なので社内コミュニケーションは活発な方ではないかと思います。
                カスタマーサクセスやセールスチームと連携して、現場の声を吸い上げることができる、これはプロジェクトの「要件定義」など「企画」を考えるところで重要です。
                インヴェンティットに興味を持っていただいた方には、そういうところにも積極的に関わってほしいです。',
                'qualification' => 'やる気がある方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 3,
                'thumbnail_path' => 'projects/14/thumbnail_path/ZS8SlHKYgSU6f5UhNDOXUK5ddEcZ7Gt8DcfTMH5P.jpg',
                'title' => 'AIプロダクトのWeb画面開発エンジニア募集',
                'job_category_id' => 1,
                'reason' => 'ビッグデータやAIが頻繁に話題に上る一方で、自社に蓄積されたデータを活用し、真に意味のあるアナリティクスを実行できている企業はまだほとんどないのが実情です。
                先進的なことに積極的に取り組んでいると言われる企業でさえ、ほんの一部で取組を開始したに過ぎないのです。
                それは、なぜか？
                アナリティクスは、高度な統計知識が要求されるだけでなく、システム的なリテラシーも併せて求められることが多く、「活用せよ」と言われて一朝一夕でできるものではないからです。
                そういったクライアント企業に、真に役立つアナリティクスを提供したいと思い設立されたのが弊社です。
                どんな高度な技術も取り組んだだけでは意味がありません。それにより効率アップや業績改善、リスク低減などの成果に繋がることを何より目的として、この新興分野に取り組んでいきます。',
                'requirement' => '■こういう仕事をします
                ・AIを活用するサービスのWeb画面を開発します
                ・直感的なUI設計で、ユーザにとって分かりやすいWeb画面をデザインします
                ・主にAWSなどのクラウド環境で開発します
                サーバサイドエンジニア、AIエンジニア、セールスメンバーと協力してサービスを創っていきます。',
                'qualification' => '- 3年以上のプログラミング(Python/PHP/Javaなど)経験
                - (主に)Webアプリケーションの画面開発経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 4,
                'thumbnail_path' => 'projects/15/thumbnail_path/ZO9qVS42yF1Q3c4PasUenZaauqVr52S21ajJYRCl.jpg',
                'title' => 'WEBデザインの世界に飛び込むなら今しかない！',
                'job_category_id' => 2,
                'reason' => '最もフォーカスしている点は「WEBデザイナー」を育てることです。',
                'requirement' => '実践的な研修と並行しながら、自社にあるWEBスクールに通いWEBデザイナーを目指して頂きます。
                手厚い研修と会独自のカリキュラムで、未経験からでも安心して成長して行くことができ、ただの”WEBデザイナー”で終わらない価値のある人材を目指せます。
                またスクールではHTML、CSS、JavaScript、Illustrator、Photoshop、WordpressなどといったWEBデザイナーとしての大切なスキルを独自のカリキュラムで習得していきます。
                幅広いスキルをカリキュラムに取り入れているので、これから先も息の長いクリエイターを目指せることができます。',
                'qualification' => 'やる気がある方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 5,
                'thumbnail_path' => 'projects/16/thumbnail_path/sdYxQqMuIlPm74GX8PF6CsIrZALVc8BCjK4OZ22V.jpg',
                'title' => 'サブスクサービスのカスタマーサポートスタッフ大募集！',
                'job_category_id' => 7,
                'reason' => '自分らしく自由に生きることこそが、僕らの求める良い暮らし方です。
                人同士の繋がり、お金や時間や物の価値、働き方、様々なコトやモノは時代とともに変化します。そんな中で、自分らしさや良い暮らしの在り方も変わる。
                僕たちは、時代に併せて、ある時は時代を先取り、サービスを通じて変化や変革を先導し、より良く暮らしたいと願う人々の伴走者でありたい。
                激動の時代なんて言葉が気にならないくらい、いつでも軽やかに、自分らしく自由な暮らしを。
                このビジョンを追い求め、家具に関わる不便を解決しようと考えています。',
                'requirement' => 'カスタマーサポート業務を担う人材を募集しています。
                主に電話、メール、チャットでの顧客対応となります。
                フリーターでもWワークの方でも大丈夫！チームの一員として先輩がサポートしてくれる環境なので、
                安心して業務に取り組めます。',
                'qualification' => '・電話対応に抵抗がない方。
                ・ビジョン・バリューに共感し、実践でき、ともに挑戦できること。
                そして、私たちが目指す世界観を達成するために、継続的に学び、刺激しあい、共創する意欲があること。',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 6,
                'thumbnail_path' => 'projects/17/thumbnail_path/xUsLyObWMtdbkSVTdOkcZMEb8u2oyDSDSfGPuCvu.jpg',
                'title' => '働く人の当たりまえを作るインサイドセールスを募集',
                'job_category_id' => 4,
                'reason' => 'いつの時代も、世界を動かしてきたのは人と人の出会いです。
                私たちは出会いが持つ可能性を再発見し、
                未来につなげることでビジネスを変えていきます。
                イノベーションにつながる新しい出会いを生み出す。
                出会いの力でビジネスの課題にイノベーションを起こす。
                そして、名刺からはじまる出会い、そのもののあり方を変えていきます。',
                'requirement' => '世界に本気で挑むフェーズにおいてビジネスを加速するべく、
                「世の中の働き方を変えることに向き合い、変化を恐れず挑戦する人」を募集しています！
                インサイドセールスでは個人の成果のみならず、事業成長の最大化にもコミットして頂ける環境があります。',
                'qualification' => '・営業経験がある方(業界不問／新規・既存営業不問／個人向け・法人向け不問）
                ・ソリューション提案の経験
                ・BtoB/SaaSビジネスにおけるインサイドセールス経験
                ・企画職の経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 7,
                'thumbnail_path' => 'projects/18/thumbnail_path/BtQXtanK8NHE9QFOR2qpaWFUNXHU26XEvwtWU58s.jpg',
                'title' => '組織拡大に伴いバックエンドエンジニア募集！',
                'job_category_id' => 1,
                'reason' => 'もっとお客様のために適切な情報提供や、サービス改善を行っていくためにはお客様の情報を最適化することが弊社の大きな事業課題と考えております。
                弊社だからことできるお客様への健康情報のアウトプットを行っていくために、今は社内基盤を構築してより良いサービスを提供していくことを目指しています。',
                'requirement' => '予約システムに関するバックエンドの開発がメインになる予定です。
                ゆくゆくは開発だけではなく、プロダクトローンチに伴う進捗管理であったり、プロダクトの設計など、
                開発チームのリードエンジニアとしてキャリアを積めます。',
                'qualification' => '・Web開発経験が３年以上ある方
                ・Webアプリケーション・Webシステムにおけるバックエンド開発経験（PHPでの開発）をお持ちの方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 8,
                'thumbnail_path' => 'projects/19/thumbnail_path/TTNZNqXqxKrcLY9avnNFzlCT1kxBGI2HYPtbGng9.jpg',
                'title' => 'PMを挑戦しませんか？',
                'job_category_id' => 3,
                'reason' => '我たちのミッションは、クリエイティブで、真に楽しくポジティブな体験を提供することで、人々の生活を豊かにすることです。',
                'requirement' => '■業務内容
                ①マーケティング及びプロダクト企画
                ・市場、顧客ニーズの調査/ヒアリング/分析
                ・新規分野、新規市場への参入に関する企画検討
                ・新機能や他社サービスとの連携等の企画検討
                ②開発チームとの連携
                ・プロダクトの開発優先順位の調整
                ・新機能の要件及び仕様の擦り合わせ
                ・開発会議への参加
                ・PoC（導入前検証）の推進
                ③クライアントフォロー
                ・導入に向けたクライアントシステム部門との打ち合わせ
                ・導入後のクライアントフォロー',
                'qualification' => '1.データドリブンで、データから価値を見出し、ビジネス目標を立てられる
                2.コンテンツベースのプロダクト、トラフィックプロダクト、コンテンツ配信、エフェクト評価の経験有り
                3.優れたコミュニケーションスキル、結果主義でビジネス目標を達成できる
                4.SQLが使用でき、データ指標を基に分析できる',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 9,
                'thumbnail_path' => 'projects/20/thumbnail_path/vG8Ve3TLxtzy0ulxOy610XYv8A3gQa66VZAZR3Bn.jpg',
                'title' => 'Web担当者募集！！',
                'job_category_id' => 1,
                'reason' => '世界トップクラスのハイテク技術を日本国内で導入、事業開発を行い、日本の社会に貢献します。',
                'requirement' => 'Webを通したプロモーション、サービス、販売を通して、ユニークな製品群をもっともっと多くの人に知って頂き、
                手に取って頂く、その手助けをして頂けませんか。
                エンジニアとして、一つの分野で能力を伸ばしたい、という方には向いていないかもしれません。あれもやりたいこれもやりたい、
                そんなご自身の成長に欲張りな方には、弊社が向いていると思います。
                正直、Web施策はほぼ手付かずの状態ですので、どの製品の何から始めても事業の成長と、あなたの貴重な経験に繋がると思います！！',
                'qualification' => '・Web開発経験が３年以上ある方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 10,
                'thumbnail_path' => 'projects/21/thumbnail_path/Z2kY02lA0Htklc6f2XNFHKMgGUTBfVe7J5gLEnns.jpg',
                'title' => '真剣にメディアを学びたいライター募集！',
                'job_category_id' => 6,
                'reason' => 'この会社には、とにかく大きなことをしたいという人が集まっています。
                今まで、学生が会社を作り1億円以上で売却したというケースはいくつか存在しています。
                そして、そのほとんどがWebメディアの売却なのです。
                このように、インターネットの世界には、若い人でも大きな実績を残せるチャンスが眠っています。
                また、Webメディアを運営できるようになったり、SEO知識をつけるためには、間違いなく詳しい人から教えてもらうのが1番の近道です。',
                'requirement' => 'SEOに詳しい人が多いので、本格的にSEOを学ぶことができます。
                また、弊社では再現性のあるメディア運営方法を確立しており、しっかりとコミットしてもらえれば高い確率で実績を残せるという魅力的な環境です。
                【仕事内容】
                ・記事のライティング
                ・コミット時間によっては、ディレクターになることも可能です。',
                'qualification' => '・週20時間以上コミットできる方（フレックスタイム制を採用しています）
                ・半年以上働ける方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 11,
                'thumbnail_path' => 'projects/22/thumbnail_path/NDWZwBBFm8NROq2E9UebEKO67P8XIcrhOS4WXle0.jpg',
                'title' => 'バックオフィス管理部門を支えるスタッフ募集',
                'job_category_id' => 7,
                'reason' => 'なぜ働くのか？その理由は人それぞれですが、誰でも人生の1/6(人生の期間の1/2×1日の1/3)は仕事をすることになります。
                このため、仕事が充実していない、自分の望むような仕事ができないというのは人生の充実度に直結する問題であると考えています。',
                'requirement' => 'バックオフィス全般をお任せできる管理部門の方を募集しております。
                残業などはなく、時短勤務も可能ですので、子育てなどと両立できる職種です',
                'qualification' => '・事務系のお仕事をされたことがある方
                ・Word、Excel、PowerPoint等のツールを使える方
                ・サポート好きで、丁寧で誠実な対応ができる方
                ・臨機応変に、フットワーク軽く、柔軟に動ける方',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'thumbnail_path' => 'projects/23/thumbnail_path/DBMAGDXiAxhHBHSd2tWM1mQYzunDAoHxrN2JzSxY.jpg',
                'title' => '医療サービスを市場に届けるセールス募集',
                'job_category_id' => 4,
                'reason' => '日本を皮切りに今後、社会の高齢化はより一層加速していきます。高まる医療ニーズや働き方の改善に向けて未来を見通し、
                このような様々な社会課題に対して、論理的に新しい価値を創造していくことが必要だと考えます。',
                'requirement' => '◆業務内容
                ・医療・ヘルスケア領域での新規事業開発及び、セールス
                ・医療データや（自社製も含めた）ウェアラブルデバイスのデータを活用した新規ビジネスの開発
                ・医療・介護関連施設、医療関連メーカの経営評価、マーケティング分析
                ・ハーバード等、国内・海外の有名大学や研究機関との共同研究のマネジメント
                ・ヘルスケアデータを活用した政策提言',
                'qualification' => '・3年以上のセールス実務経験
                ・臨床研究や医療機器販売の実務経験',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'thumbnail_path' => 'projects/24/thumbnail_path/4NlWX5eYhyQhly4fjiElzf5GBez2V22zwQMtNG80.jpg',
                'title' => 'マーケター募集！',
                'job_category_id' => 5,
                'reason' => 'ユーザー数アップを目指すために必要な、各種Webマーケティングの戦略立案および実行をお任せするWebマーケターをお迎えすることになりました。',
                'requirement' => '世界約200ヶ国以上に向け多言語で同時併売可能な販売ネットワークの構築に成功しました。現在、海外売上比率は全体売上の50％を超えるまでに成長しています。
                ＜具体的な仕事内容＞
                ■顧客開拓および購買に繋がる各プランの企画立案・実行（キャンペーン・メディア展開など）
                ■SEO対策
                ■Eメールによる情報発信
                ■CRM施策の立案・実行（リピーターをファンに育てる顧客関係性マネジメント）
                ■広告運用および予算の管理
                ■効果測定・競合分析
                ■チームの予算管理、目標設定および進捗管理',
                'qualification' => 'Webマーケティングのご経験（3年以上）',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 3,
                'thumbnail_path' => 'projects/25/thumbnail_path/h8l2kfz6SIAlEGJYBVFgeSX922sQtE1zDsxPxUaa.jpg',
                'title' => 'デジタルマーケティング市場を開拓するデザイナー大募集！',
                'job_category_id' => 2,
                'reason' => '難しい企業とユーザーのコミュニケーションを最適化するべく、web・アプリのみならず、
                新たな領域のデータを連携させることでユーザーの「今」をより正確に捉え、
                最適なタイミングとコミュニケーションチャネルで情報を配信することで世の中のサービスとユーザーが結びつき、
                共創し合う最適な体験を実現できる世界を創っていきます。',
                'requirement' => '業務内容
                - モバイル及びWeb広告のプランニングと制作
                - アプリストアのスクリーンショットのプランニングと制作
                - アプリ内バナーのプランニングと制作
                - LP/HTMLメッセージ/HTMLメールなどのHTMLを使ったクリエイティブ制作
                - 市場リサーチ
                - データ分析と仮説設計',
                'qualification' => '- オンライン広告クリエイティブ、LPの制作経験
                - 広告のクライアントワークの経験
                - プロ意識
                - デザインスキル',
                'place' => '東京都渋谷区',
                'annual_salary_min' => '500',
                'annual_salary_max' => '600',
                'salary_detail' => '年棒制',
                'master_employment_status_id' => '1',
                'benefit' => '家賃補助
                交通費補助',
                'holiday' => '週休二日制',
                'selection_process' => '一次面接→二次面接→最終面接',
                'posting_status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
