<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\CartModel;
use app\core\Constant;

class CartController extends Controller
{
    public function cart()
    {
        $user = Application::$app->session->get(Constant::$auth_session);
        if (!$user) {
            header("Location: /login");
            exit;
        }

        $userId = $user->id ?? $user->idKorisnik ?? null;

        $model = new CartModel();
        $items = $model->getCartItemsByUser($userId);

        return $this->view('cart', 'main', ['items' => $items]);
    }

    public function addToCart()
    {
        $user = Application::$app->session->get(Constant::$auth_session);
        if (!$user) {
            header("Location: /login");
            exit;
        }

        $userId = $user->id ?? $user->idKorisnik ?? null;
        $productId = $_POST['product_id'] ?? null;

        if (!$productId || !$userId) {
            Application::$app->session->setFlash(Constant::$flash_session_error, "Invalid request.");
            header("Location: /shop");
            exit;
        }

        $model = new CartModel();
        $model->mapData([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        if ($model->create()) {
            Application::$app->session->setFlash(Constant::$flash_session_success, "Product added to cart.");
        } else {
            Application::$app->session->setFlash(Constant::$flash_session_error, "Failed to add product to cart.");
        }

        header("Location: /shop");
        exit;
    }

    public function authorizeRoles(): array
    {
        return []; // svi korisnici imaju pristup
    }
}