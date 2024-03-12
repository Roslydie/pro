<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'tel',
        'prof',
        'adresse',
        'password',
    ];
}
class User extends Authenticatable
{
    use Notifiable;

    // Reste de votre modèle...
    protected $fillable = [
        'email',
        'password',
    ];
}