<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');

    public static $rules = [
        'univ' => 'required',
        'circle' => 'required',
        'sports' => 'required',
        'area' => 'required',
        //'url' => 'active_url',
    ];

    public static $messages = [
        'univ.required' => '所属大学名は必ず入力して下さい。',
        'circle.required' => '所属サークル名は必ず入力して下さい。',
        'sports.required' => '競技の種類は必ず入力して下さい。',
        'area.required' => '地域は必ず入力して下さい。',
        //'url.active_url' => '有効なアドレスを入力して下さい。',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getData()
    {
        return $this->univ . $this->sports . 'サークル' . $this->circle . ' ( 活動拠点 ： ' . $this->area . '  )';
    }
}