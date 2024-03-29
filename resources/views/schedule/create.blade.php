<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
    <title>Apartment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="bg-white border-2 rounded-lg shadow relative m-10">

        <div class="flex items-start justify-between p-5 border-b rounded-t">
            <h3 class="text-xl font-semibold">
                Appointment to sign a contract
            </h3>
            <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="product-modal">

            </button>
        </div>

        <div class="p-6 space-y-6">
            <form action="{{ route('schedule.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                        <input type="text" required value="{{ old('name', '') }}" @error('name') border-red-600 @enderror
                            name="name" id="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Add Name”" required="">

                        @error('name')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                        <input type="email" required value="{{ old('email', '') }}"
                            @error('email') border-red-600 @enderror name="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="@Email" required="">

                        @error('email')
                        <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone_number" class="text-sm font-medium text-gray-900 block mb-2">Phone number</label>
                        <input type="number" required value="{{ old('phone_number', '') }}"
                            @error('phone_number') border-red-600 @enderror name="phone_number" id="phone_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="Phone Number" required="">

                        @error('phone_number')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>


                    <div class="col-span-6 sm:col-span-3">
                        <label for="appointment_date" class="text-sm font-medium text-gray-900 block mb-2">Enter your
                            appointment date</label>

                        @error('appointment_date')
                            <div class="text-red-600">
                                {{ $message }}
                            </div>
                        @enderror

                        <input required type="date" id="appointment_date" name="appointment_date" autocomplete="off"
                            placeholder="Put in your appointment date"
                            class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('appointment_date') border-red-600 @enderror">
                    </div>

                </div>

                <div class="p-6 border-t border-gray-200 rounded-b">
                    <button
                        class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit">Create</button>
                    <a
                        href="{{ route('home') }}"
                        class="text-white ml-12 bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit">Back</a>
                </div>
            </form>
        </div>
    </div>




</body>
