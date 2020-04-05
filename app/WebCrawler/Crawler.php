<?php

namespace App\WebCrawler;

use App\WebCrawlerModel;
use App\WebCrawler\Handler\Handle;

class Crawler
{
  protected $curl;
  protected $urls;
  protected $data;

  public function __construct()
  {
    $this->curl = curl_init();
  }

  public function setUrls(Array $urls)
  {
    $this->urls = $urls;
    
    return $this;
  }

  public function start(Handle $handle)
  {
    $result = [];
    foreach ($this->urls as $url) {
      curl_setopt($this->curl, CURLOPT_URL, $url);
      curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
      $html = curl_exec($this->curl);
      $result[] = $handle->setHtml($html)->getWebData();
    }
    $this->data = $result;

    return $this;
  }

  public function save()
  {
    foreach ($this->data as $data) {
      WebCrawlerModel::create($data);
    }
  }

  public function __destruct()
  {
    curl_close($this->curl);
  }
}