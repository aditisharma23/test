<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Years extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = "years";
    protected $fillable = [
        'name','status'
    ];
     public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   


			public static function getoption()
			{
			    return Years::all();
			}
            public static function getoptionDetail($id = '')
           {
               return Years::where(array('id' => $id ))->get();
           }

           public static function getoptionmatch($condition)
           {
               return Years::where($condition)->pluck('name');
           }

           public static function insertoption($condition='')
           {
                return Years::insert($condition);
           }

            public static function updateoption($condition='',$id='')
           {
            $updateoptions = Years::findOrFail($id);
            $updateoptions->update($condition);
            return back();
           }
           
           public static function getdetailsuserret($condition='')
			{
			    
    			    $data= Years::where($condition)->orderBy('id', 'desc')->first();
    			    if(!empty($data->id) && !empty($data->id))
    			    {
    			       return $data->id; 
    			    }else
    			    {
    			       return '0'; 
    			    }
			   
			    
			}
           
           public static function updateoption2($condition='',$query='')
           {
            $updateoptions = Years::where($query);
            $updateoptions->update($condition);
            return back();
           }

            public static function getbycondition($conditiion = '')
            { 
            return Years::where($conditiion)->orderBy('id', 'desc')->get();
            }
}
