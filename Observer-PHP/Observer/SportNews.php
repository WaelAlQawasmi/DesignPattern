<?php
namespace Observer;
class SportNews implements NewsListInterface{
    private $subscribersList =[];

    public function notify(String $message){
        foreach($this->subscribersList as $subscriber){
            $subscriber->update($message);
        }

    }
    public function subscribe(User $subscriber){
        $this->subscribersList[]=$subscriber;
        echo "User subscribed successfully" ."\n";

    }
    public function unsubscribe(User $subscriber){
        $index = array_search($subscriber, $this->subscribersList);
        if ($index !== false) {
            unset($this->subscribersList[$subscriber]);
            echo " User unsubscribed successfully". "\n";
        }
        echo " User not subscribed on this channel";
    }
    
}