@if (session()->has('error_message'))
<div x-data="{ show: true }" 
     x-init="setTimeout(() => show = false, 8000)" 
     x-show="show" 
     class="position-fixed top-0 end-0 p-1 m-3 bg-danger text-white rounded shadow-sm"
     style="z-index: 9999">
   <div class="container">
       <div class="d-flex justify-content-between align-items-center">
           <div class="me-4">
               <h4 class="mb-3 text-white">{{ session('notification_title') }}</h4>
               <p class="mb-1 text-white">{{ session('error_message') }}</p>
           </div>
           <button @click="show = false" class="btn-close" aria-label="Close"></button>
       </div>
   </div>
</div>
@endif
