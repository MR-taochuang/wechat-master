<?php

namespace WeChat;

use Driver\WeChat;

/**
 * Class Summary
 * @package WeChat
 * @author Mr.taochuang <mr_taochuang@163.com>
 * @date 2018/12/29 14:44
 * 微信数据统计
 */
class Summary extends WeChat
{

    /**
     * @param $begin_date /开始日期
     * @param $end_date /结束日期
     * @return array
     * 获取用户增减数据 时间跨度为7天
     */
    public function GetUserSummary($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取累计用户数据 时间跨度为7天
     */
    public function GetUserCumulate($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文群发每日数据 时间跨度 1天
     */
    public function GetArticleSummary($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文群发总数据 时间跨度 1天
     */
    public function GetArticleTotal($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文统计数据 时间跨度 3天
     */
    public function GetUserRead($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文统计分时数据 时间跨度1天
     */
    public function GetUserReadhour($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文统计分时数据 时间跨度 7天
     */
    public function GetUserShare($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取图文分享转发分时数据 时间跨度 1天
     */
    public function GetUserSharehour($begin_date, $end_date)
    {
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送概况数据 时间跨度 7天
     */
    public function GetUpstreammsg($begin_date, $end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息分送分时数据 时间跨度 1天
     */
    public function GetUpstreammsghour($begin_date, $end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送周数据 时间跨度 30天
     */
    public function GetUpstreammsgweek($begin_date, $end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送月数据 时间跨度 30天
     */
    public function GetUpstreammsgmonth($begin_date, $end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送分布数据 时间跨度 15天
     */
    public function GetUpstreammsgdist($begin_date, $end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送分布周数据 时间跨度 30天
     */
    public function GetUpstreammsgdistweek($begin_date,$end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取消息发送分布月数据 时间跨度 30天
     */
    public function GetUpstreammsgdistmonth($begin_date,$end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取接口分析数据 时间跨度 30天
     */
    public function GetInterfaceSummary($begin_date,$end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }

    /**
     * @param $begin_date
     * @param $end_date
     * @return array
     * 获取接口分析分时数据 时间跨度 1天
     */
    public function GetInterfaceSummaryhour($begin_date,$end_date){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['begin_date' => $begin_date, 'end_date' => $end_date])->toArray();
    }
}