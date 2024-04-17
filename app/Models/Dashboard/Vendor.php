<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description', 'country', 'email', 'phone', 'fax'];

    /**
     * Get all of the deployments for the project.
     */
    public function trademarks(): HasMany
    {
        return $this->hasMany(Trademark::class);
    }
}
