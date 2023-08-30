<footer class="footer">
    <div class="download_app">
        <div class="col-md about">
            <a href="#"><img src="https://doctorak.fra1.cdn.digitaloceanspaces.com/logo_sml.png" width="85" height="44" alt=""></a>
            <p> | </p><h6>{{ trans('general.footer_logo_p') }}</h6>
        </div>        {{--<div class="container">--}}
            {{--<div class="row justify-content-between">--}}
                {{--<div class="col-md-8 flexer flexer_ai_center">--}}
                    {{--<h4>{{ trans('general.doctorak_is_faster_on_app') }}</h4>--}}
                {{--</div>--}}
                {{--<div class="col-md">--}}
                    {{--<div class="action">--}}
                        {{--<a href="#" class="google_play"><img src="{{ f_assets('/images/general/google_play_link.png') }}" alt=""></a>--}}
                        {{--<a href="#" class="itunes"><img src="{{ f_assets('/images/general/Download_on_the_App_Store_Badge_US-UK_135x40.svg') }}" alt=""></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="footer_top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12">
                    <div class="row justify-content-end footer_nav">
                        <div class="col-md item">
                            <ul>
                                <li><a href="{{route('frontend.home')}}">{{ trans('general.home') }}</a></li>
                                <li><a href="{{route('frontend.doctor.index')}}">{{ trans('general.doctors') }}</a></li>
                                <li><a href="{{route('frontend.hospital.index')}}">{{ trans('general.hospitals') }}</a></li>
                                <li><a href="{{route('frontend.center.index')}}">{{ trans('general.centers') }}</a></li>
                                <li><a href="{{route('frontend.pharmacy.index')}}">{{ trans('general.pharmacies') }}</a></li>
                                <li><a href="{{route('frontend.lab.index')}}">{{ trans('general.labs') }}</a></li>
                                <li><a href="{{route('frontend.insurance_company.index')}}">{{ trans('general.insurances_companies') }}</a></li>
                                <li><a href="{{route('frontend.medicine.index')}}">{{ trans('general.medicines') }}</a></li>
                            </ul>
                        </div>
                        <div class="col-md item">
                            <ul>
                                <li>
                                    <a href="/eg/calc/bmi-calculator">@if (app()->getLocale() == "ar")
                                        مؤشر كتلة الجسم
                                    @else
                                        Body Mass Index Calculator  (BMI)
                                    @endif</a>
                                </li>
                                <li>
                                    <a href="/eg/calc/bmr-calculator">@if (app()->getLocale() == "ar")
                                        حاسبة السعرات الحرارية
                                    @else
                                        Calorie Calculator
                                    @endif</a>
                                </li>
                                <li>
                                    <a href="/eg/calc/pregnancy-calculator">@if (app()->getLocale() == "ar")
                                        حاسبة الحمل والولادة
                                    @else
                                        Pregnancy Calculator
                                    @endif</a>
                                </li>
                                <li>
                                    <a href="/eg/calc/ovulation-calculator">@if (app()->getLocale() == "ar")
                                        التبويض
                                    @else
                                        Ovulation Calculator
                                    @endif</a>
                                </li>
                                <li>
                                    <a href="/eg/calc/period-calculator">@if (app()->getLocale() == "ar")
                                        الدورة الشهرية
                                    @else
                                        Period Calculator
                                    @endif</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md item">
                            <ul>
                                {{--<li>--}}
                                    {{--<a href="#">{{ trans('general.about') }}</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="#">{{ trans('general.faq') }}</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="{{ route('frontend.staticPages.termsAndConditions') }}">{{ trans('general.terms_and_conditions') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}" target="_blank">{{ trans('general.articles') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.staticPages.contactUs') }}">{{ trans('general.contacts') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md item engagement">
                            <span style="text-align: right">
                                {{ trans('general.stay') }}<br />
                                {{ trans('general.conected') }}
                            </span>
                            <ul>
                                <li><a href="https://instagram.com/doctorakdotcom/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M359.312,0H152.689C68.849,0,0.64,68.208,0.64,152.049v207.903C0.64,443.792,68.849,512,152.689,512h206.623     c83.839,0,152.048-68.208,152.048-152.048V152.049C511.359,68.208,443.151,0,359.312,0z M490.961,359.951     c0,72.593-59.057,131.65-131.649,131.65H152.689c-72.593,0-131.65-59.057-131.65-131.649V152.049     c0-72.593,59.057-131.65,131.65-131.65h206.623c72.592,0,131.649,59.057,131.649,131.65V359.951z"/>
                                                    <path d="M359.312,58.294H152.689c-51.698,0-93.756,42.057-93.756,93.755v207.904c0,51.697,42.058,93.755,93.756,93.755h206.623     c51.697,0,93.755-42.058,93.755-93.755V152.049C453.067,100.352,411.009,58.294,359.312,58.294z M432.669,359.951     c0,40.449-32.908,73.357-73.357,73.357H152.689c-40.45,0-73.358-32.908-73.358-73.357V152.048     c0-40.449,32.908-73.357,73.358-73.357v0.001h206.623c40.449,0,73.357,32.908,73.357,73.357V359.951z"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M256,124.178c-72.686,0-131.821,59.135-131.821,131.822S183.313,387.821,256,387.821S387.821,328.687,387.821,256     S328.686,124.178,256,124.178z M256,367.422c-61.438,0-111.422-49.984-111.422-111.422c0-61.439,49.984-111.423,111.422-111.423     c61.439,0,111.422,49.984,111.422,111.423C367.422,317.438,317.438,367.422,256,367.422z"/>
                                                    <path d="M256,181.041c-41.332,0-74.959,33.627-74.959,74.959s33.627,74.959,74.959,74.959c41.333,0,74.959-33.627,74.959-74.959     S297.332,181.041,256,181.041z M256,310.561c-30.085,0-54.561-24.476-54.561-54.561s24.476-54.561,54.561-54.561     s54.561,24.475,54.561,54.561C310.561,286.085,286.085,310.561,256,310.561z"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M380.485,99.843c-17.464,0-31.673,14.208-31.673,31.673s14.208,31.672,31.673,31.672    c17.463,0,31.672-14.207,31.672-31.672S397.948,99.843,380.485,99.843z M380.485,142.789c-6.216,0-11.274-5.057-11.274-11.273    c0-6.217,5.058-11.274,11.274-11.274s11.273,5.058,11.273,11.274C391.759,137.732,386.702,142.789,380.485,142.789z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M239.681,463.044h-95.872c-5.633,0-10.199,4.566-10.199,10.199s4.566,10.199,10.199,10.199h95.872    c5.633,0,10.199-4.566,10.199-10.199S245.314,463.044,239.681,463.044z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M278.438,463.044h-6.12c-5.632,0-10.199,4.566-10.199,10.199s4.567,10.199,10.199,10.199h6.12    c5.633,0,10.199-4.566,10.199-10.199S284.07,463.044,278.438,463.044z"/>
                                            </g>
                                        </g>
                                        </svg>
                                    </a>
                                </li>
                                <li><a href="https://vm.tiktok.com/ZMNX2b5AT/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" viewBox="0 0 15 15" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9 0H10V1C10 3.20914 11.7909 5 14 5V6C12.3644 6 10.9122 5.21466 10 4.00049V11C10 13.2091 8.20914 15 6 15C3.79086 15 2 13.2091 2 11C2 8.79086 3.79086 7 6 7V8C4.34315 8 3 9.34315 3 11C3 12.6569 4.34315 14 6 14C7.65685 14 9 12.6569 9 11V0Z" fill="black"/>
                                        </svg>
                                    </a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCEq0gLkvqu6jExGqfYJNNyQ" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M380,70H110C49.346,70,0,119.346,0,180v130c0,60.654,49.346,110,110,110h270c60.654,0,110-49.346,110-110V180     C490,119.346,440.654,70,380,70z M470,310c0,49.626-40.374,90-90,90H110c-49.626,0-90-40.374-90-90V180c0-49.626,40.374-90,90-90     h270c49.626,0,90,40.374,90,90V310z"/>
                                                    <path d="M323.846,235.769l-120-50c-3.085-1.286-6.611-0.945-9.393,0.911c-2.782,1.854-4.453,4.977-4.453,8.32v100     c0,3.344,1.671,6.466,4.453,8.32c1.667,1.112,3.601,1.68,5.548,1.68c1.301,0,2.608-0.254,3.845-0.769l120-50     c3.727-1.553,6.154-5.194,6.154-9.231C330,240.963,327.572,237.322,323.846,235.769z M210,280v-70l84,35L210,280z"/>
                                                </g>
                                            </g>
                                        </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                        </svg>
                                </a></li>
                                <li><a href="https://twitter.com/doctorak_/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 324.142 324.142" style="enable-background:new 0 0 324.142 324.142;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M162.07,0C73.163,0,0.83,72.333,0.83,161.241c0,37.076,12.788,73.004,36.1,101.676     c-6.651,16.758-17.789,31.247-32.401,42.089c-2.238,1.66-3.37,4.424-2.941,7.178c0.429,2.753,2.349,5.042,4.986,5.942     c11.683,3.992,23.856,6.016,36.182,6.016c19.572,0,38.698-5.093,55.569-14.763c20.158,8.696,41.584,13.103,63.747,13.103     c88.909,0,161.241-72.333,161.241-161.242C323.313,72.333,250.979,0,162.07,0z M162.07,307.483     c-21.32,0-41.881-4.492-61.111-13.35c-2.292-1.055-4.959-0.889-7.101,0.444c-15.314,9.529-32.985,14.565-51.105,14.565     c-6.053,0-12.065-0.564-17.981-1.683c12.52-12.121,22.013-26.951,27.787-43.547c0.879-2.526,0.346-5.328-1.398-7.355     C28.377,230.07,15.83,196.22,15.83,161.241C15.83,80.604,81.434,15,162.07,15s146.241,65.604,146.241,146.241     C308.313,241.879,242.708,307.483,162.07,307.483z"/>
                                                    <path d="M253.389,102.125c0.572-1.293,1.08-2.619,1.521-3.974c0.963-2.96-0.002-6.209-2.427-8.162     c-2.425-1.954-5.804-2.204-8.492-0.633c-5.124,2.998-10.619,5.252-16.38,6.723c-7.721-6.577-17.7-10.282-27.988-10.282     c-23.436,0-42.529,18.709-42.768,41.793c-22.825-3.3-43.8-14.938-58.529-32.722c-1.558-1.88-3.944-2.883-6.365-2.693     c-2.434,0.192-4.622,1.556-5.865,3.657c-3.812,6.439-5.826,13.797-5.826,21.278c0,6.252,1.391,12.307,3.974,17.799     c-0.197,0.094-0.391,0.198-0.581,0.311c-2.277,1.351-3.673,3.803-3.673,6.45v0.437c0,11.941,5.121,22.946,13.467,30.728     c-1.136,1.855-1.422,4.136-0.734,6.244c3.501,10.73,11.073,19.349,20.719,24.391c-7.661,3.141-15.915,4.764-24.452,4.764     c-2.533,0-5.072-0.146-7.548-0.436c-3.48-0.403-6.776,1.649-7.942,4.953c-1.166,3.303,0.109,6.973,3.072,8.841     c17.386,10.961,37.47,16.754,58.082,16.754c40.536,0,65.935-18.863,80.104-34.687c17.643-19.703,27.761-45.804,27.761-71.609     c0-0.278,0-0.55-0.002-0.814c6.27-4.956,11.713-10.811,16.217-17.45c1.875-2.764,1.696-6.436-0.438-9.004     C257.03,103.259,255.259,102.342,253.389,102.125z M227.518,132.05c0,22.162-8.724,44.615-23.936,61.603     c-12.129,13.546-33.933,29.693-68.929,29.693c-8.136,0-16.176-1.046-23.941-3.087c9.592-2.706,18.602-7.229,26.673-13.449     c2.523-1.944,3.543-5.27,2.543-8.294s-3.8-5.087-6.985-5.145c-7.847-0.143-15.056-3.501-20.096-8.958     c1.648-0.243,3.28-0.58,4.887-1.01c3.369-0.903,5.67-4.008,5.555-7.493c-0.116-3.485-2.619-6.431-6.04-7.109     c-9.1-1.801-16.438-7.918-19.973-15.899c1.962,0.339,3.948,0.543,5.94,0.61c3.373,0.108,6.378-2.023,7.396-5.224     c1.018-3.201-0.217-6.688-3.021-8.536c-7.717-5.084-12.324-13.548-12.324-22.642c0-1.125,0.071-2.246,0.211-3.355     c18.659,17.722,43.334,28.378,69.408,29.667c2.343,0.117,4.62-0.878,6.128-2.685s2.081-4.217,1.545-6.51     c-0.471-2.02-0.71-4.105-0.71-6.199c0-15.015,12.458-27.23,27.771-27.23c7.683,0,15.085,3.149,20.312,8.64     c1.464,1.54,3.483,2.381,5.582,2.328c-0.833,1.72-1.005,3.745-0.361,5.662c0.755,2.246,2.491,3.934,4.612,4.683     c-1.569,1.488-2.434,3.597-2.331,5.791C227.492,129.114,227.518,130.432,227.518,132.05z"/>
                                                </g>
                                            </g>
                                        </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </a></li>
                                <li><a href="https://www.facebook.com/doctorakdotcom/" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px;" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 324.143 324.143" style="enable-background:new 0 0 324.143 324.143;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M162.071,0C73.162,0,0.83,72.332,0.83,161.241c0,37.076,12.788,73.004,36.1,101.677     c-6.65,16.756-17.788,31.245-32.401,42.089c-2.237,1.66-3.37,4.424-2.94,7.177c0.429,2.754,2.349,5.042,4.985,5.942     c11.683,3.992,23.856,6.017,36.182,6.017c19.572,0,38.698-5.093,55.569-14.763c20.158,8.696,41.584,13.104,63.747,13.104     c88.909,0,161.241-72.333,161.241-161.242S250.98,0,162.071,0z M162.071,307.483c-21.32,0-41.881-4.492-61.11-13.351     c-2.292-1.057-4.959-0.89-7.102,0.443c-15.313,9.529-32.985,14.566-51.104,14.566c-6.053,0-12.065-0.564-17.981-1.684     c12.521-12.12,22.014-26.95,27.788-43.547c0.878-2.525,0.346-5.328-1.398-7.354C28.378,230.07,15.83,196.22,15.83,161.241     C15.83,80.604,81.434,15,162.071,15s146.241,65.604,146.241,146.241C308.313,241.88,242.709,307.483,162.071,307.483z"/>
                                                    <path d="M205.201,113.646h-21.2v-6.94c0-0.568,0.057-0.932,0.106-1.142c0.099-0.017,0.227-0.029,0.378-0.029h20.258     c4.143,0,7.5-3.357,7.5-7.5V67.093c0-4.13-3.339-7.483-7.47-7.5l-27.926-0.113c-33.585,0-45.502,24.429-45.502,45.349v8.818     h-10.406c-4.143,0-7.5,3.357-7.5,7.5v36.115c0,4.143,3.357,7.5,7.5,7.5h10.556v82.782c0,4.143,3.357,7.5,7.5,7.5h36.112     c4.143,0,7.5-3.357,7.5-7.5v-82.782h19.304c3.879,0,7.117-2.957,7.469-6.819l3.29-36.115c0.191-2.099-0.509-4.182-1.93-5.737     C209.319,114.533,207.309,113.646,205.201,113.646z M195.063,149.762h-19.956c-4.143,0-7.5,3.357-7.5,7.5v82.782h-21.112v-82.782     c0-4.143-3.357-7.5-7.5-7.5h-10.556v-21.115h10.406c4.143,0,7.5-3.357,7.5-7.5v-16.318c0-9.125,2.972-30.349,30.472-30.349     l20.426,0.083v15.973h-12.758c-7.458,0-15.484,5.061-15.484,16.171v14.44c0,4.143,3.357,7.5,7.5,7.5h20.486L195.063,149.762z"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container content">
            <ul>
                <li><span>© {{ date("Y") }} {{ trans('general.footer_doctorak_name') }}</span></li>
                <li><a href="">{{ trans('general.Privacy') }}</a></li>
                <li><a href="">{{ trans('general.terms_of_use') }}</a></li>
                @if(\App::getLocale()=='ar')
                    <li>
                        <a rel="alternate" hreflang="en" href="/">English</a>
                    </li>
                @else
                    <li><a  rel="alternate" hreflang="ar" href="/">عربي</a></li>
                @endif

            </ul>
        </div>
    </div>
</footer>
