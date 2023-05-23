
SELECT * FROM `user` u1
LEFT JOIN `user` u2 ON u1.email = u2.email AND u1.created_at < u2.created_at  where u2.id IS NULL GROUP by u1.email


SELECT * FROM `user` u1
LEFT JOIN `user` u2 ON u1.email = u2.email AND u1.created_at > u2.created_at where u2.id IS NULL
 

Step 1 

SELECT * FROM `user` u1
LEFT JOIN `user` u2 ON u1.email = u2.email 


latest record use < , starting record use > 

SELECT * FROM `user` u1
LEFT JOIN `user` u2 ON u1.email = u2.email AND  u1.created_at  < u2.created_at
where u2.id IS NULL


step 2 :

SELECT * FROM `person` p1 
left join person p2 ON p1.parent_id = p2.id

 or join person
SELECT p1.*, p2.name FROM `person` p1 
join person p2 ON p1.parent_id = p2.id


Keep first  

DELETE u1 from users u1
join users u2 ON u1.email = u2.email AND u1.id > u2.id

Keep last 

DELETE u1 from users u1
join users u2 ON u1.email = u2.email AND u1.id < u2.id



video 
---------------------------------------------- 
GROUP BY
1) SELECT name, count(id) as tot FROM `tyres` GROUP by name
2) SELECT name, count(id) as tot,sum(user_id)  FROM `tyres` GROUP by name


1) SELECT * FROM person p
left join subjects s on s.userId = p.id GROUP by p.name order by p.id

SELECT p.*, count(s.id) total FROM person p
left join subjects s on s.userId = p.id GROUP by p.name order by p.id

where & having
1) 
SELECT p.*, count(s.id) total FROM person p
left join subjects s on s.userId = p.id 
where p.id < 5
GROUP by order by p.id

2) 

SELECT p.*, count(s.id) total FROM person p
left join subjects s on s.userId = p.id 
where p.id < 5
GROUP by p.name HAVING total > 0  order by p.id

or 

SELECT p.*, count(s.id) total,sum(s.weight) as marks FROM person p
left join subjects s on s.userId = p.id 
where p.id < 5
GROUP by p.name HAVING sum(s.weight) > 50  order by p.id


======================================================================= 
SubQuery video 
1) IN JOIN
SELECT * FROM `subjects` s
INNER JOIN (select * from person where id = 1) p on p.id = s.userId


2) Where 
SELECT * FROM `subjects` s 
where id = (SELECT id from person where id = 3)
or 
SELECT * FROM `subjects` s 
where id = (SELECT id from person where name = 'RAM')

3) 
SELECT * FROM `subjects` s 
where id IN (SELECT id from person where id < 3)

4) Select 
SELECT *,(SELECT name from person where id = s.userId) as personName FROM `subjects` s

or 
not work like this 
SELECT *,(SELECT * from person where id = s.userId) as personName FROM `subjects` s



---------------------------------------------------------------------  

Update users u 
INNER JOIN user_detail ud ON ud.user_id = u.id
SET u.phone = ud.phone

CASE video  

========================================================================= 
CASE VIDEO 

1) SELECT status FROM `user_sales` 

2) SELECT (CASE
    WHEN status = 1 THEN 'Success'
    WHEN status = 2 THEN 'Pending'
    ELSE 'false'
END) as status_name FROM `user_sales`

3) SELECT user_id, Count((CASE
    WHEN status = 1 THEN  id
END)) as success,  Count((CASE
    WHEN status = 0 THEN  id
END)) as fail FROM `user_sales` GROUP  by user_id


------------- ----------------- ---------------
4) complex 

SELECT u.name,u.id,us.status,us.product_id,us.created_at FROM `users` u
LEFT JOIN user_sales us ON us.user_id = u.id

2) SELECT u.name,u.id,us.status,us.product_id,us.created_at, count(us.id) FROM `users` u
LEFT JOIN user_sales us ON us.user_id = u.id GROUP by u.id

3) success 

SELECT u.name,u.id,us.status,us.product_id,us.created_at,  Count((CASE
    WHEN status = 1 THEN  us.id
END)) as success FROM `users` u
LEFT JOIN user_sales us ON us.user_id = u.id GROUP by u.id


4) SELECT u.name,u.id,us.status,us.product_id,us.created_at,  Count(us.id) FROM `users` u
LEFT JOIN user_sales us ON us.user_id = u.id AND (CASE when us.product_id =1 THEN  us.created_at BETWEEN '2023-03-10 00:00:00' AND '2023-03-31 23:59:59' ELSE 1=1 END) GROUP by u.id


