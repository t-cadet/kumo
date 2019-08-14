create database if not exists kumo character set utf8 collate utf8_unicode_ci;
use kumo;

grant all privileges on kumo.* to 'kumo_user'@'localhost' identified by '';