@extends('welcome')
<div>
    @include('components.dashboard')
    
    <header class="bg-buttonword shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-right font-bold font-lateefregular leading-tight text-gray-900">
          ا‏لوائح النتائج
        </h1>
      </div>
    </header>
    <main>
        <div id="chooseReport" class="grid grid-cols-1 gap-2 place-content-between h-60 mt-20">
            <div class="text-center">
                <a onclick="getDailyReports()" class="bg-button hover:bg-blue-light text-buttonword font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
                    التقارير اليومية
                </a>
            </div>
            <div class="text-center">
                <a onclick="getMonthlyReports()" class="bg-button hover:bg-blue-light text-buttonword font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
                    التقارير الشهرية
                </a>
            </div>
            <div class="text-center">
                <a onclick="getYearlyReports()" class="bg-button hover:bg-blue-light text-buttonword font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
                    ‏‏‏التقارير السنوية
                </a>
            </div>
        </div>
        <div id="dailyReports" style="display:none">
            <form action="/getdailyreports">
                @include('components.datepicker',['title' => '‏تاريخ الابتداء', 'datename' => 'fromdate'])
                {{-- <div class="p-24 my-5">&nbsp;</div> --}}
                @include('components.datepicker',['title' => '‏تاريخ ‏الانتهاء', 'datename' => 'todate'])
                <button type="submit" class="mt-2 mr-14 float-right justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-button hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    ‏تقرير
                </button>
                
            </form>
        </div>
        <div id="monthlyReports">
            <form>
            </form>
        </div>
        <div id="yearlyReports">
            <form>
            </form>
        </div>
        
    </main>
</div>
<script>
    function getDailyReports(){
        document.getElementById('chooseReport').style.display="none";
        document.getElementById('dailyReports').style.display=null;
    }
</script>
