@props(['label','classes'=>'','errorName'=>null])
<div class="relative h-11 {{ $classes }}">
    <div>
        <select name="{{ $errorName }}" {{ $attributes->merge(['class' => "peer h-full w-full shadow-md rounded-[7px] border border-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-200 placeholder-shown:border-t-blue-200 focus:border-2 focus:border-indigo-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-50" ]) }} >
            {{ $slot }}
        </select>
        <label class="pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[12px] font-semibold leading-tight text-grey-700 transition-all before:content[' '] before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-200 before:transition-all after:content[' '] after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-indigo-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-indigo-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-indigo-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-gray-500 ">
            {{ $label }}
        </label>
    </div>
    @if($errorName) @error($errorName) <span class="text-xs text-red-800 error">{{ $message }}</span> @enderror @endif
</div>
