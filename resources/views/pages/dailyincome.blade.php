@extends('welcome')
<div>
    @include('components.dashboard')
    
    <header class="bg-buttonword shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl text-right font-bold font-lateefregular leading-tight text-gray-900">
          المدخول اليومي
        </h1>
      </div>
    </header>
    <main>
      @if (isset($status))
        <div class="bg-button border border-red-light text-right pl-4 pr-8 py-3 rounded relative" role="alert">
          <strong class="font-bold text-buttonword font-lateefregular ">{{$status}}</strong>          
        </div>           
      @endif
      <form action="/setIncome" method="POST">
        @csrf
        <input hidden value="{{$user}}" name="user">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
          @include('components.datepicker',['title' => 'تاريخ المدخول','datename' => 'date'])
          <div class="w-screen flex items-center justify-center ">    
            <div class="antialiased sans-serif">
              <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                  <div class="container mx-auto px-4 py-2 md:py-10">
                    <div class="mb-5 w-64">
                      <label for="amount" class="text-right font-bold font-lateefregular mb-1 text-gray-700 block">المدخول</label>
                      <input value="{{$income}}" type="number" name="amount" id="ammount" autocomplete="given-name" class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                      <button type="submit" class="my-10 float-right justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-button hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        حفظ
                      </button>
                    </div>
                  </div>
                </div>
            </div>
          </div>        
        </div>   
      </form>     
    </main>
  </div>
