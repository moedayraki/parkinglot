@extends('welcome')
<div class="min-h-screen flex items-center justify-center  py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 pb-12">
      <div>
        <img class="mx-auto h-12 w-auto" src="images/logo.png" alt="Dayraki Arts">
        <h2 class="mt-6 text-center text-3xl font-lteefregular text-word">
          موقف الديركي
        </h2>
        
      </div>
      <form class="mt-8 space-y-6" action="login" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="name" class="sr-only">الاسم</label>
            <input id="name" name="name" type="text" autocomplete="name" required class="text-right space-y-1appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-word rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="الاسم">
          </div>
          <div>
            <label for="password" class="sr-only">كلمة المرور</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="text-right appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="كلمة المرور">
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              حفظ كلمة المرور
            </label>
          </div>
  
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
              هل نسيت كلمة المرور؟
            </a>
          </div>
        </div>
  
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-buttonword bg-button hover:bg-box focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: lock-closed -->
              <svg class="h-5 w-5 text-buttonword group-hover:text-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            تسجيل الدخول
          </button>
        </div>
      </form>
    </div>
  </div>