<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    use HasFactory;
    
    protected $table = 'consignments';
    protected $columns = ['company','contact','address_line_1','address_line_2','address_line_3','city','country'];
    protected $fillable = ['company','contact','address_line_1','address_line_2','address_line_3','city','country'];
}
