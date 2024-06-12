create table users
(
    id       int auto_increment
        primary key,
    username varchar(255)                          not null,
    password varchar(255)                          not null,
    role     enum ('admin', 'user') default 'user' not null
)
    charset = latin1;

INSERT INTO sopitas.users (id, username, password, role) VALUES (2, 'Ivica', '$2y$10$gbZwkVjAb6hyztKkZsEXGevD440PNuziPgqty150N1wkQl3OeBVLy', 'user');
INSERT INTO sopitas.users (id, username, password, role) VALUES (3, 'Marko', '$2y$10$zCsL1wY5WeWJHlsYewukn.dp3SxPnJQQ7GmvOkc1XiU4XgtX07Qya', 'admin');
INSERT INTO sopitas.users (id, username, password, role) VALUES (4, 'admin', '$2y$10$GVFDjSvv.IiB8YQ32v5rEOGF9owUlcgBH5rwEy4vykJ9qjx0xTBNe', 'admin');
INSERT INTO sopitas.users (id, username, password, role) VALUES (5, 'user', '$2y$10$H/p1jWRG37bJ5oIjAaETROzYe45nmSZoFtpnH/8OW9Kpinfp9uVk2', 'user');
