{"changed":true,"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/index.blade.php","value":"<!DOCTYPE html>\n<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">\n    <head>\n        <meta charset=\"utf-8\">\n        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n\n        <title>Blog</title>\n\n        <!-- Fonts -->\n        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">\n\n        <!-- Styles -->\n        \n    </head>\n    <body>\n        <h1>Blog Name</h1>\n        <div class='posts'>\n            <div class='post'>\n                <h2 class='title'>Title 1</h2>\n                <p class='body'>This is a sample body.</p>\n            </div>\n        </div>\n    </body>\n</html>\n","undoManager":{"mark":-2,"position":89,"stack":[[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"remove","lines":["l"],"id":2},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"remove","lines":["e"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"remove","lines":["v"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["a"]},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["r"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["a"]},{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["L"]}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"insert","lines":["B"],"id":3}],[{"start":{"row":6,"column":15},"end":{"row":6,"column":16},"action":"remove","lines":["B"],"id":4},{"start":{"row":6,"column":15},"end":{"row":6,"column":19},"action":"insert","lines":["Blog"]}],[{"start":{"row":12,"column":8},"end":{"row":63,"column":16},"action":"remove","lines":["<style>","            html, body {","                background-color: #fff;","                color: #636b6f;","                font-family: 'Nunito', sans-serif;","                font-weight: 200;","                height: 100vh;","                margin: 0;","            }","","            .full-height {","                height: 100vh;","            }","","            .flex-center {","                align-items: center;","                display: flex;","                justify-content: center;","            }","","            .position-ref {","                position: relative;","            }","","            .top-right {","                position: absolute;","                right: 10px;","                top: 18px;","            }","","            .content {","                text-align: center;","            }","","            .title {","                font-size: 84px;","            }","","            .links > a {","                color: #636b6f;","                padding: 0 25px;","                font-size: 13px;","                font-weight: 600;","                letter-spacing: .1rem;","                text-decoration: none;","                text-transform: uppercase;","            }","","            .m-b-md {","                margin-bottom: 30px;","            }","        </style>"],"id":5}],[{"start":{"row":15,"column":8},"end":{"row":46,"column":14},"action":"remove","lines":["<div class=\"flex-center position-ref full-height\">","            @if (Route::has('login'))","                <div class=\"top-right links\">","                    @auth","                        <a href=\"{{ url('/home') }}\">Home</a>","                    @else","                        <a href=\"{{ route('login') }}\">Login</a>","","                        @if (Route::has('register'))","                            <a href=\"{{ route('register') }}\">Register</a>","                        @endif","                    @endauth","                </div>","            @endif","","            <div class=\"content\">","                <div class=\"title m-b-md\">","                    Laravel","                </div>","","                <div class=\"links\">","                    <a href=\"https://laravel.com/docs\">Docs</a>","                    <a href=\"https://laracasts.com\">Laracasts</a>","                    <a href=\"https://laravel-news.com\">News</a>","                    <a href=\"https://blog.laravel.com\">Blog</a>","                    <a href=\"https://nova.laravel.com\">Nova</a>","                    <a href=\"https://forge.laravel.com\">Forge</a>","                    <a href=\"https://vapor.laravel.com\">Vapor</a>","                    <a href=\"https://github.com/laravel/laravel\">GitHub</a>","                </div>","            </div>","        </div>"],"id":6}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["<"],"id":7},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["h"],"id":8},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["1"]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["b"],"id":9},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["l"]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"remove","lines":["o"],"id":10},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":["l"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["b"]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["B"],"id":11},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["l"]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["o"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["g"]}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":[" "],"id":12},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["n"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["\\"]}],[{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["\\"],"id":13},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["n"]}],[{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["N"],"id":14},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"insert","lines":["a"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":["m"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["e"]}],[{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":[","],"id":15},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["."]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["."],"id":16},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":[","]}],[{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":["<"],"id":17},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":[">"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["h"],"id":18},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["1"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["/"],"id":19}],[{"start":{"row":15,"column":26},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["<"],"id":21},{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":["d"],"id":22},{"start":{"row":16,"column":10},"end":{"row":16,"column":11},"action":"insert","lines":["i"]},{"start":{"row":16,"column":11},"end":{"row":16,"column":12},"action":"insert","lines":["v"]}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":13},"action":"insert","lines":[" "],"id":23},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"insert","lines":["c"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"insert","lines":["l"]},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"insert","lines":["a"]},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"insert","lines":["s"]},{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["-"],"id":24}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"remove","lines":["-"],"id":25}],[{"start":{"row":16,"column":18},"end":{"row":16,"column":19},"action":"insert","lines":["="],"id":26}],[{"start":{"row":16,"column":19},"end":{"row":16,"column":21},"action":"insert","lines":["''"],"id":27}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["p"],"id":28},{"start":{"row":16,"column":21},"end":{"row":16,"column":22},"action":"insert","lines":["o"]},{"start":{"row":16,"column":22},"end":{"row":16,"column":23},"action":"insert","lines":["s"]},{"start":{"row":16,"column":23},"end":{"row":16,"column":24},"action":"insert","lines":["t"]},{"start":{"row":16,"column":24},"end":{"row":16,"column":25},"action":"insert","lines":["s"]}],[{"start":{"row":16,"column":27},"end":{"row":17,"column":12},"action":"insert","lines":["","            "],"id":29}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"remove","lines":["    "],"id":30}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["<"],"id":31},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["d"],"id":32},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":["i"]},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"insert","lines":["v"]}],[{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["/"],"id":33}],[{"start":{"row":16,"column":27},"end":{"row":17,"column":12},"action":"insert","lines":["","            "],"id":34}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["<"],"id":35},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":[">"]}],[{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"insert","lines":["d"],"id":36},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"insert","lines":["i"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["v"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":[" "],"id":37},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["c"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["l"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["u"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["s"],"id":38},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["u"]}],[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["a"],"id":39},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["s"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["="],"id":40}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":25},"action":"insert","lines":["''"],"id":41}],[{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["p"],"id":42},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["o"]},{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["s"]},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":30},"end":{"row":18,"column":16},"action":"insert","lines":["","                "],"id":43}],[{"start":{"row":18,"column":16},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":19,"column":0},"end":{"row":19,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":16},"action":"remove","lines":["    "],"id":45}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":["<"],"id":46},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":[">"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["/"],"id":47},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["d"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["i"]}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["v"],"id":48}],[{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"insert","lines":["<"],"id":49},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":[">"]}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["h"],"id":50},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["2"]}],[{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":[" "],"id":51},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["c"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["l"],"id":52},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["a"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["s"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["="],"id":53},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["7"]},{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["7"]}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"remove","lines":["7"],"id":54},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"remove","lines":["7"]}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":28},"action":"insert","lines":["''"],"id":55}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["t"],"id":56},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["i"]},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["t"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["l"],"id":57},{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["w"]}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["w"],"id":58}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["e"],"id":59}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["T"],"id":60},{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["i"]},{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["t"]},{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["l"]},{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":[" "],"id":61},{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["1"]}],[{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["<"],"id":62},{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":[">"]}],[{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["/"],"id":63}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":["h"],"id":64},{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"insert","lines":["2"]}],[{"start":{"row":18,"column":46},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":65},{"start":{"row":19,"column":0},"end":{"row":19,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["<"],"id":66},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":[">"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["<"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":[">"]}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["p"],"id":67}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["p"],"id":68},{"start":{"row":19,"column":17},"end":{"row":19,"column":21},"action":"insert","lines":["post"]}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"remove","lines":["t"],"id":69},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"remove","lines":["s"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["o"]}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["/"],"id":70},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["p"]}],[{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"remove","lines":["p"],"id":71},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["p"]}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":[" "],"id":72},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["c"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["l"]}],[{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["a"],"id":73},{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["s"]},{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":[" "],"id":74}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"remove","lines":[" "],"id":75}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["="],"id":76}],[{"start":{"row":19,"column":25},"end":{"row":19,"column":27},"action":"insert","lines":["''"],"id":77}],[{"start":{"row":19,"column":26},"end":{"row":19,"column":27},"action":"insert","lines":["b"],"id":78},{"start":{"row":19,"column":27},"end":{"row":19,"column":28},"action":"insert","lines":["o"]},{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["d"]},{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["y"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["T"],"id":79},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["h"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["i"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":[" "],"id":80},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":["i"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["s"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["a"]}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["a"],"id":81}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":[" "],"id":82},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["a"]}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":[" "],"id":83},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["s"]},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["a"]},{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["m"]}],[{"start":{"row":19,"column":45},"end":{"row":19,"column":46},"action":"insert","lines":["p"],"id":84},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"insert","lines":["l"]},{"start":{"row":19,"column":47},"end":{"row":19,"column":48},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":48},"end":{"row":19,"column":49},"action":"insert","lines":[" "],"id":85}],[{"start":{"row":19,"column":49},"end":{"row":19,"column":50},"action":"insert","lines":["b"],"id":86},{"start":{"row":19,"column":50},"end":{"row":19,"column":51},"action":"insert","lines":["o"]},{"start":{"row":19,"column":51},"end":{"row":19,"column":52},"action":"insert","lines":["d"]},{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"remove","lines":["e"],"id":87}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"insert","lines":["r"],"id":88}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"remove","lines":["r"],"id":89}],[{"start":{"row":19,"column":52},"end":{"row":19,"column":53},"action":"insert","lines":["y"],"id":90}],[{"start":{"row":19,"column":53},"end":{"row":19,"column":54},"action":"insert","lines":["."],"id":91}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":58},"end":{"row":19,"column":58},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1628232067952}