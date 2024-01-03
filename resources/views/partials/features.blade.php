<!-- Feature section -->
<div id="features" class="mx-auto mt-32 max-w-7xl px-6 sm:mt-32 lg:px-8 snap-center">
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-base font-semibold leading-7 text-indigo-400">
            {{ __('welcome.features.title') }}
        </h2>
        <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">
            {{ __('welcome.features.description') }}
        </p>
        <p class="mt-6 text-lg leading-8 text-gray-300">
            {{ __('welcome.features.detail') }}
        </p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-20 lg:max-w-none">
        <dl class="grid xs:grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-16 lg:max-w-none">
            <div class="flex flex-col">
                <dt class="text-base font-semibold leading-7 text-white">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                        </svg>

                    </div>
                    {{ __('welcome.features.zion_halls.title') }}
                </dt>
                <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                    <p class="flex-auto">
                        {{ __('welcome.features.zion_halls.description') }}
                    </p>
                </dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-base font-semibold leading-7 text-white">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" />
                        </svg>

                    </div>
                    {{ __('welcome.features.content_language.title') }}
                </dt>
                <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                    <p class="flex-auto">
                        {{ __('welcome.features.content_language.description') }}
                    </p>
                </dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-base font-semibold leading-7 text-white">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>

                    </div>
                    {{ __('welcome.features.battle_rooms.title') }}
                </dt>
                <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                    <p class="flex-auto">
                        {{ __('welcome.features.battle_rooms.description') }}
                    </p>
                </dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-base font-semibold leading-7 text-white">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>

                    </div>
                    {{ __('welcome.features.connections.title') }}
                </dt>
                <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                    <p class="flex-auto">
                        {{ __('welcome.features.connections.description') }}
                    </p>
                </dd>
            </div>
            <div class="flex flex-col">
                <dt class="text-base font-semibold leading-7 text-white">
                    <div class="mb-6 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-500">
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                        </svg>

                    </div>
                    {{ __('welcome.features.level_up.title') }}
                </dt>
                <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-300">
                    <p class="flex-auto">
                        {{ __('welcome.features.level_up.description') }}
                    </p>
                </dd>
            </div>
        </dl>
    </div>
</div>
