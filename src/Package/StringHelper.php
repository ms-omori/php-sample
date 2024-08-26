<?php

namespace App\Package;

class Converter
{

    /**
     * YNをBoolに変換する
     * Yの場合はtrue、それ以外はfalseを返す
     *
     * @param string $val
     * @return boolean
     */
    public static function convertBoolFromYN(string $val): bool
    {
        if ($val === 'Y') {
            return true;
        }
        return false;
    }

    /**
     * 文字列がnullかどうか判定する
     * @param string $value 判定値
     * @return bool
     */
    public static function isNull(?string $value):bool
    {
        return $value === null;
    }

    /**
     * 文字列が空、またはNULLかどうか判定する
     * @param string $value 判定値
     * @return bool
     */
    public static function isEmpty(?string $value):bool
    {
        return $value === '';
    }

    /**
     * 文字列が(空、かつNULLではない）かどうか判定する
     * @param string $value 判定値
     * @return bool
     */
    public static function isNotEmpty(?string $value):bool
    {
        return !self::isEmpty($value);
    }

}
