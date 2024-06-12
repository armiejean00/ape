<!-- component -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet"> 
</head>
 
<style>
    * {
    font-family: 'Quicksand', sans-serif;
    }
</style>   


<body>

    <article id="the-article">

<div>
    <div class="mx-auto max-w-6xl">
        <div class="p-2 rounded">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 p-4 text-sm">

            <div class="sticky inset-x-0 top-0 left-0 py-12">
                
                    <div class="text-3xl text-green-400 mb-8">Frequently asked questions.</div>
                    <div class="mb-2">Do you have any questions ?</div>
                    <div class="mb-2 text-xs">See our FAQ for more details</div>


                    {{-- <div class="relative text-gray-600 mt-8 lg:mr-16">
                        <input 
                        x-ref="searchField"
                        x-model="search"
                        x-on:keydown.window.prevent.slash="$refs.searchField.focus()"
                        type="search" name="serch" placeholder="Search" class="bg-white w-full h-10 px-5 rounded-full text-sm focus:outline-none">
                        <button type="submit" class="focus:outline-none absolute right-0 top-0 mt-3 mr-4">
                          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                          </svg>
                        </button>
                      </div> --}}

                    </div>
                </div>
                <div class="md:w-2/3 py-12 ">
                    <div class="p-4">

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">What is hotdesking and how does it work in our system?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>Hotdesking is a flexible office arrangement where employees do not have assigned desks, but
                            instead can choose from a pool of available workstations each day. In our system, employees
                            can book a desk through our online platform or mobile app.</p>
                </div>
            </div>
            
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How do I reserve a hotdesk in our system?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>To reserve a hotdesk, employees can log into our system using their credentials and access
                            the hotdesking feature. They can view the availability of desks for a specific date and
                            time, and select a desk that suits their requirements. Once they have made a reservation,
                            the desk will be reserved under their name for the designated time slot.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Can I reserve a hotdesk in advance?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>Yes, our system allows employees to reserve hotdesks in advance. They can book a desk for a
                            future date and time, ensuring they have a workspace available when they need it. However,
                            it is important to note that reservations are subject to availability, so it is advisable to
                            book in advance to secure a desired desk.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Can I cancel my hotdesk booking?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>Yes, you can usually cancel your booking through our website's booking management system.
                            However, cancellation and modification policies may vary, so it's advisable to check our
                            website's terms and conditions or contact our customer support for assistance.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How long can I use a hotdesk?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>In our hotdesking system, employees can use a desk for the designated time slot they have
                            reserved. The time could be a few hours, half a day, or a full day, depending on their
                            preference and availability. If employees need to extend their usage beyond the reserved
                            time, they can check for availability and make an additional reservation if necessary.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Can I personalize my hotdesk?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>As hotdesking promotes flexibility and shared workspaces, personalization options may vary.
                            However, employees are generally allowed to bring personal items such as laptops, documents,
                            and small desk accessories to their chosen desk for the day. It is important to ensure that
                            personal items are removed at the end of the day to keep the desk clean and ready for the
                            next user.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Can I choose the same hotdesk every day?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>While our hotdesking system offers flexibility and the ability to choose from available
                            desks, it does not guarantee the same desk every day. The availability of desks and the
                            overall concept of hotdesking is based on a first-come, first-served basis. Employees can
                            choose any available desk each day, depending on their needs and preferences.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">How can I find an available hotdesk quickly?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>Our hotdesking system provides real-time information on desk availability through our online
                            platform or mobile app. Employees can easily view the available desks for a specific date
                            and time, and select the one that suits them best. This ensures a hassle-free and efficient
                            process in finding a suitable hotdesk quickly.</p>
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">What if I encounter issues with my hotdesk reservation?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>If employees encounter any issues related to their hotdesk reservations, such as a desk being
                            occupied despite the reservation or any technical difficulties with the system, they should
                            contact the designated support team or the office administrator for assistance. They will
                            help resolve any concerns and ensure a seamless experience with the hotdesking system.</p>
                </div>
            </div>
            
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-green-400 font-medium' : isOpen == true}">Can I collaborate with colleagues while using a hotdesk?</h4>
                    <svg 
                    :class="{'transform rotate-180' : isOpen == true}"
                    class="w-5 h-5 text-gray-500"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{isOpen == true}">
                    <p>Absolutely! Our hotdesking system is designed to promote collaboration and flexibility within
                            the office space. Employees can utilize common areas, meeting rooms, or designated
                            collaboration spaces to work together, have discussions, or share ideas. The hotdesk setup
                            allows for easy interaction and encourages a dynamic work environment.</p>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>

</article>

<div
	x-data="scrollHandler(document.getElementById('the-article'))"
	x-cloak
	aria-hidden="true"
	@scroll.window="calculateHeight(window.scrollY)"
	class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
	<div :style="`max-height:${height}%`" class="h-full bg-green-400"></div>
</div>

<div
	id="alpine-devtools"
	x-data="devtools()"
	x-show="alpines.length"
	x-init="start()">
</div>
<script>
function scrollHandler(element = null) {
	return {
		height: 0,
		element: element,
		calculateHeight(position) {
			const distanceFromTop = this.element.offsetTop
			const contentHeight = this.element.clientHeight
			const visibleContent = contentHeight - window.innerHeight
			const start = Math.max(0, position - distanceFromTop)
			const percent = (start / visibleContent) * 100;
			requestAnimationFrame(() => {
				this.height = percent;
			});
		},
		init() {
			this.element = this.element || document.body;
			this.calculateHeight(window.scrollY);
		}
	};
}

</script>
</body>