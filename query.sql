CREATE TABLE users (
    id INT(11) NOTNULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)