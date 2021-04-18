<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $name
 * @property int $age
 * @property float $salary
 *
 * @property string created_at
 * @property string $updated_at
 */
class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
}
