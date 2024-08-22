<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}



              {{-- <!DOCTYPE html>
              <html>
              <head>
              <title>Time Clock Attendance Hours Tracking</title>
              </head>
              <body>
              <style>
              #my-iframe {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
              }
              </style> --}}
              <iframe id='my-iframe' 
              src='https://www.timeclockfree.com/app.html?page=company&companyname=your-company-name' 
              allow='geolocation; camera'></iframe>
              {{-- </body>
              </html> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
