<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">


    <title>MTNIrancell | @yield('title' , 'مدیریت')</title>

    <livewire:styles/>

</head>
<body class="">

<section
         class="flex ">

{{--    <section class="main bg-gray-100" :class="openNavbar || 'active'">--}}

{{--        <header class="p-4  mb-3  shadow-md" style="background-color: #313940">--}}
{{--            <svg @click="toggleNavBar" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer text-white" fill="none"--}}
{{--                 viewBox="0 0 24 24"--}}
{{--                 stroke="currentColor" stroke-width="2">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>--}}
{{--            </svg>--}}
{{--        </header>--}}


        <section class="content py-4 px-6  h-screen">
            @yield('admin_content')
        </section>

{{--    </section>--}}

</section>


<livewire:scripts/>

<script src={{asset("js/app.js")}}></script>

<script>
    document.addEventListener('alpine:init', () => {
        console.log('this is init of alpine')

        Alpine.data('toggleSubmenu', () => ({
            open: false,
            toggle() {
                this.open = !this.open
            }
        }))
    })

    document.addEventListener('alpine:initialized', () => {
        console.log('this is initialized of alpine')

    })
</script>


@yield('script')

</body>
</html>
