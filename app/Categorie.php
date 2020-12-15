<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['label', 'code', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Categorie::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Categorie::class, 'parent_id');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function getParent($parent)
    {
        return $this->where('id', $parent)->get()->groupBy('parent_id');
    }

    public function getAllChildren()
    {
        return $this->childrens()->orderBy('label', 'asc');
    }

    public function professionnels()
    {
        return $this->belongsToMany(Professionnel::class);
    }
}
