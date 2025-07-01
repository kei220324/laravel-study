@extends('layouts.default')
@section('title', 'ブログ一覧')

@section('content')
<section class="bg-gray-100 pt-2">
    <div class="container mx-auto">
        <p class="text-left px-4 pt-2 text-gray-400"><a href="#" class="text-blue-600 hover:underline">ホーム</a><span class="px-2">&gt</span>ブログ</p>
        <p class="text-center pt-10 text-2xl">ブログ</p>
        <h1 class="mt-2 text-4xl font-bold font-heading text-center h-32">ほぼ毎日お店でねこの様子をお届け！！</h1>
    </div>
</section>

<section class="pb-24">
    <div class="container px-4 mx-auto">
        <div class="my-8 pb-4 border-b">
            <p class="text-lg text-left">カテゴリ / ねこちゃん</p>
            <ul class="flex text-center pt-2">
                <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3">カテゴリ</li>
                <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">カテゴリ</a></li>
                <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">カテゴリ</a></li>
                <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃ねこちゃん</a></li>
                <li class="bg-gray-100 text-gray-400 py-1 px-3 mr-3"><a href="#">＃ねこちゃん</a></li>
                <li class="bg-gray-100 text-gray-400 py-1 px-3"><a href="#">＃ねこちゃん</a></li>
            </ul>
        </div>

        <div class="flex flex-wrap -mx-3">
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/lunch.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.12</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">ランチの様子</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">12:00のランチタイムはド迫力！！写真映えもするこの...</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/working.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.11</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">リモートワークにも！</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">実はねこカフェはリモートワークやコワーキングとしても大活躍....</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/toilet.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.10</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">トイレの教え方</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">このカフェに来て3日のルキアがもうトイレを覚えてくれました…</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">高橋</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/lunch.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.12</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">ランチの様子</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">12:00のランチタイムはド迫力！！写真映えもするこの...</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/working.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.11</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">リモートワークにも！</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">実はねこカフェはリモートワークやコワーキングとしても大活躍....</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/toilet.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.10</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">トイレの教え方</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">このカフェに来て3日のルキアがもうトイレを覚えてくれました…</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">高橋</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/lunch.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.12</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">ランチの様子</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">12:00のランチタイムはド迫力！！写真映えもするこの...</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/working.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.11</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">リモートワークにも！</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">実はねこカフェはリモートワークやコワーキングとしても大活躍....</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/toilet.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.10</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">トイレの教え方</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">このカフェに来て3日のルキアがもうトイレを覚えてくれました…</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">高橋</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/lunch.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.12</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">ランチの様子</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">12:00のランチタイムはド迫力！！写真映えもするこの...</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/working.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.11</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">リモートワークにも！</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">実はねこカフェはリモートワークやコワーキングとしても大活躍....</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">店長</p>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-full md:w-1/2 lg:w-1/3 p-3">
                <div class="border rounded-lg overflow-hidden shadow">
                    <div class="relative h-52">
                        <span class="py-2 px-10 mt-56 absolute left-0 bottom-0 text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase">カテゴリ</span>
                        <a href="#"><img class="w-full h-56 object-cover" src="/images/placeholders/blogs/toilet.jpeg" alt=""></a>
                        <time class="block text-xs text-gray-500 text-right pt-1 pr-2">2022.3.10</time>
                    </div>
                    <div class="pt-2 pb-4 px-4">
                        <a href="#">
                            <h1 class="mb-2 text-2xl font-semibold font-heading text-left">トイレの教え方</h1>
                            <p class="mb-6 text-gray-500 leading-relaxed text-left truncate">このカフェに来て3日のルキアがもうトイレを覚えてくれました…</p>
                        </a>
                        <div class="flex justify-between">
                            <ul class="flex">
                                <li class="bg-gray-100 text-gray-400 text-xs mr-2 py-1 px-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2 mr-2">＃ねこちゃん</li>
                                <li class="bg-gray-100 text-gray-400 text-xs py-1 px-2">＃ねこちゃん</li>
                            </ul>
                            <p class="font-medium font-semibold">高橋</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="mt-10">
        <div class="flex justify-center items-center">
            <a class="flex items-center justify-center h-10 w-10 mr-3 bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">
                <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.10807 11.4444C7.55252 10.9999 7.55252 10.3333 7.10807 9.88883L3.21918 5.99994L7.10807 2.11106C7.55252 1.66661 7.55252 0.999946 7.10807 0.555501C6.66363 0.111057 5.99696 0.111057 5.55252 0.555501L0.88585 5.22217C0.663627 5.44439 0.552516 5.66661 0.552516 5.99994C0.552516 6.33328 0.663627 6.5555 0.88585 6.77772L5.55252 11.4444C5.99696 11.8888 6.66363 11.8888 7.10807 11.4444Z" fill="#697073"></path>
                </svg>
            </a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-white rounded-xl bg-gray-600" href="#">1</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">2</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">3</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">4</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">5</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">...</a>
            <a class="flex items-center justify-center h-10 w-10 mr-3 text-xl font-semibold text-gray-400 rounded-xl hover:bg-gray-50" href="#">9</a>
            <a class="flex items-center justify-center h-10 w-10 bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">
                <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.552084 11.4444C0.107639 10.9999 0.107639 10.3333 0.552084 9.88883L4.44097 5.99994L0.552083 2.11106C0.107639 1.66661 0.107639 0.999946 0.552083 0.555501C0.996528 0.111057 1.6632 0.111057 2.10764 0.555501L6.77431 5.22217C6.99653 5.44439 7.10764 5.66661 7.10764 5.99994C7.10764 6.33328 6.99653 6.5555 6.77431 6.77772L2.10764 11.4444C1.6632 11.8888 0.996528 11.8888 0.552084 11.4444Z" fill="#697073"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection