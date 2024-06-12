<?php


$row = fetch_article((int)$_GET['id']);

print'
<section class=article-display>
    <img class="article-img-display" src="img/' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
    <h3>' . $row['title'] . '</h3>
    <p>' . format_date($row['date']) . '</p>
    <p>' . $row['description'] . '</p>
</section>
';
