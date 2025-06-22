<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Application;
use app\core\Constant;
use app\models\DashboardModel;

class DashboardController extends Controller
{
    public function index()
    {
        $model = new DashboardModel();

        $data = [
            'totalSales' => $model->getTotalSales(),
            'totalUsers' => $model->getUserCount(),
            'totalRevenue' => $model->getTotalRevenue(),
            'topVinyls' => $model->getTopSellingProducts(),
            'totalAlbumsSold' => $model->getTotalAlbumsSold(),
            'topProfitable' => $model->getTopProfitableProducts(),

        ];

        return $this->view("dashboard", "main", $data);
    }

    public function authorizeRoles(): array
    {
        return [Constant::$administrator_role];
    }
}
