<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as admin guard!") }}

                    @role('admin')
                        <p>This is admin user</p>
                    @endrole

                    @role('manager')
                        <p>This is manager user</p>
                    @endrole

                    @can('access-api')
                        <p>Only users who has access-api permission can see this line</p>
                    @endcan

                    @can('manage-users')
                        <p>Only users who has manage-users permission can see this line</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
