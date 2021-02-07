<div id="menu" class="hidden md:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-buttonword font-lateefregular text-right block px-3 py-2 rounded-md text-base font-medium">القائمة</a>

      <a href="/dashboard" class="text-buttonword text-right hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">المدخول اليومي</a>

      <a href="/monthly-subs" class="text-buttonword text-right hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">الاشتراك الشهري</a>

      <a href="/getreports" class="text-buttonword text-right hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">لوائح النتائج</a>
    </div>    
</div>
<script>
  var menuburger = document.getElementById('menuburger');
  var menux = document.getElementById('menux');
  var menu = document.getElementById('menu');
  function switchMenu(){
    if(menuburger.classList.contains('block')){
      menuburger.classList.remove('block');
      menuburger.classList.add('hidden');
      menux.classList.remove('hidden');
      menux.classList.add('block');
      menu.classList.remove('hidden');
      menu.classList.add('block');
    }
    else{
      menuburger.classList.remove('hidden');
      menuburger.classList.add('block');
      menux.classList.remove('block');
      menux.classList.add('hidden');
      menu.classList.remove('block');
      menu.classList.add('hidden');
    }
  }
</script>