<?php
namespace Internet ;
class WebProxy implements WebPageInterface {
    private $realWebPage;
    private array $notAllowedSites = ['https//facebook.com', 'https://youtube.com'];

    public function __construct ( string $url){
        if (in_array($url,$this->notAllowedSites)) 
            $this->realWebPage = null;
        else
            $this->realWebPage =new RealWebSite($url) ;
    }
    public function getContent() :string{
         if (empty($this->realWebPage))
            return   "Access to this url is not allowed.\n";
        return $this->realWebPage->getContent() ;
    }
}