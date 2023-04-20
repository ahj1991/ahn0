CREATE TABLE name_card (
    num INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    job_title VARCHAR(30),
    team VARCHAR(30),
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(50),
    introduction VARCHAR(500),
    certification VARCHAR(100),
    advertiser_info VARCHAR(500),
    file_id VARCHAR(512) NOT NULL,
    name_orig VARCHAR(512) NOT NULL,
    name_save VARCHAR(512) NOT NULL
);