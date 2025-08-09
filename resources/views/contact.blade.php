@extends('layouts.app')

@section('content')


<main class="max-w-4xl mx-auto px-6 py-10">
  <h1 class="text-black text-xl font-semibold mb-2">Contact Us</h1>
  <p class="text-xs text-[#7F9DB9] mb-8 max-w-xl">
    We’re here to help! Reach out to us with any questions, feedback, or news tips.
  </p>

  <form class="space-y-6 max-w-md">
    <div>
      <label class="block text-xs font-semibold text-gray-900 mb-1" for="name">Your Name</label>
      <input class="w-full bg-[#E6EDF7] text-xs text-[#7F9DB9] rounded-md py-2 px-3" id="name" name="name" placeholder="Enter your name" type="text"/>
    </div>
    <div>
      <label class="block text-xs font-semibold text-gray-900 mb-1" for="email">Your Email</label>
      <input class="w-full bg-[#E6EDF7] text-xs text-[#7F9DB9] rounded-md py-2 px-3" id="email" name="email" placeholder="Enter your email" type="email"/>
    </div>
    <div>
      <label class="block text-xs font-semibold text-gray-900 mb-1" for="subject">Subject</label>
      <input class="w-full bg-[#E6EDF7] text-xs text-[#7F9DB9] rounded-md py-2 px-3" id="subject" name="subject" placeholder="Enter the subject" type="text"/>
    </div>
    <div>
      <label class="block text-xs font-semibold text-gray-900 mb-1" for="message">Message</label>
      <textarea class="w-full bg-[#E6EDF7] text-xs text-[#7F9DB9] rounded-md py-2 px-3 resize-none" id="message" name="message" rows="4"></textarea>
    </div>
    <button class="bg-[#2196F3] text-white text-xs font-semibold rounded px-3 py-1.5 hover:bg-[#1E88E5]" type="submit">
      Send Message
    </button>
  </form>

  <section class="mt-10 max-w-md">
    <h2 class="text-xs font-semibold text-gray-900 mb-2">Contact Information</h2>
    <p class="text-xs text-gray-700 mb-1">Email: bunutnews@email.com</p>
    <p class="text-xs text-gray-700">Phone: +62 812 3456 7890</p>
  </section>

  <section class="mt-8 max-w-4xl">
    <img alt="Map showing Bunut area" class="rounded-md w-full object-cover" src="https://storage.googleapis.com/a1aa/image/d864aeaf-7608-467f-05d8-ac0482e4bd84.jpg"/>
  </section>
</main>
@endsection
