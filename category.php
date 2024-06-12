<?php

print'
<section class="article-section">
    <section class="content-home">';

if((int)$_GET['action'] == 1){
    fetch_articles_custom('SELECT * FROM news WHERE category="music" ORDER BY date DESC');
}

if ((int)$_GET['action'] == 2){
    fetch_articles_custom('SELECT * FROM news WHERE category="sport" ORDER BY date DESC');
}

print'
    </section>
        </section>';
?>