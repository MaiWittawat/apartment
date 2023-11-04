@extends('layouts.main')

@section('content')

<div class="flex justify-center items-center flex-col">
    <div class="w-full h-96 font-semibold bg-[url('https://images.unsplash.com/photo-1553774651-905c1bc85a56?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center text-center">
        <div class="w-full h-full flex  justify-center items-center backdrop-brightness-75">
            <p class="text-8xl text-slate-50 text-center">HMONTHONG</p>
        </div>
    </div>
</div>
    <div class="p-32 font-semibold bg-yellow-300">
        <h2 class="text-4xl mb-4 text-gray-900">What is HMONTHONG?</h2>
        <p class="text-2xl text-gray-900">Hmonthong is one kind of durian, The king of fruit. Durian is a famous fruit in Asia.
            This website is made for anyone who like to join the event to collect achievement. So we named this website
            to let everyone know that this website is the best like durian(King of fruit).
        </p>
    </div>
    <!-- Container for demo purpose -->

    <div class="w-full h-96 font-semibold bg-[url('https://images.pexels.com/photos/450062/pexels-photo-450062.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] bg-cover bg-center text-center">
        <div class="p-32 w-full h-96 flex  justify-center items-center backdrop-brightness-50 ">
                <p class="text-3xl text-slate-50">“Alone, we can do so little; together, we can do so much” – Helen Keller
                </p>
        </div>
    </div>
<div class="container my-24 mx-auto md:px-6 font-semibold bg-white p-4 rounded border drop-shadow-xl">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center">
      <h2 class="mb-12 pb-4 text-center text-6xl font-semibold">
        Feature
      </h2>

      <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
        <div class="mb-6 lg:mb-0">
          <div
            class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-yellow-300">
            <div class="flex">
              <div
                class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="https://thenounproject.com/api/private/icons/2231738/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="w-full" />
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
              </div>
            </div>
            <div class="p-6">
              <h5 class="mb-3 text-lg font-bold">Enroll</h5>
              <p class="mb-4 pb-2">
                Enroll activities that you like!
              </p>
            </div>
          </div>
        </div>

        <div class="mb-6 lg:mb-0">
          <div
            class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-yellow-300">
            <div class="flex">
              <div
                class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="https://thenounproject.com/api/private/icons/5124120/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="w-full" />
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
              </div>
            </div>
            <div class="p-6">
              <h5 class="mb-3 text-lg font-bold">Archive</h5>
              <p class="mb-4 pb-2">
                Collect all archive of your acrivities that you enroll from our website right here!
              </p>
            </div>
          </div>
        </div>

        <div class="mb-0">
          <div
            class="relative block rounded-lg shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] bg-yellow-300">
            <div class="flex">
              <div
                class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                data-te-ripple-init data-te-ripple-color="light">
                <img src="https://thenounproject.com/api/private/icons/2732154/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0" class="w-full" />
                  <div
                    class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                  </div>
              </div>
            </div>
            <div class="p-6">
              <h5 class="mb-3 text-lg font-bold">Make</h5>
              <p class="mb-4 pb-2">
                Make your own activities to bring you community and friends!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  </div>
  <!-- Container for demo purpose -->
@endsection
