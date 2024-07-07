<?php
namespace Observer;
interface NewsListInterface {
public function notify(String $message);
public function subscribe(User $subscriber);
public function unsubscribe(User $subscriber);
}