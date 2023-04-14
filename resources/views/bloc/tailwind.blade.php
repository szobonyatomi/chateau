<section type='tailwind'>
    <div class="min-h-screen bg-slate-50 dark:bg-black dark:text-white">
        <header class="sticky top-0 z-10 text-white bg-teal-700">
            <section class="flex items-center justify-between max-w-4xl p-4 mx-auto">
                <h1 class="text-3xl font-medium">
                    <a href="#hero">🚀 Acme Rockets</a>
                </h1>
                <div>
                    <button id="hamburger-button" class="relative w-8 h-8 text-3xl font-medium cursor-pointer md:hidden">
                        {{-- &#9776 --}}
                        <div
                            class="absolute w-8 h-[2px] bg-white rounded top-4 -mt-0.5 before:content-[''] before:bg-white before:w-8 before:h-[2px] before:rounded before:absolute before:transition-all before:duration-500 before:-translate-x-4 before:-translate-y-2 after:content-[''] after:bg-white after:w-8 after:h-[2px] after:rounded after:absolute after:transition-all after:duration-500 after:-translate-x-4 after:translate-y-2">
                        </div>
                    </button>
                    <nav class="hidden space-x-8 text-xl md:block" aria-label="main">
                        <a href="#rockets" class="hover:opacity-90">Our Rockets</a>
                        <a href="#testimonials" class="hover:opacity-90">Testimonials</a>
                        <a href="#contact" class="hover:opacity-90">Contact Us</a>
                    </nav>
                </div>
            </section>
            <section id="mobile-menu"
                class="absolute flex-col justify-center hidden w-full text-5xl origin-top bg-black top-68 animate-open-menu text-[#acd123]">
                {{-- <button class="self-end px-6 text-6xl">&times;</button> --}}
                <nav class="flex flex-col items-center min-h-screen py-8" aria-label="mobile">
                    <a href="#hero" class="py-6 hover:opacity-90">Home</a>
                    <a href="#rockets" class="py-6 hover:opacity-90">Our Rockets</a>
                    <a href="#testimonials" class="py-6 hover:opacity-90">Testimonials</a>
                    <a href="#contact" class="py-6 hover:opacity-90">Contact Us</a>
                    <a href="#footer" class="py-6 hover:opacity-90">Legal</a>
                </nav>
            </section>
        </header>
        <div class="max-w-4xl mx-auto main-block">
            <section id="hero"
                class="flex flex-col-reverse items-center justify-center min-h-[calc(100vh-68px)] gap-8 p-6 mb-12 sm:flex-row scroll-mt-40">
                <article class="sm:w-1/2">
                    <h2
                        class="max-w-md text-4xl font-bold text-center capitalize sm:text-5xl sm:text-left text-slate-900 dark:text-white">
                        We Boldy Go <span class="text-indigo-700 dark:text-indigo-300">Where No Rocket</span> has gone
                        before...
                    </h2>
                    <p class="mt-4 text-2xl text-center max-w md sm:text-left text-slate-700 dark:text-slate-400">
                        We're building for the next century today. From to Moon to Mars, Jupiter and beyond...
                    </p>
                    <p class="mt-4 text-2xl text-center max-w md sm:text-left text-slate-700 dark:text-slate-400">
                        Think Acme Rockets.
                    </p>
                </article>
                <img class="w-1/2" src="{!! get_template_directory_uri() !!}/assets/images/rocketdab.png" alt="Rocker Dab">
            </section>
            <hr class="w-1/2 mx-auto bg-black dark:bg-white">
            <section id="rockets" class="min-h-screen p-6 my-12 scroll-mt-20">
                <h2 class="mb-6 text-4xl font-bold text-center sm:text-5xl text-slate-900 dark:text-white">
                    Our Rocket
                </h2>
                <ul class="flex flex-col items-center gap-8 mx-auto my-12 list-none sm:flex-row">
                    <li
                        class="flex flex-col items-center w-2/3 px-2 py-6 bg-white border border-solid shadow-xl sm:w-5/6 border-slate-900 dark:border-gray-100 rounded-3xl dark:bg-black">
                        <img class="w-1/2 mb-6" src="{!! get_template_directory_uri() !!}/assets/images/rocketman.png"
                            alt="Rocket man">
                        <h3 class="text-3xl text-center text-slate-900 dark:text-white">
                            Explorer
                        </h3>
                        <p class="hidden mt-2 text-3xl text-center sm:block text-slate-500 dark:text-slate-400">
                            $
                        </p>
                        <p class="mt-2 text-2xl text-center sm:hidden text-slate-500 dark:text-slate-400">
                            Affordable Exploration</p>
                    </li>
                    <li
                        class="flex flex-col items-center w-2/3 px-2 py-6 bg-white border border-solid shadow-xl sm:w-5/6 border-slate-900 dark:border-gray-100 rounded-3xl dark:bg-black">
                        <img class="w-1/2 mb-6" src="{!! get_template_directory_uri() !!}/assets/images/rocketride.png"
                            alt="Adventure">
                        <h3 class="text-3xl text-center text-slate-900 dark:text-white">
                            Adventure
                        </h3>
                        <p class="hidden mt-2 text-3xl text-center sm:block text-slate-500 dark:text-slate-400">
                            $$
                        </p>
                        <p class="mt-2 text-2xl text-center sm:hidden text-slate-500 dark:text-slate-400">Best Selling
                            Rocket!!!</p>
                    </li>
                    <li
                        class="flex flex-col items-center w-2/3 px-2 py-6 bg-white border border-solid shadow-xl sm:w-5/6 border-slate-900 dark:border-gray-100 rounded-3xl dark:bg-black">
                        <img class="w-1/2 mb-6" src="{!! get_template_directory_uri() !!}/assets/images/rocketlaunch.png"
                            alt="Infinity">
                        <h3 class="text-3xl text-center text-slate-900 dark:text-white">Infinity</h3>
                        <p class="hidden mt-2 text-3xl text-center sm:block text-slate-500 dark:text-slate-400">$$$
                        </p>
                        <p class="mt-2 text-2xl text-center sm:hidden text-slate-500 dark:text-slate-400">
                            Luxury Starship</p>
                    </li>

                </ul>
            </section>
            <hr class="w-1/2 mx-auto bg-black dark:bg-white">
            <section id="testimonials" class="min-h-screen p-6 my-12 scroll-mt-20">
                <h2 class="mb-6 text-4xl font-bold text-center sm:text-5xl text-slate-900 dark:text-white">
                    Testimonial
                </h2>
                <figure class="my-12">
                    <blockquote class="relative py-12 pr-8 bg-teal-600 dark:bg-black pl-14 rounded-3xl">
                        <p
                            class="mt-2 text-2xl text-left text-white sm:text-3xl dark:text-slate-400 before:content-['\201c'] before:font-serif before:absolute before:top-0 before:left-0 before:text-9xl before:text-white before:opacity-25 before:transform before:translate-x-2 before:translate-y-2 after:content-['\201D'] after:font-serif after:absolute after:-bottom-20 after:right-0 after:text-9xl after:text-white after:opacity-25 after:transform after:-translate-x-2 after:-translate-y-2">
                            Acme
                            has always been there
                            for me. Their Explorer rocket arrived in a wooden crate as expected.
                            Life-long customer! A++ shopping experience.
                        </p>

                    </blockquote>
                    <figcaption class="mt-2 text-xl italic text-right sm:text-2xl text-slate-500 dark:text-slate400">
                        &#8212; While E. Coyote, Genius
                    </figcaption>
                </figure>
                <figure class="my-12">
                    <blockquote class="relative py-12 pr-8 bg-teal-600 dark:bg-black pl-14 rounded-3xl">
                        <p
                            class="mt-2 text-2xl text-left text-white sm:text-3xl dark:text-slate-400 before:content-['\201c'] before:font-serif before:absolute before:top-0 before:left-0 before:text-9xl before:text-white before:opacity-25 before:transform before:translate-x-2 before:translate-y-2 after:content-['\201D'] after:font-serif after:absolute after:-bottom-20 after:right-0 after:text-9xl after:text-white after:opacity-25 after:transform after:-translate-x-2 after:-translate-y-2">
                            The Acme Adventurer Rocket has thwarted my Illudium Q-36 Explosive Space Modulator on
                            several
                            occassions. <span class="italic">This makes me very, very angry!</span> Nevertheless, K-9
                            and I have awarded Acme the
                            Martian contract for space exploration rockets based on Acme's quality and sturdy designs.
                        </p>

                    </blockquote>
                    <figcaption class="mt-2 text-xl italic text-right sm:text-2xl text-slate-500 dark:text-slate400">
                        &#8212; Marvin The Martian &amp; K-9
                    </figcaption>
                </figure>
                <figure class="my-12">
                    <blockquote class="relative py-12 pr-8 bg-teal-600 dark:bg-black pl-14 rounded-3xl">
                        <p
                            class="mt-2 text-2xl text-left text-white sm:text-3xl dark:text-slate-400 before:content-['\201c'] before:font-serif before:absolute before:top-0 before:left-0 before:text-9xl before:text-white before:opacity-25 before:transform before:translate-x-2 before:translate-y-2 after:content-['\201D'] after:font-serif after:absolute after:-bottom-20 after:right-0 after:text-9xl after:text-white after:opacity-25 after:transform after:-translate-x-2 after:-translate-y-2">
                            I knew I not only wanted &#8212; <span class="italic">I needed</span> &#8212; Acme's
                            Infinity
                            Rocket for my mission in space. Acme delivered in one day! Nothing says <q
                                class="italic">Take
                                me
                                to your leader</q> like Acme's Infinity Rocket! 💯
                        </p>

                    </blockquote>
                    <figcaption class="mt-2 text-xl italic text-right sm:text-2xl text-slate-500 dark:text-slate400">
                        &#8212; Buzz Lightyear
                    </figcaption>
                </figure>
            </section>
            <hr class="w-1/2 mx-auto bg-black dark:bg-white">
            <section id="contact" class="min-h-screen p-6 my-12 scroll-mt-16">
                <h2 class="mb-6 text-4xl font-bold text-center sm:text-5xl text-slate-900 dark:text-white">
                    Contact Us
                </h2>
                <form action="" class="flex flex-col max-w-4xl gap-4 mx-auto text-2xl sm:text-3xl items-left">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required minlength="3" maxlength="60"
                        placeholder="Your subject"
                        class="w-full p-3 text-2xl text-black border border-solid sm:text-3xl rounded-xl border-slate-900 dark:border-none">
                    <label for="subject">Messege:</label>
                    <textarea name="messege" id="messege" cols="30" rows="10" placeholder="Your messege" required
                        class="w-full p-3 text-2xl text-black border border-solid sm:text-3xl rounded-xl border-slate-900 dark:border-none"></textarea>
                    <button
                        class="w-48 p-3 bg-teal-700 border border-solid rounded-full hover:bg-teal-600 active:bg-teal-500 border-slate-900 dark:border-none">Submit</button>
                </form>
            </section>
        </div>
        <footer id="footer" class="text-xl text-white bg-teal-700">
            <section class="flex flex-col max-w-4xl p-4 mx-auto sm:flex-row sm:justify-between">
                <address class="text-center sm:text-left">
                    <h2>Acme Rocket-Powered Products, Inc.</h2>
                    555 Astro Way<br>
                    Fairfield, New Jersey 12345-5555<br>
                    Email: <a href="mailto:inquiries@acmerockets.com">Inquires@AcmeRockets.com</a><br>
                    Phone: <a href="tel:+15555555555">(555) 555-5555</a>
                </address>
                <nav class="flex-col hidden gap-2 md:flex" aria-label="footer">
                    <a href="#rockets" class="hover:opacity-90">Our Rockets</a>
                    <a href="#testimonials" class="hover:opacity-90">Testimonials</a>
                    <a href="#contact" class="hover:opacity-90">Contact Us</a>
                </nav>
                <div class="flex justify-center gap-4 mt-6 sm:justify-normal sm:gap-2 sm:flex-col sm:mt-0">
                    <p class="text-right">Copyright &copy; <span id="year">2023</span></p>
                    <p class="text-right">All rights reserved</p>
                </div>
            </section>
        </footer>
    </div>


</section>
