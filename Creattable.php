CREATE TABLE tbl_hms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    father_name VARCHAR(50) NOT NULL,
    c_cnic VARCHAR(50) NOT NULL,
    d_dob DATE NOT NULL,
    s_status VARCHAR(10) NOT NULL,
    a_address VARCHAR(100) NOT NULL,
    e_email VARCHAR(50) NOT NULL,
    c_contact VARCHAR(15) NOT NULL
);