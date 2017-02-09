<?php

namespace simplephpcounter;

class Hits
{
  private $hitDir = __DIR__.DIRECTORY_SEPARATOR.'hits';
  private $hits;

  public function __construct($name, $dir=null)
  {
    if(!empty($dir)) {
      $this->hitDir = $dir;
    }
    $this->hits = $this->addHit($name);
  }

  public function hits()
  {
    return $this->hits;
  }

  private function addHit($name)
  {
    $file = $this->hitDir.DIRECTORY_SEPARATOR.$name;
    if(
      file_put_contents(
        $file,
        ($hits = trim(file_get_contents($file)) + 1),
        LOCK_EX
      ) == false) {
      throw new Exception(__FILE__.': unable to write to '.$file);
    }
    return $hits;
  }
}
