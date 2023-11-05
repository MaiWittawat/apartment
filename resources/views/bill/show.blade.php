@extends('layouts.main')

@section('content')

    <br>
    <br>


    <div class="flex items-center justify-center">

        <div class="bg-white  border-4 rounded-lg  relative m-10 flex flex-col w-2/5 shadow-2xl">

            <div class="flex items-start justify-between p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold">
                    Room number 32
                </h3>

            </div>

            <div class="p-6 space-y-6">
                <div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Water meter</label>
                            <input type="text" disabled name="product-name" id="product-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Apple Imac 27”" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Electricity meter</label>
                            <input type="text" disabled name="category" id="category"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Electronics" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Old Water meter</label>
                            <input type="text" disabled name="brand" id="brand"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Apple" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Old Electricity meter</label>
                            <input type="number" disabled name="price" id="price"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="$2300" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Water use unit</label>
                            <input type="text" disabled name="product-name" id="product-name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Apple Imac 27”" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Electricity use unit</label>
                            <input type="text" disabled name="category" id="category"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Electronics" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Water bill</label>
                            <input type="text" disabled name="brand" id="brand"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="Apple" required="">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Electricity bill</label>
                            <input type="number" disabled name="price" id="price"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                placeholder="$2300" required="">
                        </div>

                        <div class="col-span-full">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Bill Total</label>
                            <input disabled
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-32 p-2.5"
                                placeholder="Details">
                        </div>

                    </div>
                </div>
            </div>

            <a href="{{ route('bill') }}" class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Back</button>
            </a>

        </div>


    </div>

    <script></script>
@endsection
