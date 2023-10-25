CREATE TABLE tbl_reg (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    father_name VARCHAR(50) NOT NULL,
    cnic VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    status VARCHAR(10) NOT NULL,
    address VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contact VARCHAR(15) NOT NULL
);

CREAT TABLE tbl_contact(
    id INT AUTO_INCREMENT PRIMARY KEY;
    name VARCHAR(50) NOT NULL;
    email VARCHAR(50) NOT NULL;
    number VARCHAR(50) NOT NULL;
    message VARCHAR(50) NOT NULL;
);
