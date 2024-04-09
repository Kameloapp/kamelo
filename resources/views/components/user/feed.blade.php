<x-user.layout>

    <x-slot name="userContent">
        <div class="flex w-2/3">
            <ul class="timeline timeline-snap-icon timeline-compact timeline-vertical">

                @for ($i = 0; $i < 20; $i++)
                    <li>
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="timeline-end mb-10">
                            <time class="font-mono italic">1984</time>
                            <div class="text-lg font-black mb-3">First Macintosh computer</div>
                            <div class="timeline-box flex gap-3">
                                <img class="" src="https://kifim.b-cdn.net/films/large/2006824.webp?width=60" />
                                <div class="m-3">The Apple Macintosh—later rebranded as the Macintosh 128K—is the original Apple Macintosh personal computer. It played a pivotal role in establishing desktop publishing as a general office function. The motherboard, a 9 in (23 cm) CRT monitor, and a floppy drive were housed in a beige case with integrated carrying handle; it came with a keyboard and single-button mouse.</div>
                            </div>
                        </div>
                        <hr/>
                    </li>
                @endfor

            </ul>
        </div>
    </x-slot>

</x-user.layout>

