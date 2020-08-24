<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Charts\Shart;
use Auth;
use DB;
use App\Category;
use App\Offer;
use App\Contact;
class adminController extends Controller
{
    public function index()
    {
     
            if(Auth::user()->role==1)
            {
                $latest=User::get()->count();
                $cates=Category::get()->count();
                $visitors=User::where('visitor',1)->count();
                $users5=User::orderBy('created_at','desc')->get()->take(5);
                $offer=Offer::get()->count();

                $msgs=Contact::orderBy('created_at','desc')->get();
                $msgsCount=Contact::get()->count();

                $today_users = User::whereDate('created_at', today())->count();
$yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
$users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();

                $chart=new Shart;
                $chart->labels(['One', 'Two','Three']);
                $chart->dataset('My dataset', 'line', [$today_users, $yesterday_users,$users_2_days_ago ]);

            return view('admin/index',compact('latest','visitors','users5','chart','cates','offer','msgs','msgsCount'));
    
            }
        
    }
    
    
    public function contactMsg()
    {
                $msgs=Contact::orderBy('created_at','desc')->get();
                
                return view('admin.contact.index');
    }
}
