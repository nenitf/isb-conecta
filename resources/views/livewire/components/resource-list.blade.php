<ul class="flex flex-col gap-3">
    @foreach($content as $link)
        <li class="flex gap-1 group">
            <a href="{{$link['href']}}" class="w-full p-2 text-primary font-extrabold uppercase bg-neutral-high rounded-xl group-hover:text-neutral-low-dark">
                {{$link['label']}}
            </a>
            <div class="flex bg-neutral-high p-2 rounded-xl">
                <div class="w-5 flex">
                    @svg($link['icon'] ?? self::DEFAULT_ICON,  ['class' => "text-primary group-hover:text-neutral-low-dark"])
                </div>
            </div>
        </li>
    @endforeach
</ul>
