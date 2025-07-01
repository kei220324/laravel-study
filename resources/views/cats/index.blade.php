@extends('layouts.default')
@section('title', 'ねこちゃんたち')

@section('content')
<section class="bg-gray-100">
  <div class="container mx-auto">
    <p class="text-left px-4 pt-2"><a href="#" class="text-blue-600 hover:underline">ホーム</a>&gt;ねこちゃんたち</p>
    <p class="text-center pt-10 text-2xl">ねこちゃんたち</p>
    <h1 class="mt-2 text-4xl font-bold font-heading text-center h-32">この子達があなたを癒やしてくれます！</h1>
  </div>
</section>

<section class="py-20 bg-blueGray-50">
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 py-5 md:px-5">
            <div class="px-6 bg-white shadow rounded h-full py-10">
                <div class="flex items-center mb-4">
                    <img class="h-16 w-16 rounded-full object-cover" src="/images/placeholders/cats/cat1.jpg" alt="">
                    <div class="pl-4">
                        <p class="text-xl">アルト</p>
                        <p class="text-blueGray-400">シンガプーラ(♂5さい)</p>
                    </div>
                </div>
                <p class="leading-loose text-blueGray-400 mb-5 whitespace-pre-line">好奇心が旺盛で、運動神経も良い。
                    じっとしていられない性格で疲れて寝るまでうろうろしている。</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 py-5 md:px-5">
            <div class="px-6 py-10 bg-white shadow rounded h-full">
                <div class="flex items-center mb-4">
                    <img class="h-16 w-16 rounded-full object-cover" src="/images/placeholders/cats/cat2.jpg" alt="">
                    <div class="pl-4">
                        <p class="text-xl">リリー</p>
                        <p class="text-blueGray-400">ラガマフィン(♀1さい)</p>
                    </div>
                </div>
                <p class="leading-loose text-blueGray-400 mb-5 whitespace-pre-line">遊ぶ時は他の子のおもちゃを奪うほどの情熱家。
                    でも気変わりが多くすぐ別の事を始める。</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 py-5 md:px-5">
            <div class="px-6 bg-white shadow rounded h-full py-10">
                <div class="flex items-center mb-4">
                    <img class="h-16 w-16 rounded-full object-cover" src="/images/placeholders/cats/cat1.jpg" alt="">
                    <div class="pl-4">
                        <p class="text-xl">アルト</p>
                        <p class="text-blueGray-400">シンガプーラ(♂5さい)</p>
                    </div>
                </div>
                <p class="leading-loose text-blueGray-400 mb-5 whitespace-pre-line">好奇心が旺盛で、運動神経も良い。
                    じっとしていられない性格で疲れて寝るまでうろうろしている。</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 py-5 md:px-5">
            <div class="px-6 py-10 bg-white shadow rounded h-full">
                <div class="flex items-center mb-4">
                    <img class="h-16 w-16 rounded-full object-cover" src="/images/placeholders/cats/cat2.jpg" alt="">
                    <div class="pl-4">
                        <p class="text-xl">リリー</p>
                        <p class="text-blueGray-400">ラガマフィン(♀1さい)</p>
                    </div>
                </div>
                <p class="leading-loose text-blueGray-400 mb-5 whitespace-pre-line">遊ぶ時は他の子のおもちゃを奪うほどの情熱家。
                    でも気変わりが多くすぐ別の事を始める。</p>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection