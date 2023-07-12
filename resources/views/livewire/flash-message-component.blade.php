<div>
    @if (session()->has('message'))
    <div class="fixed bottom-0 right-0 mb-4 mr-4 z-50">
          <div class="bg-white rounded-md shadow-md p-4 w-64">
            <p class="font-medium text-gray-800">{{session('message')}}</p>
          </div>
    </div>
@endif
</div>
