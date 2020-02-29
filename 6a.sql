SELECT
Cashier.name,Product.name,Category.name,Product.price
FROM ((Product INNER JOIN Cashier ON
 Product.id_cashier = Cashier.id )
INNER JOIN Category ON
 Product.id_category = Category.id);