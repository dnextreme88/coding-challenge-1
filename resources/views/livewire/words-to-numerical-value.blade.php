<div x-data="{ finalInput: @entangle('final_input') }" class="mt-4 space-y-4">
    <h1 class="text-2xl dark:text-gray-200">Coding Challenge 1</h1>

    <p class="text-xl dark:text-gray-200">Challenge: Write a code that will accept numbers in words and will output the numerical value.</p>

    <div class="py-4 px-2 bg-gray-400 dark:bg-gray-600 dark:text-gray-200">
        <p>e.g.</p>
        <p>Enter a number in word: Fifty Four Thousand Three Hundred Twenty One</p>
        <p>Your number is 54321</p>
    </div>

    <div>
        <form wire:submit="submit_input">
            <label class="block my-2 font-medium text-sm text-gray-700 dark:text-gray-300">
                <span>Enter a number in word:</span>
                <span class="text-red-500 dark:text-red-300">*</span>
            </label>

            <input wire:model="input" type="text" class="p-2 rounded-md shadow-lg w-full lg:w-3/4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 placeholder:italic" placeholder="Enter your input here eg. one hundred" />

            <div x-show="finalInput" class="mt-2">
                <input wire:model="is_comma_formatting" wire:click="toggle_comma_formatting" wire:target="toggle_comma_formatting" wire:loading.attr="disabled" type="checkbox" /> <span class="dark:text-gray-300">Toggle comma separator? (English format)</span>
            </div>

            @error ('input')
                <p class="text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror

            <button wire.loading.attr="disabled" type="submit" class="block py-2 px-4 mt-4 transition duration-200 rounded-lg dark:text-gray-200 bg-gray-400 dark:bg-gray-600 hover:text-gray-200 hover:bg-gray-600 dark:hover:bg-gray-400 dark:hover:text-black">
                <span wire:loading.flex wire:target="submit_input">
                    <div wire:loading class="flex justify-center items-center">
                        <svg class="inline-block align-middle animate-spin h-4 w-4" width="512px" height="512px" viewBox="0 0 24 24" fill="#0f72ba" x="0" y="0" role="img" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#0f72ba">
                                {{-- Ring background --}}
                                <path class="fill-gray-600 dark:fill-white" opacity=".35" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
                                {{-- Ring that spins --}}
                                <path class="fill-gray-600 dark:fill-white" d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z" />
                            </g>
                        </svg>
                        <span class="ms-2 text-gray-900 dark:text-gray-300">Submitting</span>
                    </div>
                </span>

                <span wire:loading.remove wire:target="submit_input">Submit</span>
            </button>

            <div x-show="finalInput" class="mt-2">
                <p class="text-gray-700 dark:text-gray-300">Your number is: <span x-text="finalInput"></span></p>
            </div>
        </form>
    </div>
</div>
