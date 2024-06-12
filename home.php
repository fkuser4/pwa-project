<?php
print'
<section class="article-section">
    <section class="music-section">
        <div class="music-container">
            <h2>MUSIC</h2>
        </div>    
        <hr class="music-hr">
    </section>    
    <section class="content-home">
';

fetch_articles_custom('SELECT * FROM news WHERE category="music" ORDER BY date DESC LIMIT 3');

print'
    </section>
     <section class="sport-section">
        <div class="sport-container">
            <h2>SPORT</h2>
        </div>
        <hr class="sport-hr">
     </section> 
    <section class="content-home">
';

fetch_articles_custom('SELECT * FROM news WHERE category="sport" ORDER BY date DESC LIMIT 3');

print'
    </section>
</section>';
?>