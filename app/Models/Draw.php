<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Draw extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'target',
    ];

    public function entered(){
        return Ticket::where('draw_id', $this->id)->count();
    }

    public function remaining(){

        $ticket = Ticket::where('draw_id', $this->id)->count();
        $amount = $this->target;

        return $amount - $ticket;
    }

    public function tickets(){
        return $this->hasMany(Ticket::class, 'draw_id');
    }
}
