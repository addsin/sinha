<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/12
 * Time: 下午 01:11
 */

namespace Dotenv;


class PksftTool
{
    /**
     * 轉換位數為數字 
     * @param $digit
     * @param int $deduction
     * @return int
     * 
     */
    public static function changDigitForxyft($digit, $deduction = 0)
    {

        switch ($digit) {
            case 'rank_1':
            case '1w':
                $subclass = 1;
                break;
            case 'rank_2':
            case '2w':
                $subclass = 2;
                break;
            case 'rank_3':
            case '3w':
                $subclass = 3;
                break;
            case 'rank_4':
            case '4w':
                $subclass = 4;
                break;
            case 'rank_5':
            case '5w':
                $subclass = 5;
                break;
            case 'rank_6':
            case '6w':
                $subclass = 6;
                break;
            case 'rank_7':
            case '7w':
                $subclass = 7;
                break;
            case 'rank_8':
            case '8w':
                $subclass = 8;
                break;
            case 'rank_9':
            case '9w':
                $subclass = 9;
                break;
            case 'rank_10':
            case '10w':
                $subclass = 10;
                break;
            default:
                $subclass = 0;
                break;
        }
        return $subclass - $deduction;

    }
}