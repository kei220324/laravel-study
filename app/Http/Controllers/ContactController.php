<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Log; // ← Facedes → Facades に修正

class ContactController extends Controller
{
    public function index() {
        return view('contact.index'); // ← 正しい引数の渡し方
    }

    public function sendMail(ContactRequest $request) {
        $validated = $request->validated();

        // これ以降の行は入力エラーがなかった場合のみ実行されます
        Log::debug($validated['name'] . ' さんよりお問い合わせがありました');

        return view('contact.complete');
    }
}