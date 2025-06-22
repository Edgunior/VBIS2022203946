Projekat iz predmeta VBIS

php -S localhost:8000 -t public/

XAMPP Setup Apache -> Config -> Apache (httpd.conf) -> DocumentRoot

SQL - Query (For Testing)

INSERT INTO orders (user_id, created_at) VALUES (2, NOW());

INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (2, 1, 5, 30),
(2, 3, 5, 40),
(2, 9, 5, 40);
