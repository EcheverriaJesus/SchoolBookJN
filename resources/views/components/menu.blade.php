<nav class="normal animate__animated animate__rotateInDownLeft">
        <div class="flex justify-end w-4/5 pt-5 cursor-pointer">
            <svg class="responsive_botonmenu fill-black" width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m22 16.75c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm0-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75z" fill-rule="nonzero"/></svg>
        </div>
    <section class="flex w-full justify-center items-center gap-4">
        <svg class="responsive_descripcion fill-emerald-700" xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 24 24"><path d="M20 12.875v5.068c0 2.754-5.789 4.057-9 4.057-3.052 0-9-1.392-9-4.057v-6.294l9 4.863 9-3.637zm-8.083-10.875l-12.917 5.75 12 6.5 11-4.417v7.167h2v-8.25l-12.083-6.75zm13.083 20h-4c.578-1 1-2.5 1-4h2c0 1.516.391 2.859 1 4z"/></svg>
        <p class="responsive_descripcion font-Montserrat font-bold text-lg">SCHOOL-BOOK</p>
    </section>
    
    <section class="flex pl-7 w-full h-4/5 text-black pt-8">
        <ul class="flex flex-col gap-y-12">
            @foreach ($items as $item)
                <li class="flex fill-black hover:fill-red-600 gap-4 cursor-pointer">
                    <svg class="responsive_opcion w-5 h-5" viewBox="0 0 24 24"><path d="{{ $item['d'] }}"/></svg>
                    <a class="responsive_opcion  font-Roboto text-sm hover:text-red-600" href="{{ $item['route'] }}">{{ $item['text'] }}</a>
                </li>
            @endforeach
        </ul>
       {{--  <input type="checkbox" id="dark-mode" onclick="document.documentElement.classList.toggle('dark-mode')"> --}}
    </section>
</nav>