<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partner_locator';
   /* protected $casts = [
        'countries_covered' => 'array',
        'states_covered' => 'array',
    ];*/

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters) {
        if($filters['status'] ?? false) {
            $query->where('status', 'like', '%' . request('status') . '%');
        }
        if($filters['country'] ?? false) {
            $query->where('countries_covered', 'like', '%' . request('country') . '%');
            if($filters['state'] ?? false) {
                $query->where('states_covered', 'like', '%' . request('state') . '%');
            }
        }
        if($filters['search'] ?? false) {
            $query->where('company', 'like', '%' . request('search') . '%')
                ->orWhere('address', 'like', '%' . request('search') . '%')
                ->orWhere('website', 'like', '%' . request('search') . '%')
                ->orWhere('address', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%');
        }
    }
}
