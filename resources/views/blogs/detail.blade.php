@extends('layouts.default')
@section('title', 'ブログ詳細')

@section('content')
<section class="bg-gray-100 pt-2">
  <div class="container mx-auto">
    <p class="text-left px-4 pt-2 text-gray-400"><a href="#" class="text-blue-600 hover:underline">ホーム</a><span class="px-2">&gt</span><a href="#" class="text-blue-600 hover:underline">ブログ</a><span class="px-2">&gt</span>リモートワークにも！</p>
    <h1 class="mt-2 text-4xl font-bold font-heading h-40 text-center p-12">リモートワークにも！</h1>
  </div>
</section>

<section>
  <div class="container mx-auto">
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
    <div>
      <img class="mb-12 rounded object-cover mx-auto" src="/images/placeholders/blogs/working.jpeg" alt="">
    </div>
    <p class="text-gray-500 leading-loose">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。 説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
  </div>
</section>

<section class="mt-24">
  <div class="container mx-auto">
    <h2 class="mb-2 leading-tight font-medium font-heading text-2xl">この記事を書いた店員</h2>
    <div class="mb-10 pt-5 flex">
      <img src="/images/placeholders/admin/user.jpg" alt="" class="h-40 h-40 rounded-full shadow">
      <div class="pl-10">
        <h4 class="text-xl font-medium">ネゴ好きなのに実家ではペットが飼えなかったのが理由で猫カフェ店員に！</h4>
        <p class="pt-3">高橋 友樹</p>
        <p class="pt-3 text-gray-400">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
      </div>
    </div>
  </div>
</section>

<section class="mt-16 pb-24">
  <div class="container mx-auto">
    <h3 class="mb-2 leading-tight font-medium font-heading text-center text-2xl">この店員が書いた他の記事</h3>

    <div class="flex flex-wrap -mx-3 pt-4">
      <article class="w-full md:w-1/2 lg:w-1/3 p-3">
        <div class="border rounded-lg overflow-hidden shadow">
          <div class="relative h-52">
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">カテゴリ</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/lunch.jpeg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2022.3.12</time>
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
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">カテゴリ</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/working.jpeg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2022.3.11</time>
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
            <span class="absolute text-xs text-gray-400 px-2 border border-white bg-gray-100 uppercase py-2 px-10 left-0 bottom-0">カテゴリ</span>
            <a href="#"><img class="w-full h-full object-cover" src="/images/placeholders/blogs/toilet.jpeg" alt=""></a>
            <time class="text-xs text-gray-500 text-right pr-2 pt-2">2022.3.10</time>
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
    <div class="mt-8 text-center">
      <a href="#" class="inline-block text-xs text-white font-semibold leading-none rounded py-4 text-blue-500 border-solid bg-white border-blue-500 border-2 px-16 hover:text-white hover:bg-blue-500">もっと見る</a>
    </div>
  </div>
</section>
@endsection