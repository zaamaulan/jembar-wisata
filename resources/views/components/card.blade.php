<div class="p-3.5 w-96 bg-white mx-auto {{ $style }}">
    <a href="{{ $href }} /blog" class="flex flex-col gap-y-4">
        <div><img src="{{ $thumbnail ? $thumbnail : 'blog.png'}}" alt="{{ $title }}" class="object-cover w-96 h-80"></div>
        <div class="text-center">
            <h1 class="text-neutral-700 text-xl font-semibold mb-4">
                {{ $title ? $title : 'Lorem ipsum dolor sit.' }}</h1>
            <p class="text-gray-500 text-base font-normal leading-normal ">
                {{ $caption ? $caption : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, animi.' }}</p>
        </div>
    </a>
</div>
