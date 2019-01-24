<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User_test extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = "user_test";
    protected $fillable = [
        'user_id','test_id','total_questions','attempt_answer','correct_answers'
    ];
     public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   


			public static function getoption()
			{
			    return User_test::all();
			}
            public static function getoptionDetail($id = '')
           {
               return User_test::where(array('id' => $id ))->get();
           }

           public static function getoptionmatch($condition)
           {
               return User_test::where($condition)->pluck('test_id');
           }
           
           public static function getoptionmatch2($condition)
           {
               return User_test::where($condition)->pluck('test_id');
           }

           public static function insertoption($condition='')
           {
                return User_test::insert($condition);
           }
           
            public static function insertoption2($condition='')
           {
                $id= User_test::create($condition)->id;
                return $id;
           }

            public static function updateoption($condition='',$id='')
           {
            $updateoptions = User_test::findOrFail($id);
            $updateoptions->update($condition);
            return back();
           }
           
           public static function updateoption2($condition='',$query='')
           {
            $updateoptions = User_test::where($query);
            $updateoptions->update($condition);
            return back();
           }
           
            public static function getbyconditionpagination($conditiion = '')
            { 
            return User_test::where($conditiion)->orderBy('id', 'desc')->get();
            }
            public static function getbyconditionpagination2($conditiion = '')
            { 
            return User_test::where($conditiion)->limit(10)->orderBy('id', 'desc')->get();
            }
            public static function getbycondition($conditiion = '')
            { 
            return User_test::where($conditiion)->get();
            }
}
