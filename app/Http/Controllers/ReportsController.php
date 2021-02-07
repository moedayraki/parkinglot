<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyIncome;

class ReportsController extends Controller
{
    public function getReports(){
        return view('pages.getreports');
    }

    public function getDailyReports(Request $request){
        $fromdate = $request->fromdate;
        $fromdate = explode('-',$fromdate);
        $fromdate[1] = sprintf("%02d", $fromdate[1]+1);
        $fromdate = implode('-',$fromdate);
        
        $todate = $request->todate;
        $todate = explode('-',$todate);
        $todate[1] = sprintf("%02d", $todate[1]+1);
        $todate = implode('-',$todate);

        $response = DailyIncome::where('date','>=',$fromdate)->where('date','<=',$todate)->get();        
        return view('pages.getdailyreports',[
            'response' => $response
        ]);
    }

    public function getMonthlyReports(){
        return view('pages.getmonthlyreports');
    }

    public function getYearlyReports(){
        return view('pages.getyearlyreports');
    }
}
