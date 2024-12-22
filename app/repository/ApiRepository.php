<?php

namespace App\Repository;

use App\Core\Database;
use App\Helpers\ErrorLog;

class ApiRepository
{
    public static function validateApiKey(string $api_key): bool
    {
        try {
            $stmt = Database::getConnection()->prepare(<<<SQL
                SELECT id, user_id, api_key
                FROM APP.ApiKeys
                WHERE api_key = :api_key
            SQL);
            $stmt->bindValue(':api_key', $api_key, \PDO::PARAM_STR);
            $stmt->execute();
            return ($stmt->fetch() != false) ? true : false;
        } catch (\PDOException $e) {
            error_log(ErrorLog::formattedErrorLog($e->getMessage()), 3, LOG_FILE_PATH);
            throw new \PDOException($e->getMessage());
        }
    }
}
