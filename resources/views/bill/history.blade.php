@extends('layouts.main')

@section('content')
    <br>
    <br>
    this is bill.history
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">#</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">First</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Last</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Handle</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Mark</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">Otto</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">@mdo</td>
                                <td class="flex gap-6">
                                    <a href="{{route('bill.show', ['bill' => 'bill'])}}"
                                        class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                        data-ripple-light="true">
                                        show
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script></script>
@endsection
