<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            height: auto;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="h-full">

<section class="h-full py-1 bg-blueGray-50 flex justify-center items-center">
    <div class="w-full xl:w-full px-1"> 
        <div class="relative flex flex-col min-w-0 break-words bg-transparent w-full mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-lg text-blueGray-700">Activity Logs</h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <span class="text-lg text-indigo-500 font-semibold uppercase mr-1 mb-1">Swipe or scroll to view more</span>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <table class="items-center bg-transparent w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="px-8 bg-teal-100 text-teal-800 align-middle border border-solid border-teal-200 py-4 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Timestamp
                            </th>
                            <th class="px-8 bg-blue-100 text-blue-800 align-middle border border-solid border-blue-200 py-4 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Role
                            </th>
                            <th class="px-8 bg-purple-100 text-purple-800 align-middle border border-solid border-purple-200 py-4 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Email
                            </th>
                            <th class="px-8 bg-green-100 text-green-800 align-middle border border-solid border-green-200 py-4 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Activity Details
                            </th>
                            <th class="px-8 bg-orange-100 text-orange-800 align-middle border border-solid border-orange-200 py-4 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                IP Address
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        {!! app(\App\Http\Controllers\ActivityLogsController::class)->showAct() !!}
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>

</body>


</html>
