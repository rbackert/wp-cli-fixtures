<?php

namespace Hellonico\Fixtures\Provider;

abstract class Lorem extends \Faker\Provider\Lorem
{
    protected static $separator = ' ';
    protected static $endPunct = ['.', '?', '!'];

    protected static $wordList = [];

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
