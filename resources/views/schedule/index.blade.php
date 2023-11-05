@extends('layouts.main')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container mx-auto px-4 sm:px-8">
        @include('alert')

        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Schedules of appointment</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full rounded-lg overflow-hidden">
                    @if ($schedules->isEmpty())
                        <div class="bg-white border-4 rounded-lg shadow relative mx-10">
                            <h1
                                class="text-4xl h-screen border-2 border-white bg-white rounded-lg flex items-center justify-center">
                                No Incoming Appointment</h1>
                        </div>
                        <div class="grid grid-cols-8 p-2"></div>
                    @else
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Appointment At
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Phone Number
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    </th>

                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Option
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)




                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{ $schedule->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $schedule->email }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $schedule->appointment_date }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $schedule->phone_number }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $schedule->status }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm flex gap-2">
                                            <div class="accept-form">
                                                <button
                                                    class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin accept-button"
                                                    type="button">Accept</button>

                                            </div>

                                            <form action="{{ route('schedule.cancel', ['schedule' => $schedule]) }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')
                                                <button class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin"
                                                    type="submit"
                                                    onclick="return confirm('Confirm cancel?')">Cancel</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

                            {{-- <form action="{{ route('schedule.accept', ['schedule' => $schedule]) }}" method="post"
                                    class="fixed z-10 inset-0 overflow-y-auto hidden" id="myModal">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="schedule" value="{{ $schedule }}">
                                    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                        <div class="fixed inset-0 transition-opacity">
                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                        </div>
                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
                                        <div
                                            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                                            <div class="sm:flex sm:items-start">
                                                <div
                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                                    <svg class="h-6 w-6 text-green-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                        Confirm !!
                                                    </h3>
                                                    <div class="mt-2 flex flex-col gap-4">
                                                        <label for="password" class="text-sm leading-5 text-gray-500">
                                                            plese add you password
                                                        </label>
                                                        <input type="text" id="passwordIp" name="password" placeholder="add you password"
                                                            class=" rounded-lg w-72">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                                <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                    <button type="submit"
                                                        class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                        Confirm
                                                    </button>
                                                </span>
                                                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                                    <button type="button" id="cancel-btn"
                                                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                        Cancel
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form> --}}


    <script>
        // เลือกปุ่ม "Accept" โดยใช้ ID หรือคลาสหรือเลือกตามที่คุณต้องการ
        const acceptButton = document.querySelector('.accept-button');
        const myModal = document.getElementById('myModal');
        const cancelBtn = document.getElementById('cancel-btn');
        const passwordIp = document.getElementById('passwordIp');

        // เมื่อคลิกที่ปุ่ม "Accept" ให้แสดงโมเดิล
        acceptButton.addEventListener('click', function() {
            myModal.classList.remove('hidden');
            // ทำสิ่งอื่น ๆ ที่คุณต้องการแสดงข้อมูลตารางในโมเดิลนี้
        });

        cancelBtn.addEventListener('click', function() {
            myModal.classList.add('hidden');
            passwordIp.value = "";
        });
    </script>
@endsection
