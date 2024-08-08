<?php
namespace Internet;
class RealWebSite implements WebPageInterface {
    private $url;
    public function __construct ( string $url){
        $this->url = $url;
    }
    public function getContent() :string{
        return 'content of -------> '.$this->url ."\n";
    }

}