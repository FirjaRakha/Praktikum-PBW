

<a {{$attributes}} class="block rounded-md px-3 py-2 text-sm {{request()->fullUrlIs(url($href)) ? "bg-zinc-700 text-white" : "text-zinc-300 hover:bg-zinc-800 hover:text-white"}}">
    {{$slot}}
</a>