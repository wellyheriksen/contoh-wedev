<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected static $Programs = [
                'Calculator', 
                'Accounting', 
                'Student Report', 
                'POS Resto', 
                'Online Store', 
                'Pet Shop'];
    public static function allData(){
        return self::$Programs;
    }
    
}
