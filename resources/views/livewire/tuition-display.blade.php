<div>

    <div x-data="{ isOpen: false}">
        <div>
            <button type="button" @click="isOpen = !isOpen" class="bg-blue-700 text-4xl border border-blue-700 rounded">
                Tuition
            </button>
        </div>
        <div x-cloak
             x-show.transition.origin.top.left="isOpen"
             @click.away="isOpen = false"
             @keydown.escape.window="isOpen = false" class="mt-10">
                    <textarea
                        class="ml-6 w-full hover:shadow-card transition duration-150 ease-in bg-white rounded-xl cursor-pointer"
                        id="" name="" cols="5" rows="15"> {{ $content  }}
                    </textarea>
        </div>
    </div>

</div>



