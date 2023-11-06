@extends('layouts.main')

@section('content')
<div class="bg-white border border-4 rounded-lg shadow relative m-10">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            General Complaint
        </h3>
        <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
            data-modal-toggle="product-modal">

        </button>
    </div>

    <div class="p-6 space-y-6">
        <form action="{{ route('complaints.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                    <label for="room" class="text-sm font-medium text-gray-900 block mb-2">Room</label>
                    <input type="text" disabled required value="{{ old('name', '') }}"
                        name="room" id="room"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Add Room" required="">

                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="detail" class="text-sm font-medium text-gray-900 block mb-2">Detail</label>
                    <input type="detail" required value="{{ old('detail', '') }}"
                         name="detail" id="detail"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Enter detail" required="">

                    @error('detail')
                        <div class="text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
            </div>

            <div class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Save all</button>
            </div>
        </form>
    </div>
</div>
@endsection