@extends('welcome')
<div>
    @include('components.dashboard')
    
    <header class="bg-buttonword shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-right font-bold font-lateefregular leading-tight text-gray-900">
          ‏التقارير اليومية
        </h1>
      </div>
    </header>
    <main dir="rtl" class="px-4">                    
      <table class="w-full">
        <tbody class="">
          @foreach($response as $row)
            <tr class="relative transform scale-100 text-xs py-1 border-b-2 border-blue-100 cursor-default bg-box bg-opacity-25">
              <td class="pl-5 pr-3 whitespace-no-wrap">
                  <div class="text-gray-400">‏اليوم</div>
                  <div>{{$row->date}}</div>
              </td>
              <td class="px-2 py-2 whitespace-no-wrap">
                  <div class="leading-5 text-gray-500 font-medium">‏المدخول</div>
                  <div class="leading-5 text-gray-800">{{$row->amount}}</div>
              </td>
            </tr>
          @endforeach
          <tr class="relative transform scale-100 text-xs py-1 border-b-2 border-green-100 cursor-default bg-buttonword bg-opacity-25">
            <td class="pl-5 pr-3 whitespace-no-wrap">
              <div>‏المجموع</div>
            </td>
            <td class="px-2 py-2 whitespace-no-wrap">
              <div class="leading-5 text-gray-800">{{$response->sum('amount')}}</div>
            </td>
          </tr>
        </tbody>
      </table>          
    </main>
  </div>
