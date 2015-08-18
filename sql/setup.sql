create database ircnews character set utf8;
use ircnews;
grant all on irc.* to irc_user@localhost;
set password for irc_user@localhost=password('irc_password');

create table `news` (
	`id` int not null auto_increment primary key unique,
	`news_id` int,
	`title` text,
	`content` text,
	`author` text,
	`team` int,
	`created` date,
	`images` int,
	`image1` text,
	`image2` text
) CHARACTER SET 'utf8';