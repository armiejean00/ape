<x-layout :cssPaths="$cssPaths" :title="$title">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    <style>
        .left .cover img {
            height: 100px;
            border-radius: 50px;
            display: block;
            margin: 0 auto;

        }

        .cover {
            /* background-color: #3a425f; */
            background-color: transparent;
            background-position: center;
            background-size: cover;
            height: 150px;

        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;

        }



        /* * {
        border:1px solid red;
    } */
    </style>


    <style>
        input[type='checkbox'] {

            width: 20px;
            height: 20px;
            background: white;
            border-radius: 5px;
            border: 2px solid #555;
            margin-left: 5px;
            margin-right: 10px
        }

        input[type='checkbox']:checked {
            background: rgb(19, 107, 49);
        }

        .toggle-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .toggle-button:focus {
            outline: none;
        }

        .toggle-button:hover {
            background-color: #0056b3;
        }

        .show-form {
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="password"] {
            width: 30%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .error-message {
            color: red;
        }

        button[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 5px 8px;
            border-radius: 5px;
            cursor: pointer;

        }

        button[type="submit"]:hover {
            background-color: #218838;
        }
    </style>



    <section id="sidebar" class="hide">
        <span class="brand opacity-0">

        </span>
        <ul class="side-menu top">
            <li>

            </li>

            <li>
                <a href="/dashboard">
                    <?php if (auth()->user()->role == 'user'): ?>
                    <i class='bx bxs-home bx-sm'></i>
                    <span class="text">Home</span>
                    <?php else: ?>
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="text">Dashboard</span>
                    <?php endif; ?>
                </a>
            </li>
  @unless (auth()->user()->role == 'user' || (auth()->user()->role == 'office_manager'))                <li>
                    <a href="/bookings">
                        <i class='bx bxs-book-alt bx-sm'></i>
                        <span class="text">Booking</span>
                    </a>
                </li>
            @endunless
            <li>
                <a href="/office_map">
                    <i class='bx bxs-map bx-sm'></i>
                    <span class="text">Office Map</span>
                </a>
            </li>
            @unless (auth()->user()->role == 'user' || auth()->user()->role == 'office_manager')
                <li>
                    <a href="/users">
                        <i class='bx bxs-group bx-sm'></i>
                        <span class="text">Manage Users</span>
                    </a>
                </li>
            @endunless

            <li>
                <a href="/desks/available">
                    @if (auth()->user()->role == 'user')
                        <i class='bx bxs-book bx-sm'></i>
                        <span class="text">Booking</span>
                    @else
                        <i class='bx bx-desktop bx-sm'></i>
                        <span class="text">Manage Desks</span>
                    @endif
                </a>
            </li>
            {{-- <li>
                <a href="/roles">
                    <i class='bx bx-user-pin bx-sm'></i>
                    <span class="text">Manage Roles</span>
                </a>
            </li> --}}
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/faqs">
                    <i class='bx bx-question-mark bx-sm'></i>
                    <span class="text">FAQs</span>
                </a>
            </li>
            <li>
                <a href="/guide">
                    <i class='bx bxs-component bx-sm'></i>
                    <span class="text">User Guide</span>
                </a>
            </li>
            <li>
                <a href="/feedback">
                    <i class='bx bxs-message'></i>
                    <span class="text">Feedback</span>
                </a>
            </li>
            <li>
                <form method="POST" action="/logout" style="display: block">
                    @csrf
                    <button type="submit" class="logout">
                        <i class='bx bxs-log-out-circle bx-sm'></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav style="background-color:#dfe1e69c">
            <i class='bx bx-menu bx-sm'></i>
            <h1 class="font-bold text-md text-congressBlue lg:text-xl flex">
                <img class="inline-block h-7 pb-2 lg:h-9 lg:pb-3" src="{{ asset('images/ahs-ape.svg') }}"
                    alt="A">pexHubSpot
            </h1>

            <form action="#">
                <div class="form-input">

                </div>
            </form>


        </nav>
    <section >
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0" style="margin-top:50px">
    
      <div class="w-full p-6  rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
          <p style="font-size:20px;font-weight:100px">
              Change Password
          </p>
       

            <form id="password-form" method="POST" action="{{ route('profile.updatePassword') }}" class="mt-4 space-y-4 lg:mt-5 md:space-y-5">
                    @csrf
                      @if (session('password_success'))
                    <div>{{ session('password_success') }}</div>
                @endif

                    <div class="form-group" style="width:1300px">
                        <label for="old_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Old Password</label>
                        <input id="old_password" type="password" name="old_password" required
                            autocomplete="current-password" style="color:black" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        @error('old_password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="width:1300px">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            style="color:black" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" style="width:1300px">
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm New Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            autocomplete="new-password" style="color:black" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="height:40px">Update Password</button>
                </form>  
      </div>
  </div>
</section>

    <script src="{{ asset('js/booking.js') }}"></script>


  
</x-layout>

