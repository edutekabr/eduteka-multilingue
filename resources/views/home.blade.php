<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eduteka</title>
        <style>header{display:flex;justify-content:space-between;height:100px;align-items:center;margin:30px 20px}div.box,div.box div.item{box-shadow:0 3px 6px var(--color-ten)}*{box-sizing:border-box;margin:0;padding:0}:root{--color-one:#111111;--color-two:#1e1e1e;--color-three:rgba(255, 255, 255, 0.02);--color-four:rgba(255, 255, 255, 0.04);--color-five:rgba(1, 254, 135, 1);--color-six:rgba(255, 255, 255, 0.9);--color-seven:#222222;--color-eight:#999999;--color-nine:rgba(255, 255, 255, 0.06);--color-ten:rgb(0 0 0 / 16%)}body{background:linear-gradient(to bottom,var(--color-one),var(--color-two));height:auto;font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif}header img{width:110px;height:auto;cursor:pointer}section.content{padding:0 20px 150px}div.box{background:var(--color-two);padding:30px 20px 60px;border:1px solid var(--color-seven);border-radius:4px;width:100%;margin-bottom:50px}div.box h1{color:var(--color-six);font-size:34px;margin-bottom:10px}div.box p,div.it_content p{color:var(--color-eight)}div.box p{font-size:18px;margin-bottom:50px}div.box div.box_items{display:grid;grid-template-columns:repeat(1,1fr);grid-gap:30px;width:100%}div.box div.item{height:230px;background:var(--color-three);border:1px solid var(--color-four);border-top:1px solid var(--color-five);border-radius:4px;display:block}div.box div.item:hover{cursor:pointer;animation:.3s ease-in forwards animating}@keyframes animating{from{transform:translateY(0);background-color:var(--color-three)}to{transform:translateY(-10px);background-color:var(--color-four)}}div.item div.it_header{width:100%;border-bottom:1px solid var(--color-four);background:var(--color-three);padding:15px 20px;display:flex;justify-content:space-between;align-items:center}div.item div.it_content{width:100%;text-align:left;padding:20px}div.box div.item div.it_header h2{font-size:24px;color:var(--color-five)}div.box div.item div.it_header span{font-size:16px;color:#daa520}@media (min-width:700px){div.box div.box_items{grid-template-columns:repeat(2,1fr)}}@media (min-width:1200px){header{margin:30px 150px}section.content{padding:0 150px 200px}div.box div.box_items{grid-template-columns:repeat(3,1fr)}}</style>
    </head>

    <body>
        <header>
            <a href="https://www.youtube.com/@edutekabr" target="__blank">
                <img src="{{ asset('storage/logo-eduteka.png') }}" alt="Eduteka" title="Eduteka" />
            </a>
        </header>

        <section class="content">
            <div class="box">
                <h1>Front-End</h1>
                <p>{{ __('message.home_tech', ['tech' => 'front-end']) }}</p>

                <div class="box_items">
                    @foreach ($frontend as $front)
                        <div class="item">
                            <div class="it_header">
                                <h2>{{ $front->name }}</h2>
                                <span>{{ trans_choice('message.tech_num_classes', $front->num_classes) }}</span>
                            </div>

                            <div class="it_content">
                                <p>{{ $front->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="box">
                <h1>Back-End</h1>
                <p>{{ __('message.home_tech', ['tech' => 'back-end']) }}</p>

                <div class="box_items">
                    @foreach ($backend as $back)
                        <div class="item">
                            <div class="it_header">
                                <h2>{{ $back->name }}</h2>
                                <span>{{ trans_choice('message.tech_num_classes', $back->num_classes) }}</span>
                            </div>

                            <div class="it_content">
                                <p>{{ $back->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </body>
</html>
