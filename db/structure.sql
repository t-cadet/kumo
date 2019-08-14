drop table if exists chapter;

create table chapter (
    id integer not null primary key auto_increment,
    title varchar(255) not null,
    content text not null
) engine=innodb character set utf8 collate utf8_unicode_ci;