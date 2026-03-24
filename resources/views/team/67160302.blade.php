<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $student_id }} - Profile</title>
    @vite(['resources/css/app.css'])

    @php
        $nickname = 'เวียร์';
        $fullName = 'รัฐรวี ละออง';
        $position = 'Developer Engineer';
        $phone = '092-706-9938';
        $email = '67160302@go.buu.ac.th';
@endphp

</head>
<body>
    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden md:max-w-3xl my-10 font-sans">
    <div class="md:flex items-center">
        <div class="md:shrink-0 p-6 md:p-10 flex flex-col items-center">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-100 to-indigo-50 rounded-full blur opacity-50 group-hover:opacity-100 transition duration-300"></div>

                <img class="relative h-28 w-28 md:h-36 md:w-36 rounded-full object-cover border-4 border-white shadow-md ring-2 ring-slate-100/50"
                     src="{{ $profileImageUrl ?? 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}"
                     alt="{{ $fullName ?? 'Profile Picture' }}">

                <span class="absolute bottom-1 right-1 block h-5 w-5 rounded-full ring-2 ring-white bg-green-400" title="Online"></span>
            </div>

            <span class="mt-4 px-4 py-1.5 text-xs font-semibold text-indigo-700 bg-indigo-50 rounded-full">
                #{{ $nickname ?? 'ชื่อเล่น' }}
            </span>
        </div>

        <div class="p-8 w-full md:pl-0">
            <div class="flex items-center justify-between">
                <div>
                    <div class="uppercase tracking-widest text-xs text-indigo-500 font-bold">Profile Info</div>
                    <h1 class="block mt-1.5 text-3xl leading-tight font-extrabold text-slate-900 tracking-tight">
                        {{ $fullName ?? 'ชื่อ-นามสกุล' }}
                    </h1>
                </div>
            </div>

            <p class="mt-2.5 text-lg text-slate-600 font-medium">
                {{ $position ?? 'Software Engineer / Designer' }}
            </p>

            <div class="mt-8 border-t border-slate-100 pt-8">
                <h2 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Contact Details</h2>

                <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center text-slate-700 p-3 bg-slate-50/50 rounded-xl hover:bg-indigo-50 hover:text-indigo-700 transition-colors border border-slate-100">
                        <svg class="w-5 h-5 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-sm font-medium">{{ $phone ?? '08x-xxx-xxxx' }}</span>
                    </div>

                    <div class="flex items-center text-slate-700 p-3 bg-slate-50/50 rounded-xl hover:bg-indigo-50 hover:text-indigo-700 transition-colors border border-slate-100">
                        <svg class="w-5 h-5 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm font-medium">{{ $email ?? 'hello@example.com' }}</span>
                    </div>
                </div>
            </div>

            {{-- <div class="mt-10 flex gap-3">
                <button class="flex-1 bg-slate-900 text-white py-3 px-5 rounded-xl font-semibold hover:bg-slate-800 transition-all active:scale-[0.98]">
                    Send Message
                </button>
                <button class="flex-1 bg-white text-slate-700 py-3 px-5 rounded-xl font-semibold hover:bg-slate-100 border border-slate-200 transition-all active:scale-[0.98]">
                    Download CV
                </button>
            </div> --}}
        </div>
    </div>
</div>
</body>
</html>
