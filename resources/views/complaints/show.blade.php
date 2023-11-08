<x-app-layout>
    <x-slot name="header">
        @if ($complaint->type == 'MAINTENANCE')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('MAINTENANCE') }}
            </h2>
        @else
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('GENERAL') }}
            </h2>
        @endif

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">

                <div class="bg-white  border-4 rounded-lg  relative m-10 flex flex-col w-full shadow-2xl">

                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            {{ $room->room_number }}
                        </h3>
                    </div>

                    @if ($complaint->type == 'MAINTENANCE')
                        <div>
                            <div class="grid grid-cols-6 gap-6 items-center justify-center  p-4">
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                                    <input type="text" disabled name="name" id="name"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                        placeholder="{{ $user->name }}" required="">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label class="text-sm font-medium text-gray-900 block mb-2">Type</label>
                                    <input type="text" disabled name="type" id="type"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                        placeholder="{{ $complaint->type }}" required="">
                                </div>

                                @if ($complaint->status == "PENDING")
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="text-sm font-medium text-gray-900 block mb-2">Customer Appointment
                                            Date</label>
                                        <input type="text" disabled name="customer_appointment_date"
                                            id="customer_appointment_date"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                            placeholder="{{ $complaint->customer_appointment_date }}" required="">
                                    </div>
                                @else
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="text-sm font-medium text-gray-900 block mb-2">Appointment
                                            Date</label>
                                        <input type="text" disabled name="ppointment_date"
                                            id="appointment_date"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                            placeholder="{{ $complaint->appointment_date }}" required="">
                                    </div>

                                @endif

                                <div class="col-span-6 sm:col-span-3">
                                    <label class="text-sm font-medium text-gray-900 block mb-2">status</label>
                                    <input type="text" disabled name="status" id="status"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                        placeholder="{{ $complaint->status }}" required="">
                                </div>

                                @if ($complaint->status == "END")
                                    <div class="w-72 h-64 object-cover">
                                        <img src=" {{ asset ('storage/'.$complaint->img) }}" alt="Event Picture" class="block h-full w-full rounded-lg object-cover object-center">

                                    </div>
                                @endif


                                <div class="col-span-6 sm:col-span-6 ">
                                    <label class="text-sm font-medium text-gray-900 block mb-2">Detail</label>
                                    <textarea disabled class="w-full border-1 outline-none rounded-md" name="detail" id="detail" cols="30"
                                        rows="10">{{ $complaint->detail }}</textarea>
                                </div>


                                @if (Auth::user()->role == 'ADMIN' && $complaint->status == 'PENDING')
                                    <form method="POST"
                                        action="{{ route('complaints.editMain', ['complaint' => $complaint]) }}"
                                        class=" flex flex-col">
                                        @csrf
                                        <label for="appointment_date"></label>
                                        <input type="date" name="appointment_date">

                                        @if ($errors->has('appointment_date'))
                                            <div class="alert alert-danger text-red-600">
                                                <ul>
                                                    <li>{{ $errors->first('appointment_date') }}</li>
                                                </ul>
                                            </div>
                                        @endif


                                        <button type="submit"
                                            class="rounded-md p-2 bg-blue-500 mt-4 shadow-lg text-white border-2">
                                            submit </button>
                                    </form>
                                    @if ($complaint->response != 'NO')
                                        <div class="col-span-6 sm:col-span-6">
                                            @csrf
                                            <label class="text-sm font-medium text-gray-900 block mb-2">Response</label>
                                            <textarea class="w-full border-1 outline-none rounded-md" name="response" id="response" cols="30" rows="10"></textarea>



                                            <button type="submit"
                                                class="rounded-md p-2 bg-blue-500 mt-4 shadow-lg text-white border-2">
                                                submit </button>
                                        </div>
                                    @endif
                                @elseif (Auth::user()->role == 'USER' && $complaint->status == 'SCHEDULED')
                                    <form action="{{ route('complaints.addImage', ['coplaint' => $complaint]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div id="imagePreviews"></div>
                                        <label for="image"></label>
                                        <label for="room"></label>
                                        <input type="text" class="hidden" name="room"
                                            value="{{ $room }}">
                                        <input type="file" name="image" accept="image/*" id="imageInput">
                                        <button type="submit"
                                            class="mt-2 boder-2 bg-blue-500 w-3/5 px-2 py-1 rounded text-white">Add</button>
                                    </form>
                                @elseif (Auth::user()->role == 'ADMIN' && $complaint->status == 'FIXED')
                                    <form method="POST"
                                        action="{{ route('complaints.endMain', ['complaint' => $complaint]) }}"
                                        class=" flex flex-col">
                                        @csrf
                                        <button type="submit"
                                            class="rounded-md p-2 bg-blue-500 mt-4 shadow-lg text-white border-2"> end
                                        </button>
                                    </form>

                                @endif
                            </div>

                        </div>

                    @else
                        <div class="p-6 space-y-6">
                            <div>
                                <div class="grid grid-cols-6 gap-6 items-center justify-center">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                                        <input type="text" disabled name="name" id="name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-64 p-2.5"
                                            placeholder="{{ $user->name }}" required="">
                                    </div>
                                    <div class="col-span-6 sm:col-span-6">
                                        <label class="text-sm font-medium text-gray-900 block mb-2">Detail</label>
                                        <textarea disabled class="w-full border-1 outline-none rounded-md" name="detail" id="detail" cols="30"
                                            rows="10">{{ $complaint->detail }}</textarea>
                                    </div>


                                    @if (Auth::user()->role == 'ADMIN')
                                        @if ($complaint->status != 'PENDING')
                                            <div class="col-span-6 sm:col-span-6">
                                                <label
                                                    class="text-sm font-medium text-gray-900 block mb-2">Response</label>
                                                <textarea disabled class="w-full border-1 outline-none rounded-md" name="response" id="response" cols="30"
                                                    rows="10">{{ $complaint->response }}</textarea>
                                            @else
                                                <form
                                                    action="{{ route('complaints.editGen', ['complaint' => $complaint]) }}"
                                                    method="POST" class="col-span-6 sm:col-span-6">
                                                    @csrf
                                                    <label
                                                        class="text-sm font-medium text-gray-900 block mb-2">Response</label>
                                                    <textarea class="w-full border-1 outline-none rounded-md" name="response" id="response" cols="30"
                                                        rows="10"></textarea>



                                                    <button type="submit"
                                                        class="rounded-md p-2 bg-blue-500 mt-4 shadow-lg text-white border-2">
                                                        submit </button>
                                                </form>
                                        @endif
                                    @else
                                        @if ($complaint->status != 'PENDING')
                                            <div class="col-span-6 sm:col-span-6">
                                                @csrf
                                                <label
                                                    class="text-sm font-medium text-gray-900 block mb-2">Response</label>
                                                <textarea disabled class="w-full border-1 outline-none rounded-md" name="response" id="response" cols="30"
                                                    rows="10">{{ $complaint->response }}</textarea>

                                            </div>
                                        @endif

                                    @endif
                                </div>
                            </div>
                        </div>


                    @endif
                </div>


            </div>

        </div>
    </div>


    <script>
        // document.getElementById('imageInput').addEventListener('change', function (e) {
        //     displaySelectedImage(e.target);
        // });

        // function displaySelectedImage(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();

        //         reader.onload = function (e) {

        //             var img = document.createElement('img');
        //             img.src = e.target.result;
        //             img.className = 'preview-image';

        //             var imagePreviews = document.getElementById('imagePreviews');
        //             imagePreviews.appendChild(img);
        //         };

        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
    </script>

    <script>
        // เมื่อคุณเลือกไฟล์รูปภาพใน input
        document.getElementById('imageInput').addEventListener('change', function(e) {
            // เรียกฟังก์ชันเพื่อแสดงรูปภาพที่เลือก
            displaySelectedImage(e.target);
        });

        // ฟังก์ชันสำหรับแสดงรูปภาพที่เลือก
        function displaySelectedImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // ลบรูปภาพเก่า (ถ้ามี)
                    var existingImage = document.querySelector('.preview-image');
                    if (existingImage) {
                        existingImage.remove();
                    }

                    // สร้าง <img> element เพื่อแสดงรูปภาพใหม่
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'preview-image'; // เพิ่มคลาสสำหรับสไตล์ (optional)

                    // เพิ่ม <img> element ลงในส่วนที่คุณต้องการแสดงรูปภาพ (เช่น <div>)
                    var imagePreviews = document.getElementById('imagePreviews');
                    imagePreviews.appendChild(img);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</x-app-layout>
