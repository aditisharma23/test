<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class country extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
 protected $table = 'country';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','parent','code','status'
    ];
 public  static function getname($id){
    
       $user = country::where('id',$id)->first();
       echo $user['name'];
}
public  static function getname1($id){
    
       $user = country::where('id',$id)->pluck('name');
       return $user;
}
public static function getparent($id)
{
     $user = country::where('id',$id)->first();
       return $user->name;
}
  public function parent_admin(){
        return $this->hasOne('App\country', 'id', 'parent')
                    ->withTrashed(); // get inactive parent as well
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     	public static function getoption()
			{
			    return country::where([['status', '=','1' ],['parent', '=','0' ]])->orderBy('id', 'desc')->get();
			}
				public static function getoptionstates()
			{
			    return country::where([['status', '=','1' ],['parent', '!=','0' ]])->orderBy('id', 'desc')->get();
			}
            public static function getoptionDetail($id = '')
           {
               return country::where(array('id' => $id ))->get();
           }
           	public static function getoption2()
			{
			    return country::where([['status', '!=','2' ]])->orderBy('id', 'desc')->paginate(10);
			}

           public static function getoptionmatch($condition)
           {
               return country::where($condition)->pluck('name');
           }
           
           public static function getoptionmatch2($condition)
           {
               return country::where($condition)->pluck('id');
           }

           public static function insertoption($condition='')
           {
                return country::insert($condition);
           }
           
            public static function getdetailsuserret($condition='')
			{
			    
    			    $data= country::where($condition)->orderBy('id', 'desc')->first();
    			    if(!empty($data->id) && !empty($data->id))
    			    {
    			       return $data->id; 
    			    }else
    			    {
    			       return '0'; 
    			    }
			   
			    
			}

            public static function updateoption($condition='',$id='')
           {
            $updateoptions = country::findOrFail($id);
            $updateoptions->update($condition);
            return back();
           }
           
           public static function updateoption2($condition='',$query='')
           {
            $updateoptions = country::where($query);
            $updateoptions->update($condition);
            return back();
           }

            public static function getbycondition($conditiion = '')
            { 
            return country::where($conditiion)->get();
            }
   
}
