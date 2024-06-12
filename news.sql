create table news
(
    id          int auto_increment
        primary key,
    title       varchar(255)                        not null,
    description text                                not null,
    date        timestamp default CURRENT_TIMESTAMP not null on update CURRENT_TIMESTAMP,
    picture     varchar(255)                        not null,
    archive     enum ('Y', 'N')                     not null,
    category    enum ('music', 'sport')             not null
)
    charset = latin1;

INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (1, 'New Album Release: Melodies of the Soul', 'Experience the latest masterpiece from the acclaimed artist. With a blend of soulful melodies and heartfelt lyrics, this album promises to take listeners on an unforgettable journey through the depths of human emotion.', '2024-05-17 00:37:17.0', 'music1.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (2, 'Concert Announcement: Symphony Under the Stars', 'Prepare to be mesmerized by an enchanting night of classical music. Join us for a magical evening filled with timeless symphonies performed by world-renowned musicians.', '2024-05-11 00:37:17.0', 'music2.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (3, 'Exclusive Interview: Behind the Lyrics', 'Go behind the scenes with the artist as they share insights into the inspiration behind their latest hit single. Discover the stories behind the lyrics and the creative process that brought the song to life.', '2024-05-25 00:37:17.0', 'music3.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (4, 'Music Festival Announcement: Rhythms of the World', 'Get ready for the ultimate music extravaganza! Join us for a weekend of non-stop music, featuring artists from every corner of the globe. From rock to reggae, there\'s something for everyone at this year\'s festival.', '2024-05-25 00:37:17.0', 'music4.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (5, 'Album Review: Chart-Topping Sensation', 'Critics and fans alike are raving about the latest album from the breakout artist. With catchy hooks and infectious beats, this album is destined to dominate the charts for weeks to come.', '2024-06-07 00:37:17.0', 'music5.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (6, 'Music Video Premiere: Visual Spectacle', 'Be the first to witness the stunning visuals of the artist\'s latest music video. Directed by award-winning filmmakers, this visual masterpiece is sure to captivate audiences around the world.', '2024-05-16 00:37:17.0', 'music6.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (7, 'Concert Review: Unforgettable Night', 'Relive the magic of last night\'s sold-out concert. From electrifying performances to unexpected guest appearances, it was a night to remember for music fans everywhere.', '2024-05-15 00:37:17.0', 'music7.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (8, 'Artist Spotlight: Rising Star', 'Meet the newest sensation in the music industry. With a unique sound and undeniable talent, this artist is poised to take the world by storm. Get to know the face behind the music.', '2024-05-17 00:37:17.0', 'music8.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (10, 'Exclusive Performance: Intimate Acoustic Session', 'Experience the raw emotion and stripped-back sound of the artist\'s acoustic performance. In this exclusive session, they\'ll perform fan-favorite songs in an intimate setting, creating a truly unforgettable experience.', '2024-06-03 00:37:17.0', 'music10.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (12, 'Music Industry Awards: And the Winner Is...', 'Celebrate the best and brightest in the music industry at this year\'s awards ceremony. From breakout artists to legendary performers, it\'s a night of glamour, excitement, and unforgettable moments.', '2024-05-21 00:37:17.0', 'music12.jpg', 'N', 'music');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (13, 'Football Match Preview: Clash of Titans', 'Gear up for an epic showdown as two football giants face off on the pitch. With championship aspirations on the line, expect nothing less than a fierce battle between these powerhouse teams.', '2024-05-11 00:37:17.0', 'sport1.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (14, 'Olympic Games Update: Road to Glory', 'Follow the journey of athletes as they compete on the world stage. From heart-stopping victories to inspiring underdog stories, the Olympic Games are a testament to the power of perseverance and dedication.', '2024-05-10 00:37:17.0', 'sport2.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (15, 'Basketball Playoff Recap: Game-Changing Moments', 'Relive the thrilling moments from last night\'s playoff game. From buzzer-beating shots to game-changing plays, it was a night of intense action and unforgettable highlights.', '2024-05-11 00:37:17.0', 'sport3.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (16, 'Tennis Grand Slam Preview: Battle for Supremacy', 'Get ready for a showdown of epic proportions as tennis\'s finest compete for Grand Slam glory. With fierce competition and nail-biting matches, it\'s anyone\'s game at this prestigious tournament.', '2024-05-12 00:37:17.0', 'sport4.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (17, 'Athletics Championships: Pushing the Limits', 'Witness the world\'s top athletes push the boundaries of human potential at the Athletics Championships. From record-breaking sprints to gravity-defying jumps, it\'s a showcase of athleticism at its finest.', '2024-05-18 00:37:17.0', 'sport5.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (18, 'Golf Tournament Update: On the Green', 'Stay up-to-date with the latest action from the golf course. With birdies, bogeys, and everything in between, this tournament promises to deliver excitement at every turn.', '2024-05-15 00:37:17.0', 'sport6.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (19, 'Swimming Championships: Making Waves', 'Dive into the world of competitive swimming at the Championships. From Olympic hopefuls to world-record holders, the pool is filled with talent and determination.', '2024-05-13 00:37:17.0', 'sport7.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (20, 'Cycling Race Recap: Uphill Battle', 'Pedal to the metal as cyclists tackle grueling climbs and treacherous descents in this thrilling race. With breathtaking scenery and heart-pounding action, it\'s a race to the finish like no other.', '2024-05-10 00:37:17.0', 'sport8.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (21, 'Surfing Competition Highlights: Riding the Waves', 'Catch the waves and witness the adrenaline-pumping action of the surfing competition. From daring maneuvers to breathtaking wipeouts, surfers give it their all in pursuit of victory.', '2024-05-31 00:37:17.0', 'sport9.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (22, 'Boxing Match Preview: Fight Night', 'Get ready for a night of hard-hitting action as boxing\'s biggest names step into the ring. With titles on the line and pride at stake, expect fireworks in every round.', '2024-06-08 01:17:19.0', 'sport10.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (23, 'Rugby Championship Update: Battle on the Field', 'Brace yourself for bone-crunching tackles and electrifying runs in the Rugby Championship. From scrums to lineouts, it\'s a test of strength and strategy as teams vie for supremacy on the field.', '2024-05-22 00:37:17.0', 'sport11.jpg', 'N', 'sport');
INSERT INTO sopitas.news (id, title, description, date, picture, archive, category) VALUES (24, 'Gymnastics Tournament Highlights: Soaring to New Heights', 'Marvel at the grace and agility of gymnasts as they compete for gold. From elegant floor routines to jaw-dropping aerial maneuvers, it\'s a display of athleticism like no other.', '2024-05-27 00:37:17.0', 'sport12.jpg', 'N', 'sport');
