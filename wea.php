<?php
$html = file_get_contents("https://www.livenewsnow.com/featured/weather-channel.html");

preg_match_all(
    '/(https.*m3u8)/',

    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[0];

header("Location: $link");
}
?>
