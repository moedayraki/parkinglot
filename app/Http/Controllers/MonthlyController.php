<?php

namespace App\Http\Controllers;

use App\Models\MonthlyPayments;
use Illuminate\Http\Request;
use App\Models\MonthlySubscriber;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MonthlyController extends Controller
{
    public function getMonth(Request $request){

        $selects = array();
        for ($i = 5; $i >= 0; $i--) {
            if(isset($request->date)){
                $date = '01-'.$request->date;
                $month = Carbon::parse($date)->subMonth($i)->format('m');
                $year = Carbon::parse($date)->subMonth($i)->format('Y');
            }
            else{
                $month = Carbon::today()->subMonth($i)->format('m');
                $year = Carbon::today()->subMonth($i)->format('Y');
            }        
            array_push($selects, array(
                'month' => $month,
                'year' => $year
                ));
        }
         $date = $year .'-'. $month .'-01';
        $subs = DB::table('Monthly_Subscribers')->select('Monthly_Subscribers.id','Monthly_Payments.date','name')
            ->leftJoin('Monthly_Payments', function ($join) use($date){
                $join->on('Monthly_Subscribers.id', '=', 'subscriber-id')
                    ->where('Monthly_Payments.date', '=', $date);
            })
            ->orderBy('name')
            ->get();        
        return view('pages.monthlyincome',[
            'subs' => $subs,
            'selects' => $selects
        ]);
    }

    public function newSub(Request $request){ 
        $sub = New MonthlySubscriber;
        $sub->name = $request->name;
        $sub->date = $request->date;
        $date = explode('-',$sub->date);
        $date[1] = sprintf("%02d", $date[1]+1);
        $sub->date = implode('-',$date);
        $sub->amount = $request->amount;  
        $sub->paid = 0;      
        $sub->save();

        return redirect('/monthly-subs',);
    }

    public function payMonth(Request $request){
        $payment = New MonthlyPayments;
        
        $date = $request->year .'-'.$request->month.'-01';
        $payment->setPayment($request->id,$date);
        return true;
    }
}
