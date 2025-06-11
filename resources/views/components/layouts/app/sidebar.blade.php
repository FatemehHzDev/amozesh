<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Platform')" class="grid">
                    <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('داشبورد') }}</flux:navlist.item>
                    @if(Auth()->user()->hasrole('Super-Admin'))

                        <flux:navlist.item icon="home" :href="route('organ')" :current="request()->routeIs('organ')" wire:navigate>{{ __('ثبت موسسات') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('user_1')" :current="request()->routeIs('user_1')" wire:navigate>{{ __('ثبت کاربران') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('active')" :current="request()->routeIs('active')" wire:navigate>{{ __('غیر فعال کردن_فعال کردن کاربران') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('roles')" :current="request()->routeIs('roles')" wire:navigate>{{ __('ثبت نقش') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('courses')" :current="request()->routeIs('courses')" wire:navigate>{{ __('ثبت رشته ها') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('room')" :current="request()->routeIs('room')" wire:navigate>{{ __(' ثبت کلاس ها ') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('program')" :current="request()->routeIs('program')" wire:navigate>{{ __('ثبت دوره ها') }}</flux:navlist.item>
{{--                        <flux:navlist.item icon="home" :href="route('students')" :current="request()->routeIs('students')" wire:navigate>{{ __('ثبت شماره همراه') }}</flux:navlist.item>--}}
                        <flux:navlist.item icon="home" :href="route('question')" :current="request()->routeIs('question')" wire:navigate>{{ __('ثبت سوالات') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('exam')" :current="request()->routeIs('exam')" wire:navigate>{{ __('ثبت آزمون') }}</flux:navlist.item>

                    @endif
                    @if(Auth()->user()->hasrole('admin'))
                       <flux:navlist.item icon="home" :href="route('room')" :current="request()->routeIs('room')" wire:navigate>{{ __(' ثبت کلاس های موسسه') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('user_2')" :current="request()->routeIs('user_2')" wire:navigate>{{ __('ثبت کاربران موسسه') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('active')" :current="request()->routeIs('active')" wire:navigate>{{ __('غیر فعال کردن_فعال کردن کاربران') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('teacher')" :current="request()->routeIs('teacher')" wire:navigate>{{ __('مدیریت اساتید') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('phone')" :current="request()->routeIs('phone')" wire:navigate>{{ __('ثبت شماره همراه') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('orcourse')" :current="request()->routeIs('orcourse')" wire:navigate>{{ __('ثبت رشته های موسسه') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('program')" :current="request()->routeIs('program')" wire:navigate>{{ __('ثبت دوره های موسسه') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('education')" :current="request()->routeIs('education')" wire:navigate>{{ __('ثبت نام دانشجو ها در دوره های آموزشی') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('question')" :current="request()->routeIs('question')" wire:navigate>{{ __('ثبت سوالات') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('exam')" :current="request()->routeIs('exam')" wire:navigate>{{ __('ثبت آزمون') }}</flux:navlist.item>
                    @endif
                    @if(Auth()->user()->hasrole('teacher'))
                        <flux:navlist.item icon="home" :href="route('question')" :current="request()->routeIs('question')" wire:navigate>{{ __('ثبت سوالات') }}</flux:navlist.item>
                        <flux:navlist.item icon="home" :href="route('exam')" :current="request()->routeIs('exam')" wire:navigate>{{ __('ثبت آزمون') }}</flux:navlist.item>
                    @endif
                    @if(Auth()->user()->hasrole('student'))
{{--                        <flux:navlist.item icon="home" :href="route('dashboard ')" :current="request()->routeIs('dashboard')" wire:navigate>{{ __('مشاهده دوره ها ') }}</flux:navlist.item>--}}
                        <flux:navlist.item icon="home" :href="route('azmoon')" :current="request()->routeIs('azmoon')" wire:navigate>{{ __('مشاهده آزمون ها') }}</flux:navlist.item>
                    @endif
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist>

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{  Auth::user()->user_name}}</span>
                                    <span class="truncate text-xs">{{  Auth::user()->mobile}} </span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('تنظیمات') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('خروج') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
