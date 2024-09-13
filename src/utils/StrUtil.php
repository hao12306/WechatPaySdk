<?php

namespace WechatPaySdk\utils;
/**
 * 工具类-字符串
 */
class StrUtil
{
    /**
     * 字符串转换为 StudlyCaps（也称作 PascalCase）
     */
    public static function studly($value)
    {
        // 替换所有非字母数字字符为分隔符（这里选择空格）
        $value = preg_replace('/[^a-zA-Z0-9]+/', ' ', $value);
        // 将字符串分割成单词数组
        $words = explode(' ', trim($value));
        // 将每个单词的首字母转为大写
        $words = array_map('ucfirst', $words);
        // 合并单词数组为单个字符串
        return implode('', $words);
    }
}