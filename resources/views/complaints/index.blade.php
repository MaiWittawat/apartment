@extends('layouts.main')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <br>
    <br>
    <div>
        <a class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            href=""
            >Create General Complaint</a>
        <a class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            href=""
            >Create Maintenance Complaint</a>
    </div>
    <div class="flex flex-col">
        <div class="">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Room</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Detail</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Response</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Create At</th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Show</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">101</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">eat?</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">No</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">11/11/2023</td>
                                <td class="flex gap-6">
                                    <a href="{{route('complaints.show', ['complaint' => 'bill'])}}"
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
