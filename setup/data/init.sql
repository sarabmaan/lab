use CMS;

CREATE TABLE authors (
    email VARCHAR(128) PRIMARY KEY,
    pass_hash VARCHAR(255) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    biography TEXT NOT NULL,
    created_date TIMESTAMP NOT NULL default current_timestamp,
    last_login_date TIMESTAMP NOT NULL default current_timestamp
);

insert into authors (email, pass_hash, firstname, lastname, biography)
values("sarabmaan0@gmail.com", "45678", "sarb", "maan", "hello dear");

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
values("post-a", "Post A","<article><h2>Post A</h2><section><p>This is a basic test article for the blog post.</p></section></article>", "sarabmaan0@gmail.com");
