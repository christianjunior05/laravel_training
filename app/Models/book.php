<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'summary',
        'author_id', // Assure-toi d'ajouter cette colonne dans ta migration
    ];

    /**
     * Obtenir l'auteur du livre.
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}