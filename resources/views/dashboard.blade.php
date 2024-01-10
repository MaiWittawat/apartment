<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="pt-10 pb-2" id="login-modal">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 relative">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <i class="fa-solid fa-circle-xmark text-[30px] absolute right-5 top-5" id="close-btn"></i>
            </div>
        </div>
    </div>


    <div class="mt-4" id="document">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 border-2 ">
                    <h1 class="font-bold text-xl">คู่มือการใช้งานสำหรับ Admin</h1>
                    <br>
                    <div>
                        <h2 class="text-[20px] font-semibold">เมนู Add Room</h2>
                        <span>
                            ใช้สำหรับเพิ่มห้องให้กับ user ที่ได้ทำการเซ็นสัญญาเช่าห้องเรียบร้อยเเล้วโดย admin
                            จะเป็นคนกำหนดห้องให้กำ user นั้นๆ โดยกดที่ปุ่ม "Add Room" <br>
                            หลังจากที่กดที่ปุ่ม "Add Room" เเล้วจะมีข้อความเเสดงขึ้นมาให้ใส่เลขห้องไปได้เลย
                        </span>
                    </div>

                    <br>
                    <div>
                        <h2 class="text-[20px] font-semibold">เมนู Schedules</h2>
                        <span>
                            ใช้เพื่อตรวจสอบว่ามีใครต้องการนัดทำสัญญาบ้าง หากพูดคุยทำสัญญาลงตัวสามารถกดปุ่ม "Accept"
                            ระบบจะมีข้อความเด้งขึ้นมาเพื่อให้ใส่รหัสของ user ที่ต้องการ <br>
                            หลังจากที่ใส่รหัสเเล้ว user จะไปปรากฎอยู่ที่หน้า "Add Room" <br>
                            หากการพูดคุยไม่ลงตัวสามารถกดปุ่ม "Cancle" เพื่อยกเลิกได้ หลังจากที่กดเเล้ว user
                            จะหายไปจากตาราง
                        </span>
                    </div>

                    <br>
                    <div>
                        <h2 class="text-[20px] font-semibold">เมนู Complaint</h2>
                        <span>
                            เเสดงรายการ "เเจ้งเรื่อง" โดยเเสดงออกมาเป็นตาราง <br>
                            Room(ห้องที่เเจ้ง) , Detail(รายละเอียดเเบบย่อ), Type(ประเภทของเรื่องที่เเจ้ง), Status(สถานะ), Create At(วันที่เเจ้ง) <br>
                            ที่ user เเจ้งเข้ามาสามารถกดปุ่ม "Show" เพื่อเข้าไปดูรายละเอียดทั้งหมดได้โดยเรื่องที่เเจ้งเเบ่งออกเป็น 2 หมวดหมู่ดังนี้ <br>
                            <div class="pt-3 text-[14px]">
                                1. GENERAL(เรื่องทั่วไป) เป็นเรื่องทั่วไป admin สามารถ ตอบกลับได้ที่ช่อง Response ให้ใส่ข้อความตอบกลับเเล้วกดปุ่ม "submit" เเล้ว complant นั้น <br>
                                &nbsp &nbsp จะเปลี่ยนสถานะจาก "PENDING" เป็น "END" สามาถกดปุ่ม "Show" เพื่อดูรายละเอียดเเละข้อความที่เราพึ่งตอบกลับไปได้<br>
                                <br>
                                2. MAINTENANCE(เเจ้งซ่อม) กรณีที่ห้องเกินความเสียหายเช่น ผนังเป็นรู หรืออื่นๆ ในกรณีนี้ admin จำเป็นเลือกวันที่ที่จะเข้าไปเช็คความเสียหายเเล้วกดปุ่ม "submit" <br>
                                &nbsp &nbsp จะเปลี่ยนสถานะจาก "PENDING" เป็น "SCHEDULED" เเล้วเมื่อถึงวันที่กำหนดให้เข้าไปดำเนินการเเก้ไขเมื่อเเก้ไขเสร็จเเล้ว user จะอัพโหลดรูปภาพ <br>
                                &nbsp &nbsp เพื่อยืนยันการเเก้ไขจากนั้น complant จะเปลี่ยนสถานะจาก "SCHEDULED" เป็น "FIXED" หลังจากนั้นให้ admin กดปุ่ม "Show" เพื่อเข้าไปกดปุ่ม "end" <br>
                                &nbsp &nbsp เป็นการเเสดงว่าได้ทำการเเก้ไขสำเร็จเรียบร้อยเเล้ว
                            </div>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

</x-app-layout>


<script>
    const loginModal = document.getElementById('login-modal');
    const doc = document.getElementById('document')
    const closeBtn = document.getElementById('close-btn');

    closeBtn.addEventListener('click', () => {
        loginModal.classList.add('hidden');
        doc.classList.add('mt-10')
    });
</script>
