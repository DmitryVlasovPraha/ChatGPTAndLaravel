<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatGPTController extends Controller
{


    public function ask(Request $request)
    {
        $brand = new Brand();
        $prompt = $request->input('prompt');
        $response = $this->askToChatGPT($prompt);

        return view('brand.create', ['response' => $response], compact('brand'));
    }

    public function askEdit(Brand $brand, Request $request)
    {
        $prompt = $request->input('prompt');
        $response = $this->askToChatGPT($prompt);
        return view('brand.edit', ['response' => $response], compact('brand'));
    }


    private function askToChatGPT($prompt)
    {
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
                "prompt" => $prompt,
                "max_tokens" => 1000,
                "temperature" => 0.5
            ]);

        return $response->json()['choices'][0]['text'];
    }


}
