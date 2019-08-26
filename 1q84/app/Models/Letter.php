<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Letter extends Model
{
    /**
     * 可以分配的属性。
     *
     * @var array
     */
    protected $fillable = ['id','email','sender','receiver','tel','address','time','content_text','content_html','type','status','create_time'];

    protected $table = 'letter';

    public $timestamps = false;

    protected $connection = 'letter';


}
