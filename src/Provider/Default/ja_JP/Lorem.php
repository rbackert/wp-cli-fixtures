<?php

namespace Faker\Provider\ja_JP;

class Lorem extends \Faker\Provider\Lorem
{
    protected static $separator = '';
    protected static $endPunct = ['。', '」', '』', '！', '？'];

    protected static $wordList = [
        "コミュニティ",
        "隠す",
        "葉",
        "陶器",
        "錯覚",
        "バーゲン",
        "リニア",
        "コーラス",
        "仕上げ",
        "叔父",
        "移動",
        "差別する",
        "極端な",
        "数字",
        "テント",
        "必要",
        "主人",
        "電池",
        "ソース",
        "野球",
        "ストレージ",
        "スキーム",
        "暖かい",
        "ささやき",
        "器官",
        "トリビュート",
        "同行",
        "ジャム",
        "パン",
        "索引",
        "トス",
        "織る",
        "パーセント",
        "拡張",
        "教授",
        "バスケット",
        "創傷",
        "フレーム",
        "明らかにする",
        "フェミニスト",
        "発生する",
        "怒り",
        "ボトル",
        "狐",
        "柔らかい",
        "リフト",
        "バス",
        "雪",
        "画面",
        "パイオニア",
        "マリン",
        "ダイヤモンド",
        "普通の",
        "意図",
        "ヘア",
        "日曜日",
        "プラスチック",
        "衝突",
        "評議会",
        "主婦",
        "保証金",
        "動物",
        "参加する",
        "教会",
        "コミュニケーション",
        "憲法",
        "本質的な",
        "探査",
        "呼ぶ",
        "供給",
        "スペル",
        "再現する",
        "合計",
        "ダッシュ",
        "擁する",
        "知覚",
        "シェービング",
        "コンペ",
        "オークション",
        "細かい",
        "ニュース",
        "癌",
        "トーン",
        "チーズ",
        "反射",
        "ブランチ",
        "コピー",
        "状況",
        "スマッシュ",
        "式",
        "協力",
        "管理する",
        "文言",
        "編組",
        "ジャーナル",
        "腐った",
        "見落とす",
        "ハードウェア",
        "ピック",
        "感謝する",
        "楽しんで",
        "人形",
        "建築",
        "見出し",
        "タワー",
        "ホイール",
        "省略",
        "ログ",
        "助けて",
        "不自然な",
        "出演者",
        "転倒",
        "運",
        "障害",
        "クルー",
        "追放する",
        "月",
        "カレッジ",
        "緩む",
        "分割",
        "欠乏",
        "通行料金",
        "電話",
        "狭い",
        "中央",
        "埋め込む",
        "革新",
        "ブレーキ",
        "コーナー",
        "溝",
        "脊椎",
        "ブラケット",
        "戦略的",
        "尿",
        "血まみれの",
        "尊敬する",
        "催眠術",
        "アクセルペダル",
        "厳しい",
        "サンプル",
        "奨励します",
        "指名",
        "クール",
        "クロス",
        "ヒール",
        "敵対的な",
        "近代化する",
        "部隊",
        "目的",
        "保持する",
        "中世",
        "デッド",
        "ノート",
        "デフォルト",
        "犯罪者",
        "キャビン",
        "副",
        "改善",
        "職人",
        "シュガー",
        "花嫁",
        "倫理",
        "偏差",
        "販売",
        "軸",
        "サラダ",
        "品質",
        "風景",
        "虐待",
        "立派な",
        "ベルベット",
        "ハンマー",
        "キャビネット",
        "トレーナー",
        "リハビリ",
        "サワー",
        "連続",
        "学生",
        "高い",
        "賞賛する",
        "行進",
        "ダニ",
        "証言する",
        "符号",
        "バナー",
        "バケツ",
        "カラム",
        "装置",
        "ヒット",
        "敵",
        "トースト",
        "試してみる",
        "大統領",
        "屋根裏",
        "メニュー",
        "残る",
        "リンク",
        "舗装",
        "インチ",
        "特徴",
        "は",
        "持つ",
        "持っていました",
        "あった",
        "〜",
        "ない",
        "今",
        "今日",
        "持ってる",
        "午前",
        "私",
        "君は",
        "彼",
        "彼女",
        "それ",
        "自体",
        "あなた自身",
        "じぶんの",
        "鉱山"
    ];

    /**
     * Generate an array of random words
     *
     * @example array('Lorem', 'ipsum', 'dolor')
     *
     * @param int  $nb     how many words to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @return array|string
     */
    public static function words($nb = 3, $asText = false)
    {
        $words = [];

        for ($i = 0; $i < $nb; ++$i) {
            $words[] = static::word();
        }

        return $asText ? implode(static::$separator, $words) : $words;
    }

    /**
     * Generate a random sentence
     *
     * @example 'Lorem ipsum dolor sit amet.'
     *
     * @param int  $nbWords         around how many words the sentence should contain
     * @param bool $variableNbWords set to false if you want exactly $nbWords returned,
     *                              otherwise $nbWords may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public static function sentence($nbWords = 6, $variableNbWords = true)
    {
        if ($nbWords <= 0) {
            return '';
        }

        if ($variableNbWords) {
            $nbWords = self::randomizeNbElements($nbWords);
        }

        $words = static::words($nbWords);
        $words[0] = ucwords($words[0]);

        return implode(static::$separator, $words) . self::randomElement(static::$endPunct);
    }

    /**
     * Generate a single paragraph
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param int  $nbSentences         around how many sentences the paragraph should contain
     * @param bool $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                  otherwise $nbSentences may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public static function paragraph($nbSentences = 3, $variableNbSentences = true)
    {
        if ($nbSentences <= 0) {
            return '';
        }

        if ($variableNbSentences) {
            $nbSentences = self::randomizeNbElements($nbSentences);
        }

        return implode(static::$separator, static::sentences($nbSentences));
    }
}