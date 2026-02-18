<x-mail::message>
# New Contact Form Submission

A visitor has submitted a message through your portfolio contact form.

**Name:** {{ $name }}

**Email:** {{ $email }}

**Subject:** {{ $subject }}

---

## Message:

{{ $userMessage }}

---

<x-mail::button url="mailto:{{ $email }}">Reply to {{ $name }}</x-mail::button>

Thanks,
Your Portfolio
</x-mail::message>
