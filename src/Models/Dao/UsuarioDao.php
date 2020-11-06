<?php

namespace Src\Models\Dao;

use Src\Models\Domain\Usuario;

class UsuarioDao
{
    public function create(Usuario $usuario): bool
    {
        $sql = 'INSERT INTO Usuario (celUsu, codStatusUsu, cpfUsu, emailUsu, idTipo, idUsu, nomeUsu, senhaUsu) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $usuario->getCelUsu());
        $stmt->bindValue(2, $usuario->getCodStatusUsu());
        $stmt->bindValue(3, $usuario->getCpfUsu());
        $stmt->bindValue(4, $usuario->getEmailUsu());
        $stmt->bindValue(5, $usuario->getIdTipo());
        $stmt->bindValue(6, $usuario->getIdUsu());
        $stmt->bindValue(7, $usuario->getNomeUsu());
        $stmt->bindValue(8, $usuario->getSenhaUsu());

        return $stmt->execute();
    }

    public function login(Usuario $usuario): array
    {
        try {
            $sql = "SELECT * FROM Usuario WHERE emailUsu = ? AND senhaUsu = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $usuario->getEmailUsu());
            $stmt->bindValue(2, $usuario->getSenhaUsu());
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } else {
                return [];
            }
        } catch (\PDOException $exception) {
            throw $exception;
        }
    }

    public function read()
    {
        try {
            $sql = "SELECT * FROM Usuario";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } else {
                return [];
            }
        } catch (\PDOException $exception) {
            throw $exception;
        }
    }

    public function readUserId(Usuario $user)
    {
        try {
            $sql = "SELECT * FROM Usuario where idUsu = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $user->getIdUsu());
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } else {
                return [];
            }
        } catch (\PDOException $exception) {
            throw $exception;
        }
    }

    public function updateUserId(Usuario $user)
    {
        try {
            $sql = "UPDATE Usuario SET nomeUsu = ? WHERE idUsu = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $user->getNomeUsu());
            return $stmt->execute();
        } catch (\PDOException $exception) {
            throw $exception;
        }
    }


    public function update(Usuario $usuario)
    {
        try {
            $sql = "UPDATE Usuario SET nomeUsu = ? WHERE idUsu = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $usuario->getNomeUsu());
            $stmt->bindValue(2, $usuario->getIdUsu());
            return $stmt->execute();
        } catch (\PDOException $exception) {
            throw $exception;
        }
    }

    public function delete($codUsuario)
    {
    }
}
