---
title: "Последовательность"
description: "Важно, чтобы стиль был единым по всему проекту."
---


Следуйте принципам последовательного форматирования вашего кода. Стиль кода должен соответствовать стандарту
[`PER`](https://www.php-fig.org/per/coding-style/), основанному на стандартах `PSR-1`, `PSR-2` и `PSR-12`,
а также любым внутренним правилам вашей команды разработки. 

Важно, чтобы стиль был единым по всему проекту.

Для автоматизации этого процесса вы можете использовать различные инструменты, такие как `Laravel Pint` и `PHP-CS-Fixer`.
Эти инструменты помогут поддерживать согласованный стиль кода и сделают его более читаемым и легким для понимания всеми
участниками команды разработки.

```php
// Плохо ❌
class ChirpController extends Controller {
  public  function index (){
        $chirps = Chirp::with('user')->latest()->get();
        return view('chirps.index',[
'chirps' => $chirps]);
    }
    
    public function  update(Request $request , Chirp $chirp)     {
        $chirp->update($request->validated());

        return redirect()->route('chirps.index');
    }
}
```

В этом примере кода отсутствует последовательность форматирования.


```php
// Хорошо ✅
class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')->latest()->get();

        return view('chirps.index', [
            'chirps' => $chirps,
        ]);
    }

    public function update(Request $request, Chirp $chirp)
    {
        $chirp->update($request->validated());

        return redirect()->route('chirps.index');
    }
}
```
