<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebCrawler\Crawler;
use App\WebCrawler\Handler\Handle;

class WebCrawlerController extends Controller
{
    protected $urls = [
		'http://astro.click108.com.tw/daily_0.php?iAstro=0',
		'http://astro.click108.com.tw/daily_1.php?iAstro=1',
		'http://astro.click108.com.tw/daily_2.php?iAstro=2',
		'http://astro.click108.com.tw/daily_3.php?iAstro=3',
		'http://astro.click108.com.tw/daily_4.php?iAstro=4',
		'http://astro.click108.com.tw/daily_5.php?iAstro=5',
		'http://astro.click108.com.tw/daily_6.php?iAstro=6',
		'http://astro.click108.com.tw/daily_7.php?iAstro=7',
		'http://astro.click108.com.tw/daily_8.php?iAstro=8',
		'http://astro.click108.com.tw/daily_9.php?iAstro=9',
		'http://astro.click108.com.tw/daily_10.php?iAstro=10',
		'http://astro.click108.com.tw/daily_11.php?iAstro=11',
    ];

    public function index(Crawler $crawler, Handle $handle)
    {
        $crawler->setUrls($this->urls)->start($handle)->save();
    }
}
