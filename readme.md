# Laravel Web-Crawler

以爬蟲抓取 [click108 星座](http://astro.click108.com.tw/) 每日星座運勢為例

``` bash
# 產生該範例所需資料表
php artisan migrate --path=/database/migrations/WebCrawler

# 可直接執行網路爬蟲
php artisan webcrawler:download
```
