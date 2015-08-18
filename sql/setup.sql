create database ircnews character set utf8;
use ircnews;
grant all on ircnews.* to irc_user@localhost;
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
	`image_src1` text,
	`image_src2` text,
	`image_alt1` text,
	`image_alt2` text
) CHARACTER SET 'utf8';

