

SELECT COUNT(*) FROM emoloyee



SELECT SUM(salary) FROM emoloyee


SELECT AVG(salary) FROM emoloyee


SELECT MIN(salary) FROM emoloyee



SELECT MAX(salary) FROM emoloyee



SELECT *  FROM emoloyee GROUP BY designation


SELECT *  FROM emoloyee GROUP BY designation HAVING SUM(salary)>20000