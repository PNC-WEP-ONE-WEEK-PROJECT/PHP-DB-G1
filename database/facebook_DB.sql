

CREATE TABLE "Users"(
    "user_id" int primary key auto_increment,
    "first_name" varchar(25) not null,
    "last_name" varchar(25) not null,
    "email" varchar(255) not null,
    "date_of_birth" date not null,
    "gender" char(1) not null
);

CREATE TABLE "Posts"(
    "post_id" int primary key auto_increment,
    "title" varchar(255) ,
    "content_post" varchar(255),
    "image_name" varchar(255),
    "user_id" int not null,
    foreign key ("user_id") references "Users"("user_id")
);

CREATE TABLE "Comments"(
    "comment_id" int primary key auto_increment,
    "content" varchar(255),
    "user_id" int not null,
    "post_id" int not null,
    foreign key ("user_id") references "Users"("user_id"),
    foreign key ("post_id") references "Posts" ("post_id")
)