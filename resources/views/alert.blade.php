@if (Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-white" role="alert">
        <span class="font-medium"><strong>Success !</strong> {{ session('success') }}</span>
    </div>

@elseif(Session::has('fail'))
    <div class="p-4 mb-4 text-sm text-red-500 rounded-lg bg-white">
        <span class="font-medium"><strong>Fail !</strong> {{ session('fail') }}</span>
    </div>
@endif
