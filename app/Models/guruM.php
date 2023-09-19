<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guruM extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $fillable =["id","nip","nama_guru","mapel"];

    public function searchableAs()
    {
        return 'pesertadidik';
    }

    public function toSearchableArray()
    {

        return [
            'namalengkap' =>$this->namalengkap,
        ];
    } 
}
