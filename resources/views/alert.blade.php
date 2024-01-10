@if (Session::has('success'))
    <br>
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-white shadow-md" role="alert">
        <span class="font-medium"><strong>Success !</strong> {{ session('success') }}</span>
    </div>

@elseif(Session::has('fail'))
    <br>
    <div class="p-4 mb-4 text-sm text-red-500 rounded-lg bg-white shadow-md">
        <span class="font-medium"><strong>Fail !</strong> {{ session('fail') }}</span>
    </div>
@endif
