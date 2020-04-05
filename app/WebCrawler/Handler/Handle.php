<?php

namespace App\WebCrawler\Handler;

interface Handle
{
  public function setHtml($html);
  public function getWebData();
}