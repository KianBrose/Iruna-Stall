<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blocker extends Model
{
    protected $table = 'blocker';

    protected $connection;

    /**
     * 
     * get database connection
     */
    public function getConnectionName()
    {
        return $this->connection;
    }

    /**
     * 
     * get table name
     */
    public function getTableName()
    {
        return $this->table;
    }
}
?>