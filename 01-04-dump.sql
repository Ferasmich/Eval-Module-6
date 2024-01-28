CREATE DATABASE module6;

CREATE TABLE module6.students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    CV TEXT DEFAULT 'Student CV',
    dt_birth DATE,
    isAdmin BOOLEAN DEFAULT FALSE,
    dt_mis_a_jour DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );

 INSERT INTO module6.students (first_name, last_name, email, dt_birth) VALUES
  ('Alice', 'Smith', 'alice.smith@email.com', '1990-10-04'),
  ('Bob', 'Johnson', 'bob.johnson@email.com', '1988-05-12'),
  ('Charlie', 'Williams', 'charlie.williams@email.com', '1995-06-21'),
  ('David', 'Brown', 'david.brown@email.com', '1986-02-26'),
  ('Emily', 'Davis', 'emily.davis@email.com', '1994-09-14'),
  ('Frank', 'Wilson', 'frank.wilson@email.com', '1989-08-07'),
  ('George', 'Miller', 'george.miller@email.com', '1992-07-01'),
  ('Hannah', 'Taylor', 'hannah.taylor@email.com', '1991-03-19'),
  ('Isabella', 'Thomas', 'isabella.thomas@email.com', '1993-11-25'),
  ('John', 'Jones', 'john.jones@email.com', '1987-06-08');
  ";

  