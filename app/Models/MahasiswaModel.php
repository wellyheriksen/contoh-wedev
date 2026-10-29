<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use factories\MahasiswaModelSeeder;

class MahasiswaModel extends Model
{
    /** @use HasFactory<\Database\Factories\MahasiswaModelFactory> */
    use HasFactory;
    protected $table ='mahasiswa';
    protected static $nama = [
        'Welly Heriksen',
        'Zeddax',
    ];
    Protected static $kelas = [
        'MTK',
        'Indonesia',
    ];
    protected static $nim = [
        '1076012510040',
        '1076012510030',
    ];



    
    public static function allDatanama(){
        return self::$nama;
    }
    public static function allDatakelas(){
        return self::$kelas;
    }
    public static function allDatanim(){
        return self::$nim;
    }
}
