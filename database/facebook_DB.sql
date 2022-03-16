

<<<<<<< HEAD
CREATE TABLE Users(
=======

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE users(
>>>>>>> 864afc8956b89d9c8b26e5498364342a07e91dbf
    user_id int primary key auto_increment,
    first_name varchar(25) not null,
    last_name varchar(25) not null,
    email varchar(255) not null,
<<<<<<< HEAD
    date_of_birth date not null,
    gender char(1) not null
);

CREATE TABLE Posts(
=======
    passwords varchar(50) not null
    date_of_birth date not null,
    gender char(1) not null,
);

CREATE TABLE posts(
>>>>>>> 864afc8956b89d9c8b26e5498364342a07e91dbf
    post_id int primary key auto_increment,
    title varchar(255) ,
    content_post varchar(255),
    image_name varchar(255),
    user_id int not null,
    foreign key (user_id) references Users(user_id)
<<<<<<< HEAD
);

CREATE TABLE Comments(
=======
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE comments(
>>>>>>> 864afc8956b89d9c8b26e5498364342a07e91dbf
    comment_id int primary key auto_increment,
    content varchar(255),
    user_id int not null,
    post_id int not null,
    foreign key (user_id) references Users(user_id),
    foreign key (post_id) references Posts (post_id)
<<<<<<< HEAD
)
=======
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> 864afc8956b89d9c8b26e5498364342a07e91dbf
