SELECT * FROM artists; 
SELECT Name, Album_id FROM `Tracks` ;
SELECT * FROM `Artists` LIMIT 5;

SELECT * FROM `Artists` LIMIT 10,5; //get 5 records starting from 10th record
SELECT * FROM `Albums` LIMIT 10,5;

SELECT * FROM `artists` ORDER BY name;

SELECT * FROM `artists` ORDER BY name DESC;

SELECT * FROM `Artists` WHERE id=16;

SELECT * FROM `Albums` WHERE id <= 16;

SELECT * FROM `Albums` WHERE id < 16;

SELECT * FROM `Albums` WHERE Title LIKE 'A%';

SELECT * FROM `Albums` WHERE Title LIKE '%o';

SELECT * FROM `Albums` WHERE Title = "Cafezinho";

SELECT * FROM `Albums` WHERE Title LIKE 'A%' AND Title like '%o';

SELECT * FROM `Albums` WHERE Title LIKE 'A%o'; //same

SELECT * FROM `Albums` WHERE Title LIKE 'A%' OR Title like '%o';


SELECT count(*) FROM albums;

SELECT count(*) FROM artists;

SELECT count(*) FROM artists WHERE name like 'A%'

SELECT count(*) FROM `Albums` WHERE Title LIKE 'A%' AND Title like '%o';


SELECT sum(amount) FROM `loans` WHERE type='L';

UPDATE loans SET type='L' WHERE id =5;
UPDATE loans SET type='L' WHERE Name='Dulal';

DELETE FROM `loans` WHERE id = 6;

SELECT sum(amount), type FROM `loans` GROUP BY type;

SELECT count(*), Genre_id FROM `Tracks` group by Genre_id;

SELECT count(*), Genre_id FROM `Tracks` group by Genre_id ORDER BY count(*);

SELECT count(*), Genre_id FROM `Tracks` group by Genre_id ORDER BY count(*) DESC;

SELECT count(*) as Total, Genre_id FROM `Tracks` group by Genre_id ORDER BY count(*) DESC;

INSERT INTO loans VALUES(null, 'Miraz', 500, 'B', '2024-11-03', null);

INSERT INTO loans (name, amount, type, `date`) VALUES('Munir', 500, 'L', '2024-11-03');

INSERT INTO loans (name, amount, type, `date`) 
VALUES 
  ('Munir', 500, 'L', '2024-11-03'),
  ('Ali', 750, 'B', '2024-11-02'),
  ('Sara', 1000, 'L', '2024-11-01');


