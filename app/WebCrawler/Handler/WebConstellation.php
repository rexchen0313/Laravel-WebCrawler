<?php

namespace App\WebCrawler\Handler;

use App\WebCrawler\Handler\HandleWeb;

class WebConstellation extends HandleWeb
{
  /**
   * 用於處理從 http://astro.click108.com.tw/ 上網頁爬蟲所取得的星座運勢資訊
   */
  public function getWebData()
  {
    preg_match_all('/<h3>今日(.+)解析<\/h3>/', $this->html, $constellation);
    preg_match_all('/<span class="txt_green">(.+)：<\/span>/', $this->html, $overallScore);
    preg_match_all('/<span class="txt_pink">(.+)：<\/span>/', $this->html, $loveScore);
    preg_match_all('/<span class="txt_blue">(.+)：<\/span>/', $this->html, $workScore);
    preg_match_all('/<span class="txt_orange">(.+)：<\/span>/', $this->html, $fortuneScore);
    preg_match_all('/：<\/span><\/p><p>(.+)<\/p>/', $this->html, $description);

    return array(
      'date' => date("Y-m-d"),
      'constellation' => $constellation[1][0],
      'overall_score' => $overallScore[1][0],
      'overall_description' => $description[1][0],
      'love_score' => $loveScore[1][0],
      'love_description' => $description[1][1],
      'work_score' => $workScore[1][0],
      'work_description' => $description[1][2],
      'fortune_score' => $fortuneScore[1][0],
      'fortune_description' => $description[1][3]
    );
  }
}