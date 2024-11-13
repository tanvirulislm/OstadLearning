-- Active: 1731477436449@@127.0.0.1@3306@newproject
SELECT `firstName`, `lastName`, `email` FROM users

SELECT firstName,lastName,email FROM users

SELECT * FROM users WHERE id=10

SELECT * FROM users WHERE firstName='Sam'

DELETE FROM users WHERE firstName='Sam'

INSERT INTO users (firstName,lastName,email,mobile,password,otp) VALUES ('Tanvirul', 'Islam', 'tanvir@tanvir.com', '01454455656', 'encrypted_password1', '123456')

UPDATE users SET `firstName` = 'Khairul', `lastName` = 'Islam' WHERE id = 11


UPDATE users SET `firstName` = 'Ariful', `lastName` = 'Islam' WHERE `firstName`='Tanvirul' AND `lastName`= 'Islam'

