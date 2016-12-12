<?php namespace App\Modules\Review\Models;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'user_review';
    protected $guarded = array('id');
}