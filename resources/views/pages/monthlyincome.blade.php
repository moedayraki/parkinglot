@extends('welcome')

<div >
    @include('components.dashboard')
    
    <header class="bg-buttonword shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-right font-bold font-lateefregular leading-tight text-gray-900">
          الاشتراك الشهري
        </h1>
      </div>
    </header>
    <main dir="rtl">
      <div id="monthly-chart" class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div onclick="newReg()" class="bg-green-200 rounded border shadow-lg">
                <h2 class="text-2xl text-center py-2  text-word font-semibold font-lateefregular leading-tight">اضافة مشترك جديد</h2>
            </div>
            <div class="my-2 flex sm:flex-row flex-col">
                <div class="flex flex-row mb-1 sm:mb-0">                    
                    <div class="relative">
                        <select onchange="getDifferentMonth(this)"                       
                            class="appearance-none h-full rounded-r border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach($selects as $key => $select)
                                <option @if($key+1 == count($selects))selected="selected"@endif>{{$select['month']}}-{{$select['year']}}</option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative">
                        <select onchange="switchPayees(this)"                           
                            class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="everything">الكل</option>
                            <option value="paid">المدفوع</option>
                            <option value="notpaid">الغير مدفوع</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="بحث" id="myInput" onkeyup="filterTable()"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal" id="myTable">
                        <thead>
                            <tr>   
                              <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    المشترك
                                </th>                                                                                            
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    الحالة
                                </th>
                            </tr>
                        </thead>
                        <tbody class="overflow-y-auto">
                            @foreach($subs as $sub)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">                                        
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$sub->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>                                
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        @if($sub->date)
                                            <span 
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative">مدفوع</span>
                                            </span>
                                        @else
                                            <span onclick="payNow(this)" data-id={{$sub->id}} data-month={{$selects[count($selects)-1]['month']}} data-year={{$selects[count($selects)-1]['year']}}
                                                class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                                <span class="relative">غير مدفوع</span>
                                            </span>
                                        @endif
                                    </td>
                                </tr>                            
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>  
    <div id="reg-form" class="hidden">
        <form action="/newsub" method="POST">
            @csrf
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                @include('components.datepicker',['title' => 'تاريخ الاشتراك','datename' => 'date'])
                <div class="w-screen flex items-center justify-center ">    
                    <div class="antialiased sans-serif">
                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                            <div class="container mx-auto px-4 py-2 md:py-10">
                            <div class="mb-5 w-64">
                                <label for="name" class="text-right font-bold font-lateefregular mb-1 text-gray-700 block">الاسم</label>
                                <input value="" type="text" name="name" autocomplete="none" id="name" class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">

                                <label for="amount" class="mt-2 text-right font-bold font-lateefregular mb-1 text-gray-700 block">رسم الاشتراك</label>
                                <input value="" type="number" name="amount" id="ammount" autocomplete="given-name" class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">

                                <button type="submit" class="my-10 float-right justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-button hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                تسجيل المشترك
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>   
        </form>
    </div>   
    </main>
  </div>

  <script>
    function filterTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
    }

    function newReg(){
        var monthlychart = document.getElementById('monthly-chart');
        var regform = document.getElementById('reg-form');
        monthlychart.classList.add('hidden');
        regform.classList.remove('hidden');
    }

    function payNow(that){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let element = that;
        let id= element.dataset.id;
        let month = element.dataset.month;
        let year = element.dataset.year;
        $.post( "/paymonth",{id:id , month:month , year:year}).done(function(request){
            that.innerText = 'مدفوع';
            that.classList.remove('text-red-900');
            that.classList.add('text-green-900');
        });       
    }

    function getDifferentMonth(that){
        let date = that.value;
        $.get('/monthly-subs',{date:date}).done(function(response){
            $("html").html(response);
        });
    }

    function switchPayees(that){
        var aTags = document.getElementsByTagName("span");        
                
        if(that.value == 'paid'){
            var invisibleText = "غير مدفوع";
            var visibleText = "مدفوع";
        }
        else if(that.value == 'notpaid'){
            var visibleText = "غير مدفوع";
            var invisibleText = "مدفوع";
        }
        else{
            var invisibleText = "none";
            var visibleText = "غير مدفوع";
            var visibleText2 = "مدفوع";
        }
        for (var i = 0; i < aTags.length; i++) {
            if (aTags[i].textContent == invisibleText) {
                aTags[i].closest('tr').style.display = "none";            
            }
            else if(aTags[i].textContent == visibleText || aTags[i].textContent == visibleText2){
                aTags[i].closest('tr').style.display = null;            
            }
        }
    }
  </script>   