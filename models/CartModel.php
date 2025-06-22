<?php

namespace app\models;

use app\core\Application;
use app\core\Model;
use PDO;

class CartModel extends Model
{
    public function tableName(): string
    {
        return 'cart';
    }

    public function getCartItemsByUser($userId): array
    {
        $sql = "
            SELECT 
                cart.id AS cart_id,
                cart.quantity,
                cart.created_at,
                products.name AS product_name,
                products.price
            FROM cart
            LEFT JOIN products ON cart.product_id = products.id
            WHERE cart.user_id = :user_id
        ";

        $pdo = Application::$app->db->pdo;
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function writeAttributes(): array
    {
        return ['user_id', 'product_id', 'quantity', 'created_at'];
    }

    public function readAttributes(): array
    {
        return ['id', 'user_id', 'product_id', 'quantity', 'created_at'];
    }

    public function rules(): array
    {
        return [];
    }
}
