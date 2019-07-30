<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'clients';
    protected $fillable = ['cname', 'constitution', 'address', 'city', 'contperson', 'email', 'bank', 'texposure', 'Ratedexpo', 'ratinghist', 'nextfolloup', 'industrytype', 'purpose', 'status'];
}

