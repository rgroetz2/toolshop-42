@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
         viewBox="55 35 808.6 160" style="width:280px" xml:space="preserve">
                <style>
                    .st0{fill:#8DC12F;}
                    .st1{fill:#FFFFFF;}
                    .st2{fill:#9DC83D;}
                    .st3{fill:#1D6098;}
                    .st4{fill:#5A585D;}
                    .gear {
                        transform-origin: 50% 50%;
                        transform-box: fill-box;
                        -webkit-animation: frames 10s infinite linear;
                        animation: frames 10s infinite linear;
                    }

                    @keyframes frames {
                        0% {
                            -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                        }
                        100% {
                            -webkit-transform: rotate(359deg);
                            transform: rotate(359deg);
                        }
                    }
                </style>
        <g transform="translate(-100 -390)">
            <path class="st0"
                  d="m832.2 581h-194.8c-12.1 0-21.8-9.8-21.8-21.8v-19c0-12.1 9.8-21.8 21.8-21.8h194.8c12.1 0 21.8 9.8 21.8 21.8v19c0 12-9.8 21.8-21.8 21.8z"/>

            <path class="st1"
                  d="m685.3 562.1-1-0.1-0.3-0.1-0.3-0.3-0.1-0.6-0.1-0.9v-0.4l-0.1-0.5v-0.9l0.1-0.5v-0.6l0.1-0.5v-0.4-0.4-0.5-0.5-0.5-1-0.5l0.1-0.5v-0.5l-0.1-0.4 0.1-0.5v-0.5-1l-0.1-0.5 0.1-0.5v-0.4l0.1-0.4v-0.6-0.4l0.1-0.5v-0.2l-0.1-0.5v-0.6-0.4-0.5-0.5-0.3-0.6l-0.1-0.3 0.1-1v-0.5-0.4-0.4-0.6l-0.1-0.4 0.1-0.4-0.1-0.6v-0.5-0.5l0.1-0.4-0.1-0.6v-0.9l0.2-0.3 0.3-0.3 0.4-0.1 0.9-0.1h0.5 0.4 0.6 0.3 0.5l0.5-0.1 0.5 0.1h0.3 0.5 0.5l0.5-0.1h0.6 0.4l0.4 0.1 0.5-0.1 0.5 0.1h0.5l0.9-0.1 0.9 0.1h0.4l0.5 0.1 0.9 0.2 0.5 0.1 0.3 0.1 0.5 0.1 0.5 0.2 1.2 0.6 0.3 0.2 0.4 0.3 0.5 0.2 1 1 0.2 0.3 0.3 0.3 0.2 0.4 0.3 0.4 0.2 0.5 0.4 0.8 0.1 0.4 0.4 1 0.1 0.3v0.6l0.1 0.3 0.2 1v0.4 1l-0.1 0.4v0.5 0.5 0.4 0.4l-0.1 0.6v0.5 0.5l-0.1 0.3 0.1 0.5v0.5l-0.1 0.6v0.4 1 0.8l-0.1 0.6-0.1 0.4v0.5l-0.2 0.5-0.1 0.4-0.2 0.5-0.1 0.4-0.5 0.9-0.2 0.3-0.2 0.4-0.3 0.5-1 0.9-0.3 0.3-0.4 0.3-0.3 0.3-0.4 0.3-0.3 0.2-0.4 0.1-0.3 0.3-0.4 0.1-0.5 0.2-0.4 0.1-0.5 0.1-0.4 0.1-0.6 0.1h-0.3l-0.6 0.1h-1l-0.4 0.2h-0.9-0.4-0.6l-0.4-0.1-0.4 0.1h-0.5l-0.6 0.1h-0.3l-0.5-0.1-0.4-0.1h-0.5l-0.4 0.1-0.4-0.1-0.5 0.1h-1l-0.5-0.1-0.4 0.1zm5.9-4.6h0.5 0.5 0.5 0.6l0.9-0.1h0.5 0.4l1-0.2 1-0.4 0.4-0.2 0.5-0.2 0.3-0.2 0.4-0.3 0.7-0.7 0.3-0.8 0.2-0.4 0.1-0.4 0.2-0.5 0.1-0.5v-0.5l-0.1-0.9v-0.5-0.3l0.1-0.5v-1-0.4-0.6-0.4-0.6-0.5-0.9-0.6-0.8l-0.1-0.5v-0.6l-0.2-0.3-0.1-0.5-0.2-0.5-0.2-0.3-0.2-0.4-0.3-0.3-0.3-0.4-0.3-0.2-0.5-0.3-0.3-0.2-0.4-0.2-0.5-0.2-0.4-0.2-0.6-0.1h-0.4-0.5l-0.4-0.1-1 0.1h-0.4-0.5l-0.5-0.1-0.6 0.1h-0.3l-1-0.1-0.5 0.1-0.6-0.1-0.3 0.1-0.1 0.1v0.4 0.5l-0.1 0.3 0.1 0.5v0.5 0.4 0.6l0.1 0.3v0.6 0.5 0.4l-0.1 0.5v0.4 0.5 0.5l0.1 0.5v0.3l-0.1 0.5v0.5l0.1 0.6-0.1 0.4v0.5 0.6l0.1 0.4-0.1 0.9 0.1 0.5v0.5 0.5 0.5l-0.1 0.4v0.4l0.1 0.6-0.1 0.4 0.1 0.4-0.1 0.5v0.5 0.4 0.5 0.3l0.1 0.1h0.4l1-0.1h0.4l0.6 0.1 0.1-0.1z"/>
            <path class="st1"
                  d="m715.5 562.1-0.5-0.1-0.5 0.1-0.9-0.1-0.5 0.1h-0.6-0.5-0.5-0.8l-0.5-0.2-0.2-0.3-0.2-0.5v-0.8l0.1-0.6v-0.4l-0.1-0.5v-1.4l0.1-0.4-0.1-0.5 0.1-0.5v-0.6l0.1-0.4v-0.4-0.5-0.5l-0.1-0.5 0.1-0.4-0.1-0.6 0.1-0.4v-0.5l-0.1-0.6 0.1-0.4-0.1-0.6v-0.4-0.5-0.4-0.5l-0.1-0.6 0.1-0.4-0.1-0.5v-0.4-0.5l0.2-0.4 0.1-0.4-0.1-0.4v-1-0.5-0.5-0.4l-0.1-0.5v-0.6-0.4-0.9l0.1-0.4-0.1-0.6v-0.4-0.6-0.4l0.1-0.6v-0.4-0.9l0.2-0.4 0.3-0.4 0.3-0.1h1l0.4-0.1h0.5l0.5 0.1h0.5 0.5l0.9 0.1 0.4-0.1h0.5l0.4 0.1 0.5-0.1h0.4 0.5 0.5l0.4 0.1 0.6-0.1 0.5 0.1h0.4l0.6-0.1h0.5 0.4l0.4 0.1h0.5l0.4-0.1 0.5 0.1h0.5l0.4-0.1h0.6 0.5l0.9-0.1 0.9 0.1 0.5 0.1 0.5 0.7v0.9 0.5l-0.1 0.5 0.1 0.9-0.2 0.4-0.4 0.4-0.4 0.1-0.8-0.1h-1.4l-0.6 0.1h-0.4l-0.5-0.1-1 0.1h-0.4l-0.5-0.1-0.5 0.1-0.4-0.1-0.4 0.1-0.4 0.3h-0.5l-0.4-0.1h-0.9l-1 0.1h-1l-0.5-0.1-0.4 0.1h-0.3v0.4l-0.1 0.4v0.4 0.4 0.5l0.1 0.5v0.5l-0.1 0.4v0.5l0.1 0.5-0.1 0.4 0.1 0.5-0.1 0.4v0.5 0.4h0.1 0.3l0.6 0.1h0.3 0.5 0.6 0.5l0.4-0.1 0.4 0.1h0.6l0.5-0.1h0.4 1 0.4 0.5l0.4 0.1 0.5-0.1 0.5 0.1 0.5-0.1 0.4 0.1h0.5l0.9-0.1 0.4 0.2 0.4 0.3v0.3l0.1 1v0.4l-0.1 0.6v0.9l-0.1 0.5-0.2 0.3-0.5 0.2h-0.9-0.5-0.4-0.5l-0.5 0.1h-0.4l-0.5-0.1h-0.5-0.4-0.4-0.5-0.5l-0.4-0.1-0.5 0.1h-0.3l-0.5-0.1-0.5 0.1h-0.4l-0.5 0.1h-0.5-0.4-0.3l-0.1 0.1v0.3 0.5l-0.1 0.5v0.4 0.6l0.1 0.5v0.4 0.5l-0.1 0.4 0.1 0.5v0.9l-0.1 0.6 0.1 0.5-0.1 0.3 0.1 0.1h0.4l0.4-0.1 0.5 0.1h0.4 0.6l0.4 0.1 0.6-0.1h0.4l0.5 0.1h1l0.6-0.1h0.5 0.4 0.5l0.4 0.1 1.4-0.1 0.5 0.1 0.6-0.1h0.5l0.4 0.1 0.5-0.1h0.5 0.9l0.4 0.2 0.3 0.3 0.1 0.5 0.1 0.9v0.5l-0.1 0.4-0.1 0.9-0.1 0.5-0.3 0.3-1.4 0.1-0.4 0.1-0.5-0.1-0.4 0.1-0.8-0.3-0.6 0.1h-0.4l-0.4-0.1h-0.5-0.6l-0.4 0.1h-0.5-0.4l-0.5-0.1h-0.4l-0.6 0.1h-0.5-1.2-0.5-0.5-0.5-0.4-0.6z"/>
            <path class="st1"
                  d="m754.5 543.7-0.3 0.3-0.2 0.4-0.2 0.5-0.2 0.4-0.3 0.3-0.1 0.5-0.2 0.5-0.3 0.4-0.3 0.3-0.1 0.5-0.6 0.7-0.6 1.2-0.3 0.3-0.2 0.4-0.3 0.5-0.2 0.4-0.3 0.3-0.2 0.5-0.1 0.3-0.3 0.4-0.2 0.4-0.4 0.4-0.8 1.6-0.3 0.3-0.6 0.2h-0.7-0.2l-0.9 0.1-0.5-0.2-0.3-0.3-0.5-0.7-0.2-0.4-0.2-0.5-0.2-0.3-0.3-0.5-0.6-1.2-0.3-0.3-0.2-0.4-0.3-0.4-0.2-0.4-0.2-0.3-0.3-0.4-0.4-0.8-0.5-0.8-0.3-0.4-0.2-0.4-0.2-0.3-0.2-0.5-0.2-0.3-0.3-0.4-0.2-0.5-0.4-0.8 0.1-0.3-0.2-0.3-0.2 0.1v0.3 0.2 0.6 0.3 0.4 0.4 1.4 0.4 0.6l0.1 0.8-0.1 0.6 0.1 0.5v0.3 0.5 0.5l-0.1 0.5 0.1 0.4-0.1 1 0.1 0.4v0.6 0.4l0.1 0.5-0.1 0.5 0.1 0.4v0.6 0.5l-0.1 0.4v0.5 0.5 0.4 0.5 0.5 0.9l-0.2 0.5-0.3 0.2-0.5 0.1-0.9 0.1-0.4 0.1-0.4-0.1h-0.9l-0.4-0.1-0.4-0.4v-0.3l-0.2-0.9 0.1-0.5v-0.4-0.6-0.5-0.4l0.1-0.5v-0.4-0.6-0.4l-0.1-1 0.1-0.4v-0.6l-0.1-0.3 0.1-0.6v-0.5-0.3l-0.1-0.6v-0.3-0.6-0.4l-0.1-0.6 0.1-0.4v-0.4-0.5-0.5l0.1-0.5v-0.9-0.5l-0.1-0.5 0.1-0.4-0.1-0.5v-0.4-0.5l0.1-0.4v-0.5-1l-0.1-0.4 0.1-0.5-0.1-0.4v-0.5-0.5-0.5l0.1-0.5v-0.6l-0.1-0.4v-0.6-0.4-0.6l0.1-0.8 0.1-0.4 0.3-0.4 0.4-0.1 0.9-0.1h0.4 0.4 0.9l0.4 0.1 0.4 0.2 0.3 0.4 0.4 0.8 0.3 0.3 0.4 0.8 0.2 0.5 0.3 0.4 0.2 0.4 0.3 0.3 0.2 0.4 0.2 0.5 0.2 0.4 0.2 0.3 0.6 1.2 0.3 0.4 0.4 0.7 0.3 0.5 0.2 0.4 0.2 0.3 0.3 0.4 0.2 0.4 0.3 0.4 0.2 0.4 0.3 0.4 0.9 1.8 0.2 0.3 0.2 0.5 0.2 0.4 0.3 0.4 0.2 0.6h0.2l0.4-0.7 0.3-0.4 0.1-0.4 0.3-0.4 0.2-0.4 0.3-0.3 0.2-0.5 0.2-0.4 0.3-0.4 0.3-0.5 0.3-0.3 0.2-0.5 0.4-0.8 0.3-0.3 0.2-0.4 0.3-0.4 0.1-0.5 0.3-0.3 0.2-0.6 0.2-0.3 0.3-0.4 0.2-0.4 0.4-0.4 0.1-0.5 0.4-0.4 0.2-0.4 0.2-0.5 0.3-0.3 0.2-0.6 0.3-0.3 0.2-0.4 0.2-0.5 0.6-0.7 0.2-0.3 0.3-0.2 0.5-0.1h0.9 0.5 0.4 0.9l0.4 0.2 0.4 0.3 0.2 0.4v0.9 0.5l0.1 0.3-0.1 0.5v1l0.1 0.5v0.4l-0.1 0.6v0.9l0.1 0.6v0.9l-0.1 0.5v0.4 0.5l0.1 0.5v0.4l-0.1 0.5 0.1 0.4v0.6 0.4l-0.1 0.5v0.5l0.1 0.4v0.5 0.4l0.1 0.6v0.4 1 0.5 0.5 0.6 0.3l0.1 0.6v0.4 0.5 0.6l-0.1 0.5v0.6l0.1 0.4v0.5 0.5 0.4l0.1 0.4v0.6l0.1 0.5v0.4l-0.1 0.5v0.5 0.9l-0.2 0.4-0.3 0.4h-0.3-1-1l-1-0.1h-0.4l-0.2-0.3-0.2-0.5v-0.9-0.4-0.5-0.4l0.1-0.5-0.1-0.5v-0.6-0.4-0.6-0.4-0.4-0.6-0.3l-0.1-0.6v-0.5-0.8-0.5-0.4-0.4l0.1-0.5v-0.4l-0.1-0.5 0.1-0.6v-0.5l-0.1-0.9 0.1-0.5v-0.4-0.4l0.1-0.6v-0.3l0.1-0.5v-0.5l0.1-0.5v-1l-0.2-0.1-1 0.2z"/>
            <path class="st1"
                  d="m775.1 562.7h-0.4l-0.4-0.1-0.5-0.1h-0.4l-0.6-0.1h-0.5l-0.8-0.2-0.5-0.2-0.3-0.2-0.9-0.2-0.5-0.2-0.4-0.3-0.3-0.1-0.4-0.4-0.4-0.2-0.2-0.4-0.3-0.2-0.4-0.3-0.3-0.4-0.3-0.3-0.2-0.4-0.3-0.4-0.2-0.4-0.1-0.5-0.2-0.5-0.4-0.7v-0.5l-0.2-0.4-0.1-0.6v-0.9l-0.1-0.4v-1-0.4-0.5-1-0.5-1l-0.1-0.4v-0.4-0.5-0.6-1.8l0.1-0.6v-0.9-0.4-0.4l0.2-0.9 0.1-0.5v-0.5l0.2-0.3v-0.5l0.6-1.2 0.3-0.3 0.2-0.4 0.3-0.3 0.2-0.4 0.4-0.3 0.6-0.6 0.4-0.3 0.4-0.2 0.3-0.3 0.4-0.3 0.4-0.1 0.4-0.3 0.4-0.1 1-0.4 0.4-0.1 0.5-0.2 0.5-0.1h0.9l0.4-0.2 0.5 0.1h0.4l1-0.1h0.5 0.4l1 0.1 0.4 0.2h0.5l0.4 0.2 0.6 0.1 0.5 0.2h0.4l0.8 0.4 0.5 0.3 0.4 0.2 0.3 0.3 0.5 0.2 0.2 0.2 0.5 0.4 0.6 0.6 0.4 0.3 0.2 0.3 0.3 0.5 0.8 1.6 0.1 0.4 0.2 0.5 0.1 0.5 0.2 0.4v0.4l0.1 0.4 0.1 0.9v1 0.5 0.5 0.5 0.4l0.1 0.6v0.5 0.5 0.4l0.1 0.5-0.1 0.5v0.5 1.1 0.4l-0.1 0.5 0.1 0.4-0.1 1v0.5l-0.1 0.4v0.6 0.4 0.4l-0.2 0.5-0.1 0.5-0.2 0.5-0.2 0.4-0.1 0.4-0.3 0.5-0.2 0.4-0.3 0.2-0.2 0.4-0.3 0.4-0.4 0.3-0.6 0.6-0.5 0.2-0.3 0.2-0.5 0.3-0.4 0.3-0.3 0.2-0.4 0.2-0.5 0.2-0.9 0.2-0.4 0.1-0.5 0.2-0.5 0.1-0.4 0.1-0.5 0.1-0.9 0.1-0.5-0.1-1.1-0.4zm1.6-4.6 0.5-0.1 0.4-0.1 0.5-0.1 0.6-0.1 0.3-0.2 0.4-0.2 0.5-0.2 0.4-0.4 0.2-0.3 0.4-0.3 0.2-0.3 0.3-0.5 0.2-0.4 0.2-0.5v-0.5l0.1-0.3 0.1-0.6v-0.9l-0.1-0.5 0.1-0.6v-0.5-0.4-0.5-0.4-0.5l0.1-0.4-0.1-0.5v-0.5-1.1-0.5-0.4l-0.1-0.5 0.1-0.4v-0.9-0.5-0.5l-0.4-0.8-0.2-0.5-0.3-0.4-0.2-0.5-0.7-0.7-0.4-0.2-0.5-0.2-0.4-0.3-0.3-0.2h-0.5l-0.5-0.2h-0.5-0.5l-0.4-0.2-1.5 0.1-0.5 0.1h-0.6l-0.3 0.2-0.6 0.1-0.4 0.2-0.5 0.2-0.7 0.6-0.4 0.3-0.3 0.3-0.3 0.4-0.4 0.8-0.2 0.5v0.5l-0.2 0.4 0.1 0.6v0.9l-0.1 0.5v0.6 0.4 0.5l0.1 0.5-0.1 0.5 0.1 0.5-0.1 0.6v0.5l0.1 0.5v0.4 0.5 0.5 1 0.5 0.9l0.2 0.5v0.4l0.2 0.5 0.1 0.3 0.3 0.4 0.1 0.5 0.3 0.4 1 1 0.4 0.2 0.3 0.2 0.6 0.2 0.4 0.2 0.5 0.2h0.4l0.5 0.1h0.4 1l0.6-0.4z"/>
        </g>
        <polygon class="st0" points="119.8,118.9 109,109 103.8,114.4 120.9,129.3 149.6,97.9 144.1,92.3 	"/>
        <g class="gear">
            <path class="st3" d="M178.7,123.1l20.9-3.3V99.7l-20.9-4.2c-1.2-4.4-2.9-8.7-5.2-12.6L186,65.8l-14.2-14.2l-17.7,11.8l0,0
		c-3.9-2.2-8.1-4-12.4-5.2l-4.2-20.9h-20.1l-3.2,20.9l0,0c-4.5,1.2-8.8,3-12.8,5.2l0,0L83.7,51.6L69.5,65.8L82,82.9l0,0
		c-2.2,3.9-4,8.1-5.2,12.5l-20.9,4.2v20.1l20.9,3.3l0,0c1.2,4.4,3,8.6,5.2,12.5l0,0l-11.8,17.7l14.2,14.2l17.1-12.5
		c3.9,2.2,8.1,4,12.6,5.2l0,0l3.2,20.8h20.1l4.2-20.9c4.4-1.2,8.4-2.9,12.3-5.1l17.1,12.5l14.2-14.2l-11.8-17.7
		C175.7,131.6,177.5,127.5,178.7,123.1L178.7,123.1z M127.7,150.4c-22.8,0-41.3-18.5-41.3-41.3s18.5-41.3,41.3-41.3
		S169,86.3,169,109.1S150.5,150.4,127.7,150.4z"/>
        </g>
        <path class="st3" d="M231.8,77.8h59v8.8h-25.1v50.1h-8.8V86.6h-25.1V77.8z"/>
        <path class="st3" d="M307.4,77.8H345c2.9,0,5.5,1,7.5,3.1c2.1,2.1,3.1,4.6,3.1,7.5v37.7c0,2.9-1,5.5-3.1,7.5
		c-2.1,2.1-4.6,3.1-7.5,3.1h-37.7c-2.9,0-5.5-1-7.5-3.1c-2.1-2.1-3.1-4.6-3.1-7.5V88.4c0-2.9,1-5.5,3.1-7.5
		C301.9,78.8,304.4,77.8,307.4,77.8z M307.4,127.9H345c0.5,0,0.9-0.2,1.3-0.5c0.4-0.4,0.5-0.8,0.5-1.3V88.4c0-0.5-0.2-0.9-0.5-1.3
		c-0.4-0.4-0.8-0.5-1.3-0.5h-37.7c-0.5,0-0.9,0.2-1.3,0.5c-0.4,0.4-0.5,0.8-0.5,1.3v37.7c0,0.5,0.2,0.9,0.5,1.3
		C306.4,127.8,306.9,127.9,307.4,127.9z"/>
        <path class="st3" d="M375.2,77.8h37.7c2.9,0,5.5,1,7.5,3.1c2.1,2.1,3.1,4.6,3.1,7.5v37.7c0,2.9-1,5.5-3.1,7.5
		c-2.1,2.1-4.6,3.1-7.5,3.1h-37.7c-2.9,0-5.5-1-7.5-3.1c-2.1-2.1-3.1-4.6-3.1-7.5V88.4c0-2.9,1-5.5,3.1-7.5
		C369.7,78.8,372.2,77.8,375.2,77.8z M375.2,127.9h37.7c0.5,0,0.9-0.2,1.3-0.5c0.4-0.4,0.5-0.8,0.5-1.3V88.4c0-0.5-0.2-0.9-0.5-1.3
		c-0.4-0.4-0.8-0.5-1.3-0.5h-37.7c-0.5,0-0.9,0.2-1.3,0.5c-0.4,0.4-0.5,0.8-0.5,1.3v37.7c0,0.5,0.2,0.9,0.5,1.3
		C374.3,127.8,374.7,127.9,375.2,127.9z"/>
        <path class="st3" d="M432.6,136.8V77.7h8.8v50.2h50.1v8.8h-58.9V136.8z"/>
        <path class="st4" d="M554.9,89.9v5.5H542v-4.8h-33.4v10.3h34.2c3.3,0,6.2,1.2,8.6,3.6c2.4,2.4,3.6,5.2,3.6,8.6v11.6
		c0,3.3-1.2,6.2-3.6,8.6c-2.4,2.4-5.2,3.6-8.6,3.6H508c-3.3,0-6.2-1.2-8.6-3.5c-2.4-2.3-3.6-5.2-3.6-8.6v-5.5h12.7v4.8H542v-10.3
		h-34c-3.3,0-6.2-1.2-8.6-3.5c-2.4-2.3-3.6-5.2-3.6-8.6V90.1c0-3.4,1.2-6.3,3.6-8.6c2.4-2.3,5.2-3.5,8.6-3.5h34.7
		c3.3,0,6.2,1.2,8.6,3.6C553.7,83.7,554.9,86.6,554.9,89.9z"/>
        <path class="st4" d="M611.2,77.8h12.7v59h-12.7v-23.1h-34.8v23.1h-12.7v-59h12.7v23.1h34.8V77.8z"/>
        <path class="st4" d="M645.3,77.8H680c3.3,0,6.2,1.2,8.6,3.6c2.4,2.4,3.6,5.2,3.6,8.6v34.7c0,3.3-1.2,6.2-3.6,8.6
		c-2.4,2.4-5.2,3.6-8.6,3.6h-34.7c-3.4,0-6.3-1.2-8.6-3.5s-3.5-5.2-3.5-8.6V90.1c0-3.4,1.2-6.3,3.5-8.6
		C639,79,641.9,77.8,645.3,77.8z M645.9,90.6V124h33.4V90.6H645.9z"/>
        <path class="st4" d="M701.2,77.9H748c3.3,0,6.2,1.2,8.6,3.6c2.4,2.4,3.6,5.2,3.6,8.6v15.2c0,3.3-1.2,6.2-3.6,8.6
		c-2.4,2.4-5.3,3.6-8.6,3.6l-34.1,0.1c0.2,0,0.2,0.2,0.2,0.5c-0.1,0-0.2,0-0.2-0.1v18.9h-12.7V77.9z M713.8,90.6v14h33.4v-14H713.8z
		"/>
</svg>
@endcomponent
@endslot

{{-- Body --}}
# Hello {{ $name }},

Your password is set to: welcome02


Best regards,<br>
Team Practice Software Testing<br>


{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    © @php echo date("Y"); @endphp . All rights reserved.
@endcomponent
@endslot
@endcomponent
