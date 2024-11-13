
-- SQL Hello World 

SELECT "HELLO WORLD" AS COL1

-- SQL + - * /
SELECT 2+2 AS COL

SELECT 2-2 AS COL

SELECT 2*2 AS COL

SELECT 2/2 AS COL



-- How to declear variable and assign value 
SET @num1 = 10;
SET @num2 = 20;
-- How TO DO MATH With SQL 
SELECT 
@num1 + @num2 AS Addition,
@num1 - @num2 AS Subtraction,
@num1 * @num2 AS Multiplication,
@num1 / @num2 AS Division,
@num1 % @num2 AS Modulus


 -- Random Number
 SELECT RAND() RandomValue

-- Find Minimum 
SELECT LEAST(@num1,@num2) AS MIN_VALUE


-- Find Max 
SELECT GREATEST(@num1,@num2) AS MAX_VALUE


-- PI 
SELECT PI() AS PIValue