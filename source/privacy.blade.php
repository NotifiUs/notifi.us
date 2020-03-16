@extends('_layouts.master')
@section('title', 'Privacy Policy')
@push('meta')
    @include('_layouts.meta')
@endpush
@section('body')

<!--
<img class="mt-6 mx-auto max-w-xs" title="Level up your call center" alt="NotifiUs, LLC" src="/assets/images/notifius.png">
-->
<h5 class="uppercase my-6 text-3xl text-indigo-700 font-black mx-auto text-center">Privacy Policy</h5>

<div class="container mx-auto max-w-3xl px-4">
    <p class="my-3">This website is a product of <a class="font-semibold hover:text-indigo-800" href="https://notifi.us">NotifiUs, LLC</a>.
        This privacy policy will explain how our organization uses the personal data we collect from you when you use our website.</p>
    <h2 class="font-semibold text-xl">Topics</h2>
    <ul class="list-disc list-inside px-4 my-3">
        <li><a class="font-semibold hover:text-indigo-800" href="#what-data-do-we-collect">What data do we collect?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-do-we-collect-your-data">How do we collect your data?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-will-we-use-your-data">How will we use your data?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-do-we-store-your-data">How do we store your data?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#newsletter-marketing">Newsletter Marketing</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#what-are-your-data-protection-rights">What are your data protection rights?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#what-are-cookies">What are cookies?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-do-we-use-cookies">How do we use cookies?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#what-types-of-cookies-do-we-use">What types of cookies do we use?</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-to-manage-your-cookies">How to manage your cookies</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#privacy-policies-of-other-websites">Privacy policies of other websites</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#changes-to-our-privacy-policy">Changes to our privacy policy</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-to-contact-us">How to contact us</a></li>
        <li><a class="font-semibold hover:text-indigo-800" href="#how-to-contact-the-appropriate-authorities">How to contact the appropriate authorities</a></li>
    </ul>
    <p><a name="what-data-do-we-collect"></a></p>
    <h3 class="font-bold text-lg">What data do we collect?</h3>
    <p class="my-3"><strong class="font-semibold">NotifiUs, LLC</strong> collects the following data:</p>
    <h5 class="my-3 font-semibold text-md">Personal identification information</h5>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Name</li>
        <li>Email address</li>
        <li>Gravatar photo</li>
        <li>IP address</li>
        <li>Shipping address (including City, State, Zip)</li>
    </ul>
    <h5 class="my-3 font-semibold text-md">Security information</h5>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Two-Factor Authy ID</li>
        <li>Country Code and Phone Number</li>
    </ul>
    <h5 class="my-3 font-semibold text-md">Billing information</h5>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Last 4 of credit card</li>
        <li>Credit card billing address</li>
        <li>VAT / Extra billing information</li>
    </ul>
    <p><a name="how-do-we-collect-your-data"></a></p>
    <h3 class="font-bold text-lg">How do we collect your data?</h3>
    <p>You directly provide <strong class="font-semibold">NotifiUs, LLC</strong> with most of the data we collect. We collect data and process data under the following scenarios:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Your name, email address, and Gravatar photo are collected when you register for a free or paid plan.</li>
        <li>Your email is collected when you voluntarily complete a customer survey, contact form, or provide feedback via email.</li>
        <li>Your name and email is collected when you opt-in to our newsletter.</li>
        <li>Your billing information is collected when paying for any product or services.</li>
        <li>Your country code and phone number are collected when you opt-in to two-factor authentication.</li>
        <li>Your ip address and search terms are collected when you type in our search input</li>
        <li>Your address is collected when you opt into receiving stickers or giveaways.</li>
    </ul>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> may also receive your data indirectly from the following sources:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li><a class="font-semibold hover:text-indigo-800" href="https://stripe.com/privacy">Stripe</a> - Our PCI-compliant payment processor handles all payment transactions</li>
        <li><a class="font-semibold hover:text-indigo-800" href="https://automattic.com/privacy/">Gravatar</a> - If you have a Gravatar account tied to your email, we display your default image.</li>
        <li><a class="font-semibold hover:text-indigo-800" href="https://analytics.google.com">Google Analytics</a> - We collect anonymous usage data through Google Analytics</li>
        <li><a class="font-semibold hover:text-indigo-800" href="https://algolia.com">Algolia</a> - We use Algolia for searching our website</li>
        <li><a class="font-semibold hover:text-indigo-800" href="https://mailchimp.com">Mailchimp</a> - We use Mailchimp to manage our newsletter</li>
        <li><a class="font-semibold hover:text-indigo-800" href="https://netlify.com">Netlify</a> - We use Netlify to host our website and contact forms</li>
    </ul>
    <p><a name="how-will-we-use-your-data"></a></p>
    <h3 class="font-bold text-lg">How will we use your data?</h3>
    <p class="my-3"><strong class="font-semibold">NotifiUs, LLC</strong> collects your data so that we can:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Enable login functionality on our website</li>
        <li>Process your order(s) and manage your account.</li>
        <li>Send you a newsletter (if you opt-in)</li>
        <li>Enable multi-factor authentication (if you opt-in)</li>
        <li>View site activity and usage to improve layout and features</li>
        <li>Search content and return results</li>
        <li>Physically mail you stickers and giveaways (if you opt-in)</li>
    </ul>
    <p class="my-3">We do not currently share any data with 3rd parties for any other purpose other than what is listed above.</p>
    <p><a name="how-do-we-store-your-data"></a></p>
    <h3 class="my-3 font-bold text-lg">How do we store your data?</h3>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> securely stores your data in a password protected and firewalled database server. </p>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> will keep your personal, billing, and security information until you close your account. When your account is closed, we remove your information immediately.</p>
    <p>Please <a href="mailto:support@notifi.us">email us to close your account.</a> You can cancel your subscription at any time through your website login.</p>
    <p><a name="newsletter"></a></p>
    <h3 class="my-3 font-bold text-lg">Newsletter Marketing</h3>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> would like to send you news and information about products and services that we think you might like.</p>
    <p>If you have agreed to receive our newsletter, you may always opt out at a later date. You can unsubscribe using the link included in every email, or <a href="https://notifi.us10.list-manage.com/unsubscribe?u=18421887e502038f21a7daa80&id=b0d2bc6b65">by clicking here</a>.</p>
    <p>You have the right at any time to stop <strong class="font-semibold">NotifiUs, LLC</strong> from contacting you for marketing purposes or giving your data to other members of the NotifiUs, LLC Group.</p>
    <p><a name="what-are-your-data-protection-rights"></a></p>
    <h3 class="my-3 font-bold text-lg">What are your data protection rights?</h3>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li><strong class="font-semibold">The right to access</strong> – You have the right to request <strong class="font-semibold">NotifiUs, LLC</strong> for copies of your personal data. We may charge you a small fee for this service.</li>
        <li><strong class="font-semibold">The right to rectification</strong> – You have the right to request that <strong class="font-semibold">NotifiUs, LLC</strong> correct any information you believe is inaccurate. You also have the right to request <strong class="font-semibold">NotifiUs, LLC</strong> to complete the information you believe is incomplete.</li>
        <li><strong class="font-semibold">The right to erasure</strong> – You have the right to request that <strong class="font-semibold">NotifiUs, LLC</strong> erase your personal data, under certain conditions.</li>
        <li><strong class="font-semibold">The right to restrict processing</strong> – You have the right to request that <strong class="font-semibold">NotifiUs, LLC</strong> restrict the processing of your personal data, under certain conditions.</li>
        <li><strong class="font-semibold">The right to object to processing</strong> – You have the right to object to <strong class="font-semibold">NotifiUs, LLC</strong>’s processing of your personal data, under certain conditions.</li>
        <li><strong class="font-semibold">The right to data portability</strong> – You have the right to request that <strong class="font-semibold">NotifiUs, LLC</strong> transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
    </ul>
    <p>If you make a request, we have one month to respond to you.
        If you would like to exercise any of these rights, please contact us at our email: <a class="font-semibold hover:text-indigo-800" href="mailto:support@notifi.us">support@notifi.us</a></p>
    <p class="mt-3">Call us at: +1 888-966-9830</p>
    <p>Or write to us: </p>
    <pre class="px-4">PO Box 2051
