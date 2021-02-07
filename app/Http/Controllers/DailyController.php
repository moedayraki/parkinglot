<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyIncome;
use Carbon\Carbon;

class DailyController extends Controller
{
    public function getToday(Request $request){
        $user = $request->user;
        $today = Carbon::today()->format('Y-m-d');
        $income = DailyIncome::where('date',$today)->first();
        // dd($today);
        if(!is_null($income)){
            $income = $income->amount;
            return view('pages.dailyincome',['income' => $income,'user' => $user,'status' => 'ملاحظة: لقد تم نعبئة المدخول اليوم']);
        }
        return view('pages.dailyincome',['income' => $income,'user' => $user]);
    }

    public function setIncome(Request $request){
        $date = $request->date;
        $date = explode('-',$date);
        $month = $date[1]+1;
        $year = $date[0];
        $date[1] = sprintf("%02d", $date[1]+1);
        $date = implode('-',$date);
        $amount = $request->amount;
        $user = $request->user;
        $income = DailyIncome::firstOrCreate(['date' => $date, 'amount' => $amount, 'user' => $user,'month' => $month , 'year' => $year]);
        $income->save();

        $monthlyIncome = DailyIncome::where('month', $month)->sum('amount');
        $yearlyIncome = DailyIncome::where('year', $year)->sum('amount');
        
        return view('pages.minireport',['amount' => $amount ,'month' => $month, 'year' => $year , 'monthlyIncome' => $monthlyIncome , 'yearlyIncome' => $yearlyIncome,'user' => $user]);
    }
}
