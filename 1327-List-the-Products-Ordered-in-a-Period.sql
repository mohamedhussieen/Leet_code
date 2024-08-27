SELECT
    P.product_name,
    SUM(O.unit) AS unit
FROM Orders AS O
LEFT JOIN Products AS P
    ON O.product_id = P.product_id
WHERE DATE_FORMAT(O.order_date,'%Y-%m') ='2020-02'
GROUP BY O.product_id
HAVING unit >=100;