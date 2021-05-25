<?php
// Santiago Santacruz

// Santiago Santacruz

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //attributes id, total, created_at, updated_at, user_id
    protected $fillable = ['total', 'user_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($user_id)
    {
        $this->attributes['user_id'] = $user_id;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
