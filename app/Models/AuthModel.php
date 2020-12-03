<?php namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'testtable';
    protected $allowedFields = ['email', 'slug', 'password'];
    public function getTests($slug = false)
{
    if ($slug === false)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
}
}