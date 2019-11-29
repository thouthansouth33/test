drop database if exists testdb99;
create database testdb99;
use testdb99;

create table test_table99(
user_id int,
user_name varchar(255),
password varchar(255)
);

insert into test_table99 values(1,"taro","123");
insert into test_table99 values(2,"jiro","456");
insert into test_table99 values(3,"hanako","789");