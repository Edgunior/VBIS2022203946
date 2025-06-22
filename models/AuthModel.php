<?php

namespace app\models;

use app\core\Model;
use app\models\RoleModel;
use app\models\UserRolesModel;
use app\models\SessionModel;

class AuthModel extends Model
{
    public string $email = '';
    public string $password = '';
    public bool $active = true;
    public int $id;

    public function tableName(): string
    {
        return 'users';
    }

    public function writeAttributes(): array
    {
        return ['email', 'password', 'active'];
    }

    public function readAttributes(): array
    {
        return ['id', 'email', 'password', 'active'];
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    /**
     * Registruje korisnika u bazi i dodeljuje mu rolu "Korisnik".
     */
    public function registration(): void
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->active = true;

        $this->create();

        // Uzimamo korisnika iz baze (da bismo dobili ID)
        $this->mapData($this->one("WHERE email = '$this->email'"));

        // Dodeljujemo osnovnu rolu: Korisnik
        $roleModel = new RoleModel();
        $roleModel->mapData($roleModel->one("WHERE name = 'Korisnik'"));

        $userRole = new UserRolesModel();
        $userRole->user_id = $this->id;
        $userRole->role_id = $roleModel->id;
        $userRole->create();
    }

    /**
     * Autentifikuje korisnika poređenjem unete lozinke sa heširanom lozinkom iz baze.
     */
    public function login(): bool
    {
        $result = $this->one("WHERE email = '$this->email'");
        if ($result !== null) {
            return password_verify($this->password, $result['password']);
        }
        return false;
    }

    /**
     * Vraća model sa sesijom: email i sve role koje korisnik ima.
     */
    public function sessionData(): SessionModel
    {
        $sql = "
            SELECT u.email, r.name AS role 
            FROM user_roles ur
            INNER JOIN users u ON ur.user_id = u.id
            INNER JOIN roles r ON ur.role_id = r.id
            WHERE u.email = :email
        ";

        $stmt = $this->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        $session = new SessionModel();

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $session->email = $row['email'];
            $session->roles[] = $row['role'];
        }

        return $session;
    }
}
