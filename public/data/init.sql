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


CREATE TABLE posts(
    slug varchar(128) not null primary key,
    title varchar(255) not null,
    content text,
    author varchar(128) not null,
    post_date timestamp default current_timestamp,
    index(author),
    foreign key (author)
    references authors(email));

insert into 'posts' (slug, title, content, author)
values("post-a", "Post A","<article><h2>Post A</h2><section><p>This is a basic test article for the blog post.</p></section></article>", "sarabmaan0@gmail.com";
