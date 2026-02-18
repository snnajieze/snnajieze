<div class="w-full max-w-2xl mx-auto">
    @if ($submitted)
        <div class="mb-8 p-6 bg-green-100 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-lg text-center">
            <h3 class="text-lg font-bold text-green-700 dark:text-green-300 mb-2">Message Sent Successfully!</h3>
            <p class="text-green-600 dark:text-green-400 mb-4">Thank you for reaching out. I'll get back to you shortly.</p>
            <button wire:click="resetForm" class="px-4 py-2 bg-green-700 hover:bg-green-800 text-white rounded-lg transition-colors">
                Send Another Message
            </button>
        </div>
    @endif

    @if ($errorMessage)
        <div class="mb-8 p-4 bg-red-100 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-lg text-red-700 dark:text-red-300">
            {{ $errorMessage }}
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <!-- Name Field -->
        <div>
            <label for="name" class="block text-sm font-bold mb-2">Full Name</label>
            <input 
                type="text" 
                id="name" 
                wire:model="name"
                placeholder="Your name"
                class="w-full px-4 py-3 border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 rounded-lg focus:outline-none focus:border-blue-600 dark:focus:border-blue-400"
            >
            @error('name')
                <span class="text-red-600 dark:text-red-400 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-bold mb-2">Email Address</label>
            <input 
                type="email" 
                id="email" 
                wire:model="email"
                placeholder="your@email.com"
                class="w-full px-4 py-3 border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 rounded-lg focus:outline-none focus:border-blue-600 dark:focus:border-blue-400"
            >
            @error('email')
                <span class="text-red-600 dark:text-red-400 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Subject Field -->
        <div>
            <label for="subject" class="block text-sm font-bold mb-2">Subject</label>
            <input 
                type="text" 
                id="subject" 
                wire:model="subject"
                placeholder="What is this about?"
                class="w-full px-4 py-3 border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 rounded-lg focus:outline-none focus:border-blue-600 dark:focus:border-blue-400"
            >
            @error('subject')
                <span class="text-red-600 dark:text-red-400 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Message Field -->
        <div>
            <label for="message" class="block text-sm font-bold mb-2">Message</label>
            <textarea 
                id="message" 
                wire:model="userMessage"
                placeholder="Tell me about your project or inquiry..."
                rows="5"
                class="w-full px-4 py-3 border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 rounded-lg focus:outline-none focus:border-blue-600 dark:focus:border-blue-400 resize-none"
            ></textarea>
            @error('userMessage')
                <span class="text-red-600 dark:text-red-400 text-sm mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex gap-4">
            <button 
                type="submit"
                wire:loading.attr="disabled"
                class="flex-1 px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors font-bold disabled:opacity-50 disabled:cursor-not-allowed"
            >
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
</div>
