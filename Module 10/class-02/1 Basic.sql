-- Active: 1731424507342@@127.0.0.1@3306@demo



SELECT * from users

SELECT `firstName`,`lastName`,`email` FROM users

SELECT * FROM users WHERE `firstName`='Sam'

DELETE FROM users WHERE id=10


INSERT INTO users 
(firstName,lastName,email,mobile,password,otp)
VALUES
('A','B','C','D','E','0')


UPDATE users SET `firstName`='Amin',`lastName`='Babu'
WHERE id=11

