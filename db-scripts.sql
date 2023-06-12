/* create user table */
CREATE TABLE user (
    user_id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    gender CHAR NOT NULL,
    birthdate DATE NOT NULL,
    profile_image VARCHAR(255),
    country VARCHAR(100),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id)
);

INSERT INTO user (email, user_name, password, first_name, last_name, gender, birthdate, profile_image, country)
VALUES
    ('user1@gmail.com', 'user1_name', 'password1', 'first1', 'last1', 'm', '2012-12-12','user1.jpg', 'srilanka'),
    ('user2@gmail.com', 'user2_name', 'password2', 'first2', 'last2', 'f', '2012-12-14','user2.jpg', 'srilanka'),
    ('user3@gmail.com', 'user3_name', 'password3', 'first3', 'last3', 'm', '2012-12-15','user3.jpg', 'srilanka'),
    ('user4@gmail.com', 'user4_name', 'password4', 'first4', 'last4', 'f', '2012-12-16','user4.jpg', 'srilanka'),
    ('user5@gmail.com', 'user5_name', 'password5', 'first5', 'last5', 'm', '2012-12-12','user5.jpg', 'srilanka'),
    ('user6@gmail.com', 'user6_name', 'password6', 'first6', 'last6', 'm', '2012-12-19','user6.jpg', 'srilanka');



CREATE TABLE post (
    post_id INT NOT NULL AUTO_INCREMENT,
    posted_user_id INT NOT NULL,
    book_name VARCHAR(255) NOT NULL,
    book_author VARCHAR(255) NOT NULL,
    book_description VARCHAR(255) NOT NULL,
    image varchar(100) NOT NULL,
    comments_count INT NOT NULL,
    upvote_count INT NOT NULL,
    downvote_count INT NOT NULL,
    status VARCHAR(20)
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_id),
    FOREIGN KEY (posted_user_id) REFERENCES user(user_id)
);

CREATE TABLE support_ticket (
    support_ticket_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    category VARCHAR(255) NOT NULL,
    statement TEXT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (support_ticket_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id);
);

CREATE TABLE post_image (
    post_image_id INT NOT NULL AUTO_INCREMENT,
    post_id INT NOT NULL,
    image varchar(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (post_image_id),
    FOREIGN KEY (post_id) REFERENCES post(post_id);
);
