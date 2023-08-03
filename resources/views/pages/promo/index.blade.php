@extends('layouts.main')
@section('page-title', 'Promos')
@if (Auth::user()->role == 'super_admin' || Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
    {{-- Stay --}}
@else
    {{ Session::flash('error', 'You are not permited to view that page') }}
    <script>
        window.location.href = "{{ url('/dashboard') }}";
    </script>
@endif
@section('content')
    @php
        function function_that_shortens_text_but_doesnt_cutoff_words($text, $length)
        {
            if (strlen($text) > $length) {
                $text = substr($text, 0, strpos($text, ' ', $length));
            }
        
            return $text;
        }
    @endphp
    <div class="row mt-3">
    </div>
    <div class="row">
        <div class="col-lg-2 col-sm-6 mt-md-0">
            <div class="card bg-gradient-primary h-100">
                <div class="card-body">
                    {{-- <div class="d-flex mb-3">
                        <p class="mb-0" style="color: white">Active</p>
                        <div class="form-check form-switch ms-auto">
                            <input class="form-check-input" {{ DB::table('settings')->value('referral') ? 'checked' : '' }} disabled type="checkbox" id="flexSwitchCheckTemperature">
                        </div>
                    </div> --}}
                    <svg width="40" viewBox="0 0 217 342" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter3_f)">
                            <path
                                d="M67 178.583C93.5097 178.583 115 157.092 115 130.583C115 104.073 93.5097 82.5825 67 82.5825C40.4903 82.5825 19 104.073 19 130.583C19 157.092 40.4903 178.583 67 178.583Z"
                                fill="white" />
                            <path
                                d="M67 188.583C99.0325 188.583 125 162.615 125 130.583C125 98.55 99.0325 72.5825 67 72.5825C34.9675 72.5825 9 98.55 9 130.583C9 162.615 34.9675 188.583 67 188.583Z"
                                stroke="white" stroke-width="10" stroke-linecap="round" stroke-dasharray="1 66" />
                            <g filter="url(#filter3_f)">
                                <path
                                    d="M61.6224 120.764C78.6362 111.727 88.2605 96.5543 83.1189 86.8741C77.9773 77.1939 60.0169 76.6723 43.0031 85.7091C25.9894 94.7458 16.3651 109.919 21.5067 119.599C26.6482 129.279 44.6087 129.801 61.6224 120.764Z"
                                    fill="white" />
                            </g>
                        </g>
                        <g filter="url(#filter2_d)">
                            <path
                                d="M83.768 199.054L83.768 63.0005C83.768 53.7179 87.4555 44.8155 94.0192 38.2518C100.583 31.688 109.485 28.0005 118.768 28.0005C128.051 28.0005 136.953 31.688 143.517 38.2518C150.08 44.8155 153.768 53.7179 153.768 63.0005L153.768 201.97C162.845 209.089 169.677 218.673 173.448 229.574C177.219 240.475 177.768 252.232 175.03 263.438C172.291 274.643 166.382 284.822 158.008 292.755C149.634 300.689 139.152 306.041 127.815 308.17C123.7 309.262 119.422 309.601 115.187 309.17C102.415 308.838 90.0831 304.437 79.9858 296.609C69.8886 288.781 62.5533 277.935 59.0477 265.649C55.5422 253.364 56.0495 240.28 60.4957 228.302C64.9419 216.325 73.095 206.079 83.768 199.056V199.054Z"
                                fill="url(#paint0_linear)" />
                            <path
                                d="M57.7443 249.189C57.7443 257.029 59.257 264.644 62.2406 271.821C65.1226 278.754 69.2556 285.005 74.5247 290.402C77.1201 293.061 79.9789 295.485 83.0218 297.609C86.0911 299.75 89.3762 301.605 92.7861 303.122C99.8678 306.273 107.414 307.971 115.213 308.169L115.251 308.17L115.289 308.174C116.437 308.291 117.607 308.35 118.769 308.35C121.749 308.35 124.707 307.964 127.558 307.203L127.595 307.193L127.632 307.186C134.372 305.929 140.788 303.521 146.701 300.029C152.492 296.61 157.625 292.258 161.958 287.096C166.323 281.896 169.728 276.046 172.078 269.71C174.511 263.153 175.745 256.248 175.745 249.189C175.745 244.564 175.208 239.958 174.149 235.501C173.12 231.169 171.592 226.949 169.607 222.957C167.658 219.036 165.262 215.323 162.485 211.919C159.725 208.536 156.585 205.453 153.151 202.757L152.769 202.457V201.97L152.769 63.0001C152.769 58.4096 151.87 53.957 150.097 49.766C148.385 45.7174 145.933 42.0811 142.81 38.9583C139.688 35.8355 136.051 33.3839 132.003 31.6715C127.812 29.8988 123.359 29 118.769 29C114.178 29 109.726 29.8988 105.535 31.6715C101.486 33.3839 97.8497 35.8355 94.7269 38.9583C91.6041 42.0811 89.1524 45.7174 87.44 49.766C85.6674 53.957 84.7686 58.4096 84.7686 63.0001L84.7686 199.055V199.593L84.3189 199.89C76.3153 205.164 69.6443 212.384 65.0268 220.769C62.6796 225.031 60.8688 229.575 59.6449 234.275C58.3838 239.117 57.7443 244.135 57.7443 249.189ZM56.7443 249.189C56.7443 228.231 67.4872 209.785 83.7686 199.055L83.7686 63.0001C83.7686 43.6699 99.4385 28 118.769 28C138.099 28 153.769 43.6699 153.769 63.0001L153.769 201.97C167.757 212.955 176.745 230.023 176.745 249.189C176.745 278.544 155.665 302.975 127.816 308.169C124.93 308.94 121.898 309.35 118.769 309.35C117.559 309.35 116.366 309.289 115.188 309.169C82.7694 308.344 56.7443 281.806 56.7443 249.189Z"
                                fill="white" fill-opacity="0.5" />
                        </g>
                        <path
                            d="M72.6179 250.554C72.616 242.091 74.9489 233.792 79.3597 226.569C83.7705 219.347 90.0883 213.481 97.6179 209.617V85.5544H139.618V209.616C146.888 213.347 153.032 218.946 157.421 225.838C161.809 232.73 164.282 240.667 164.586 248.832C164.89 256.998 163.014 265.096 159.15 272.296C155.286 279.495 149.574 285.536 142.602 289.796C135.63 294.056 127.648 296.382 119.479 296.535C111.31 296.688 103.247 294.662 96.1202 290.666C88.9933 286.67 83.0595 280.848 78.9288 273.798C74.7982 266.748 72.6199 258.725 72.6179 250.554Z"
                            fill="white" />
                        <defs>
                            <filter id="filter30_f" x="2" y="65.5825" width="130" height="130"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="1" result="effect1_foregroundBlur" />
                            </filter>
                            <filter id="filter30_f" x="0.122314" y="59.2585" width="104.381" height="87.9562"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur" />
                            </filter>
                            <filter id="filter2_d" x="36.7441" y="0" width="180.001" height="341.351"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dx="10" dy="2" />
                                <feGaussianBlur stdDeviation="15" />
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0 0.501961 0 0 0 0.302 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear" x1="161.625" y1="141.948" x2="43.5768" y2="169.912"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="1" stop-color="white" stop-opacity="0.596" />
                                <stop offset="1" stop-color="#F7F7F7" stop-opacity="0.204" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="mt-2 mb-0 font-weight-bold" style="color: white">Referral Program</p>
                    <span class="text-xs mb-2" style="color: white">Residents Get paid for refering people</span>
                    <div class="d-flex align-items-center justify-content-between mt-4">
                        <a href="/promo/referral" class="btn bg-white btn-sm mb-0">Settings</a>
                    </div>
                </div>
            </div>
        </div>
        @foreach (App\Models\Promo::all() as $promo)
            <div class="col-lg-2 col-sm-6 mt-md-0 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="/promo/change_active_status" method="POST">
                            @csrf
                            <input type="hidden" name="promo_code" value="{{ $promo->promo_code }}">
                            <div class="d-flex mb-3">
                                <p class="mb-0" style="">{{ $promo->active ? 'Active' : 'Off' }}</p>
                                <div class="form-check form-switch ms-auto">
                                    {{-- <input class="form-check-input" checked type="checkbox" id="flexSwitchCheckTemperature"> --}}
                                    <input name="active" class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckHumidity" onchange="this.form.submit()"
                                            {{ $promo->active ? 'checked' : '' }}>
                                </div>
                            </div>
                            {{-- <div class="d-flex mb-3">

                                <p class="mb-0">
                                    @if ($promo->promo_code)
                                        Active
                                    @else
                                        Off
                                    @endif

                                </p>
                                <div>

                                    <div class="form-check form-switch ms-auto">
                                        <input name="active" class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckHumidity" onchange="this.form.submit()"
                                            {{ $promo->active ? 'checked' : '' }}>
                                    </div>

                                </div>
                            </div> --}}
                        </form>
                        <div class="text-center">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-md ">
                                @if ($promo->promo_type == 'special')
                                    <img src="{{ $promo->thumbnail ?? asset('assets/img/special-offer.jfif') }}" alt="xd_logo">
                                @else
                                    <img src="{{ $promo->thumbnail ?? asset('assets/img/regular.png') }}" alt="xd_logo">
                                @endif

                            </div>
                        </div>


                        <p class="mt-4 mb-0 font-weight-bold text-sm">#{{ $promo->promo_code }}</p>
                        <span
                            class="text-xs">{{ function_that_shortens_text_but_doesnt_cutoff_words($promo->description, 35) }}...</span>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <a href="/edit-promo/{{ $promo->promo_code }}" class="btn bg-gradient-primary btn-sm mb-0">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-lg-2 col-sm-6 mt-lg-0 mt-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="/new-promo">
                        <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                        <h5 class="text-secondary"> New Promo </h5>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <script>
        // Limit user from selecting more than one amenities
        $(document).ready(function() {

            function checkKey() {
                var clean = this.value.replace(/[^0-9,]/g, "")
                    .replace(/(,.?),(.,)?/, "$1");
                // don't move cursor to end if no change
                if (clean !== this.value) this.value = clean;
            }

            // demo
            document.querySelector('#price').oninput = checkKey

            // $("#price").oninput = checkValue;
            // $("#updateProduct").click(function() {
            //     alert('ghhgjbj')
            //     // $("#updateProductModel").modal("show")
            // });

            $("#updateProduct").on('click', function() {
                alert('ghhgjbj')
                // $("#updateProductModel").modal("show")
            });

            $('#bed-space').DataTable({
                "paging": true,
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                        "previous": "‹",
                        "first": "«",
                        "next": "›",
                        "last": "»",
                    }
                },
                "retrieve": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": false,
                "buttons": {
                    "buttons": ["csv", "excel", "pdf", "print"],
                    "dom": {
                        "container": {
                            "tag": "div",
                            "className": "text-end align-items-right"
                        },
                        "collection": {
                            "tag": "div",
                            "className": ""
                        },
                        "button": {
                            "tag": "button",
                            "className": "btn btn-sm bg-gradient-primary",
                            "active": "active",
                            "disabled": "disabled"
                        },

                    }
                },
                "info": false,


            }).buttons().container().appendTo('#bed-space-data');

        });
    </script>
@endsection