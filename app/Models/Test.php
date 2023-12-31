<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = ['name','content','user_id','photo'];

//    public function getNameAttribute($val){
//        return "The name :" . $val;
//    }

public function user(){
    return $this->belongsTo(User::class);
}

public static function boot()
{
    parent::boot(); // TODO: Change the autogenerated stub
    static::created(function ($model){
        dd($model);
//    $model->name = "from the static function boot model";
//    $model->save();
    });
    self::creating(function ($model){
        dd($model);

    });

}


}
