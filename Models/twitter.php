<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1209179162663149568-JKGX0tTCY5i5RXzhEH46jjNsgGlxdH",
    'oauth_access_token_secret' => "JO675W9l9YwZyBA6JjrEeWLksyhBFeLsJMbGWfoGrFmvW",
    'consumer_key' => "3FPoqb4GnANA2fAWknnkQoSpo",
    'consumer_secret' => "2SPVszi5hwKPV4ZUH0wY9yMW2Vf4DCmxtDBlJOoCX7zBDd86t3"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=OneAgencyMedia';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
?>