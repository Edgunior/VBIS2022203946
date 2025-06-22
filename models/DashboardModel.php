<?php

namespace app\models;

use app\core\Model;
use PDO;

class DashboardModel extends Model
{
    public function tableName(): string
    {
        return ''; // nije potrebno za dashboard
    }

    public function getTotalAlbumsSold(): int
{
    $stmt = self::prepare("SELECT SUM(quantity) FROM order_items");
    $stmt->execute();
    return (int) $stmt->fetchColumn();
}


    public function getTotalSales(): int
    {
        $stmt = self::prepare("SELECT COUNT(*) FROM orders");
        $stmt->execute();
        return (int) $stmt->fetchColumn();
    }


    public function getTopProfitableProducts(): array
{
    $stmt = self::prepare("
        SELECT p.name, SUM(oi.quantity * oi.price) AS total_revenue
        FROM order_items oi
        JOIN products p ON oi.product_id = p.id
        GROUP BY oi.product_id
        ORDER BY total_revenue DESC
        LIMIT 5
    ");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function getTotalRevenue(): float
    {
        $stmt = self::prepare("SELECT SUM(quantity * price) FROM order_items");
        $stmt->execute();
        return (float) $stmt->fetchColumn();
    }

    public function getTopSellingProducts(): array
    {
        $stmt = self::prepare("
            SELECT p.name, SUM(oi.quantity) as total_sold
            FROM order_items oi
            JOIN products p ON oi.product_id = p.id
            GROUP BY oi.product_id
            ORDER BY total_sold DESC
            LIMIT 5
        ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserCount(): int
    {
        $stmt = self::prepare("SELECT COUNT(*) FROM users");
        $stmt->execute();
        return (int) $stmt->fetchColumn();
    }

    public function writeAttributes(): array
    {
        return [];
    }

    public function readAttributes(): array
    {
        return [];
    }

    public function rules(): array
    {
        return [];
    }
}
