<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />

                <label for="feature_image">Feature Image</label>
                <input type="text" id="feature_image" name="feature_image" value="">
                <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>

                <a href="{{route('elfinder.index')}}">ddddd</a>
            </div>
        </div>
    </div>

</x-app-layout>