Dublin, OH 43017</pre>
    <p><a name="what-are-cookies"></a></p>
    <h3 class="my-3 font-bold text-lg">What are cookies?</h3>
    <p>Cookies are text files placed on your computer to collect standard Internet log information and visitor behavior information. When you visit our websites, we may collect information from you automatically through cookies or similar technology</p>
    <p>For further information, visit <a href="http://allaboutcookies.org">allaboutcookies.org</a>.</p>
    <p><a name="how-do-we-use-cookies"></a></p>
    <h3 class="my-3 font-bold text-lg">How do we use cookies?</h3>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> uses cookies in a range of ways to improve your experience on our website, including:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li>Keeping you signed in to our web application using sessions</li>
        <li>Understanding how you use our website through Google Analytics</li>
        <li>Integrating our payment processor, Stripe</li>
        <li>Implementing security mechanisms like XSRF protection</li>
        <li>Storing your dark mode preference</li>
    </ul>
    <p><a name="what-types-of-cookies-do-we-use"></a></p>
    <h3 class="my-3 font-bold text-lg">What types of cookies do we use?</h3>
    <p>There are a number of different types of cookies, however, our website uses:</p>
    <ul class="my-3 list-disc list-inside px-4">
        <li><strong class="font-semibold">Functionality</strong> – <strong class="font-semibold">NotifiUs, LLC</strong> uses these cookies so that we recognize you on our website and remember your previously selected preferences. These could include what language you prefer and location you are in. A mix of first-party and third-party cookies are used.</li>
        <li><strong class="font-semibold">Advertising</strong> – <strong class="font-semibold">NotifiUs, LLC</strong> uses these cookies to collect information about your visit to our website, the content you viewed, the links you followed and information about your browser, device, and your IP address.</li>
    </ul>
    <p><a name="how-to-manage-your-cookies"></a></p>
    <h3 class="my-3 font-bold text-lg">How to manage your cookies</h3>
    <p>You can set your browser not to accept cookies, and the above website tells you how to remove cookies from your browser. However, in a few cases, some of our website features may not function as a result.</p>
    <p><a name="privacy-policies-of-other-websites"></a></p>
    <h3 class="my-3 font-bold text-lg">Privacy policies of other websites</h3>
    <p>The <strong class="font-semibold">NotifiUs, LLC</strong> website contains links to other websites. Our privacy policy applies only to our website, so if you click on a link to another website, you should read their privacy policy.</p>
    <p><a name="changes-to-our-privacy-policy"></a></p>
    <h3 class="my-3 font-bold text-lg">Changes to our privacy policy</h3>
    <p><strong class="font-semibold">NotifiUs, LLC</strong> keeps its privacy policy under regular review and places any updates on this web page. This privacy policy was last updated on <strong class="font-semibold">{{ $page->privacy_policy_updated_at }}</strong></p>
    <p><a name="how-to-contact-us"></a></p>
    <h3 class="my-3 font-bold text-lg">How to contact us</h3>
    <p>If you have any questions about <strong class="font-semibold">NotifiUs, LLC</strong>’s privacy policy, the data we hold on you, or you would like to exercise one of your data protection rights, please do not hesitate to contact us.</p>
    <p class="block my-3">Email us at: <a title="support@notifi.us" href="mailto:support@notifi.us" class="font-semibold hover:text-indigo-800">support@notifi.us</a></p>
    <p>Call us: +1 888-966-9830</p>
    <p>Or write to us at: </p>
    <pre class="px-4">PO Box 2051
Dublin, OH 43017</pre>
    <p><a name="how-to-contact-the-appropriate-authority"></a></p>
    <h3 class="my-3 font-bold text-lg">How to contact the appropriate authority</h3>
    <p>Should you wish to report a complaint or if you feel that <strong class="font-semibold">NotifiUs, LLC</strong> has not addressed your concern in a satisfactory manner, you may contact the Information Commissioner’s Office.</p>
    <p><a class="font-semibold hover:text-indigo-800" href="https://ico.org.uk/make-a-complaint/">https://ico.org.uk/make-a-complaint/</a></p>
</div>
@endsection