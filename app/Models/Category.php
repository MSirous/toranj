<?php

namespace App\Models;
use Baum\Node;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Node
{
    protected $table = 'category';
    use SoftDeletes;
}
