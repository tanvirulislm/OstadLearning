CREATE TABLE `emoloyee`(
   `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   `name` VARCHAR(200) NOT NULL,
   `email` VARCHAR(200) NULL,
   `salary` BIGINT(20) UNSIGNED,
   `designation` VARCHAR(200) NOT NULL
)



INSERT INTO `emoloyee` (`name`, `email`, `salary`, `designation`) VALUES
('John Doe', 'john.doe@example.com', 60000, 'Software Engineer'),
('Jane Smith', 'jane.smith@example.com', 75000, 'Project Manager'),
('Emily Johnson', 'emily.j@example.com', 50000, 'HR Manager'),
('Michael Brown', 'michael.b@example.com', 65000, 'Data Analyst'),
('Sarah Davis', NULL, 58000, 'Marketing Specialist'),
('David Wilson', 'david.w@example.com', 90000, 'Tech Lead'),
('Chris Martin', 'chris.m@example.com', 45000, 'Customer Support'),
('Amy Taylor', 'amy.t@example.com', 70000, 'UI/UX Designer'),
('James Anderson', NULL, 50000, 'Content Writer'),
('Patricia Thomas', 'patricia.t@example.com', 80000, 'DevOps Engineer'),
('Daniel Harris', 'daniel.h@example.com', 47000, 'SEO Specialist'),
('Jessica Moore', 'jessica.m@example.com', 62000, 'Accountant'),
('Matthew Clark', NULL, 40000, 'Junior Developer'),
('Laura Lewis', 'laura.l@example.com', 67000, 'Business Analyst'),
('Kevin Walker', 'kevin.w@example.com', 55000, 'Technical Writer'),
('Nancy Hall', NULL, 75000, 'Product Manager'),
('Justin Allen', 'justin.a@example.com', 49000, 'Sales Executive'),
('Barbara Young', 'barbara.y@example.com', 64000, 'Financial Analyst'),
('Steven King', NULL, 56000, 'Support Engineer'),
('Karen Scott', 'karen.s@example.com', 82000, 'QA Engineer'),
('Joshua Green', 'joshua.g@example.com', 47000, 'Graphic Designer'),
('Rebecca Adams', NULL, 70000, 'IT Consultant'),
('Ryan Nelson', 'ryan.n@example.com', 59000, 'Database Administrator'),
('Angela Carter', 'angela.c@example.com', 85000, 'Full Stack Developer'),
('Mark Phillips', NULL, 48000, 'Digital Marketer'),
('Samantha Parker', 'samantha.p@example.com', 74000, 'AI Specialist'),
('Robert White', 'robert.w@example.com', 42000, 'Intern'),
('Linda Lee', NULL, 78000, 'Cloud Engineer'),
('Charles Turner', 'charles.t@example.com', 53000, 'Software Tester'),
('Carol Martinez', 'carol.m@example.com', 62000, 'Business Development Executive');

