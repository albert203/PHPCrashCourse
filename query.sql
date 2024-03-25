CREATE TABLE users(
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id)
);

CREATE TABLE comments(
	id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    comment_text TEXT NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    users_id INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);


INSERT INTO users (username, pwd, email) VALUES 
("JonoR", "Dani123", "johndoe@gmail.com");

INSERT INTO users (username, pwd, email) VALUES 
("Basse", "basse123", "basse@gmail.com");

UPDATE users SET username = "bassetest", pwd = "basse456" WHERE id = 2;

-- I did not execute this statement, just for reference
DELETE FROM users WHERE id = 1;

INSERT INTO comments (username, comment_text, users_id) VALUES 
("bassetest", "some random text", 2);