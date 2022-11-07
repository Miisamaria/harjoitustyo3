drop database if exists shoppinglist;

create database shoppinglist;

use shoppinglist;

create table item (
    id int PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(255) not null,
    amount smallint UNSIGNED not null
);

insert into item (description,amount) values ('Test item',1);
insert into item (description,amount) values ('Katotaan osaanko mie',1);
insert into item (description,amount) values ('Vähän kyl epäilyttää',1);
