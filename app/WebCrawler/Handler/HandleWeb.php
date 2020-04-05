<?php

namespace App\WebCrawler\Handler;

use App\WebCrawler\Handler\Handle;

abstract class HandleWeb implements Handle
{
  protected $html;

  public function setHtml($html)
  {
    $this->html = $html;

    return $this;
  }

  abstract public function getWebData();
}