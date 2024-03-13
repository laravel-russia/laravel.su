<?php

namespace App\Http\Controllers;

use App\CaesarCipher;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class OpenQuizController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function index()
    {
        // Исходный код, который будет сжат и выполнен
        $evalWrongWayText = "echo 'Тайны времени окружают историю великого римского императора. Говорят, что у него было непревзойденное мастерство в создании загадок и головоломок. Один из его изобретений - путь к скрытому сокровищу - требовал разгадки особых знаков, переплетенных в простых словах и фразах';";

        // Формируем строку для выполнения
        $evalWrongWay = sprintf('eval(base64_decode(%s));', var_export(base64_encode($evalWrongWayText), true));

        $helpCaesarCipher = (new CaesarCipher(11))->encrypt('Направь свой взор на начало ответа.');

        return response(view('pages.open', [
            'evalWrongWay'     => $evalWrongWay,
            'helpCaesarCipher' => $helpCaesarCipher,
        ]))->withHeaders([
            'X-Goronich-Key' => (new CaesarCipher(11))->alphabet(CaesarCipher::ALPHABET_EN)->encrypt(route('quiz.goronich')),
        ]);
    }

    /**
     * @return string
     */
    public function goronich(Request $request)
    {
        if ($request->isMethod('DELETE')) {
            $text = base64_encode('Твоя победа надо мной неоспорима! И сейчас я раскрываю тебе тайну: все сокровища лежат перед тобой на самом видном месте, хотя и маскируются изображениями. Внимательно присмотрись к ним, разгадай их скрытый смысл.');
            $chars = str_split($text);
            $badText = '';

            foreach ($chars as $key => $char) {

                $badText .= $char;

                if (array_key_last($chars) !== $key) {
                    $badText .= Arr::random(['@', '#', '$', '%', '🥹', '😢', '🫠']);
                }
            }

            $message = "Змей Горыныч был побежден! В его последние мгновения он прошептал неразборчивые слова: $badText";

            return response($message)->withHeaders([
                'Content-Type'   => 'text/plain; charset=utf-8',
                'X-Vasilisa-Say' => 'Неразборчивые слова, произнесенные им, кажутся имеют много лишних звуков. Дай-ка-посмотрим, что скрывается за этой тайной...',
            ]);
        }

        $useLaravel = (new \App\CaesarCipher(11))
            ->encrypt('Ты стоишь перед Змеем Горынычем, который грозит погубить тебя. Тебе необходимо уничтожить его величие используй силу одного из компонентов Laravel.');

        return response($useLaravel)->withHeaders([
            'Content-Type'   => 'text/plain; charset=utf-8',
            'X-Vasilisa-Say' => 'Открой необычные врата познания, исследуй тайну с новой стороны. Попробуй вместо привычного обратиться с запросом, который приносит исчезновение. В этом необычном подходе вы найдете ключ, чтобы разгадать загадку.',
        ]);
    }
}
