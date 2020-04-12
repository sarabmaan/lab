use CMS;

CREATE TABLE AUTHORS (
    email varchar(128) not null primary key,
    pass_hash varchar(255) not null,
    firstname varchar(30) not null,
    lastname varchar(30) not null,
    biography text not null,
    created_date timestamp default current_timestamp,
    last_login_date timestamp default current_timestamp
);

insert into authors (email, pass_hash, firstname, lastname, biography,created_date, current_timestamp);