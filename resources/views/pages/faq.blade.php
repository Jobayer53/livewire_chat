<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Disting Disting Chat Support</title>
    <meta name="description"
        content="Frequently asked questions about anonymous chatting, privacy, and safety on Disting Disting.">
    <meta name="keywords" content="chat help, anonymous chat FAQ, chat app support, how to chat online">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://distingdisting.com/faq">

    <!-- Open Graph -->
    <meta property="og:title" content="FAQ - Disting Disting Chat Support">
    <meta property="og:description" content="Get answers to common questions about using Disting Disting anonymously.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://distingdisting.com/faq">
    <meta property="og:image" content="https://distingdisting.com/frontend/assets/images/social_img.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="FAQ - Disting Disting Chat">
    <meta name="twitter:description" content="Find answers to frequently asked questions about Disting Disting.">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            min-height: 100vh;
        }

        .faq-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            max-width: 900px;
            overflow: hidden;
        }

        .faq-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
        }

        .faq-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.15"/><circle cx="20" cy="80" r="0.5" fill="white" opacity="0.15"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        }

        .faq-header h1 {
            position: relative;
            z-index: 1;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .faq-header p {
            position: relative;
            z-index: 1;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .faq-content {
            padding: 2rem;
        }

        .faq-category {
            margin-bottom: 2rem;
        }

        .category-title {
            color: #2c3e50;
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #667eea;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 12px !important;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .accordion-button {
            background: #f8f9fa;
            border: none;
            padding: 1.25rem 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            font-size: 1.05rem;
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23666'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .accordion-body {
            padding: 1.5rem;
            background: white;
            color: #495057;
            line-height: 1.7;
        }

        .highlight-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
        }

        .back-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 50px;
            color: white;
            padding: 0.75rem 2rem;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .back-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .quick-links {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .quick-links h5 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .quick-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            margin-right: 1.5rem;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .quick-link:hover {
            color: #764ba2;
        }

        .emoji {
            font-size: 1.2em;
        }
    </style>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Is Disting Disting completely anonymous?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Disting Disting is completely anonymous. No email or phone verification required."
      }
    },
    {
      "@type": "Question",
      "name": "Is the chat service free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Disting Disting is completely free to use with no hidden charges."
      }
    },
    {
      "@type": "Question",
      "name": "How do I start chatting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Simply enter your age, gender, and country on the registration page and start chatting instantly."
      }
    }
  ]
}
</script>
</head>

<body>
    <div class="container-fluid">
        <div class="faq-container">
            <div class="faq-header">
                <h1><span class="emoji">💬</span> Frequently Asked Questions</h1>
                <p>Everything you need to know about our random chat platform</p>
            </div>

            <div class="faq-content">
                <div class="quick-links">
                    <h5><span class="emoji">🔗</span> Quick Navigation</h5>
                    <a href="#getting-started" class="quick-link">Getting Started</a>
                    <a href="#privacy-safety" class="quick-link">Privacy & Safety</a>
                    <a href="#features" class="quick-link">Features</a>
                    <a href="#technical" class="quick-link">Technical</a>
                    <a href="#support" class="quick-link">Support</a>
                </div>

                <!-- Getting Started Section -->
                <div class="faq-category" id="getting-started">
                    <h3 class="category-title">
                        <span class="emoji">🚀</span> Getting Started
                    </h3>
                    <div class="accordion" id="gettingStartedAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gs1">
                                    How do I start chatting?
                                </button>
                            </h2>
                            <div id="gs1" class="accordion-collapse collapse show"
                                data-bs-parent="#gettingStartedAccordion">
                                <div class="accordion-body">
                                    Starting a chat is super simple! Just visit our homepage and click the <span
                                        class="highlight-text">"Start Chatting"</span> button. You'll be instantly
                                    redirect to the chat interface. No registration required - though you can create an
                                    account if you want to customize your experience.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gs2">
                                    Do I need to register to use the chat?
                                </button>
                            </h2>
                            <div id="gs2" class="accordion-collapse collapse"
                                data-bs-parent="#gettingStartedAccordion">
                                <div class="accordion-body">
                                    <strong>No login required!</strong> However, we have a simple registration process
                                    where you provide basic information: <span class="highlight-text">name, age,
                                        gender, and country</span>. This helps us connect you with people from your
                                    region and ensures a better chat experience. Registration is quick and easy!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#gs3">
                                    How do I find someone to chat with?
                                </button>
                            </h2>
                            <div id="gs3" class="accordion-collapse collapse"
                                data-bs-parent="#gettingStartedAccordion">
                                <div class="accordion-body">
                                    After registration, you'll see a list of users from your country who are currently
                                    online. You can <span class="highlight-text">choose anyone from the list to start
                                        chatting</span> with them. The system shows users based on your location to help
                                    you connect with people nearby.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Privacy & Safety Section -->
                <div class="faq-category" id="privacy-safety">
                    <h3 class="category-title">
                        <span class="emoji">🛡️</span> Privacy & Safety
                    </h3>
                    <div class="accordion" id="privacySafetyAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ps1">
                                    Are my conversations saved or recorded?
                                </button>
                            </h2>
                            <div id="ps1" class="accordion-collapse collapse"
                                data-bs-parent="#privacySafetyAccordion">
                                <div class="accordion-body">
                                    <strong>No, your conversations are not saved!</strong> This is one of our key
                                    privacy features. All chat messages are <span class="highlight-text">automatically
                                        deleted when both users logout</span>. We don't store chat histories, and
                                    there's no way to recover conversations once they're ended.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ps2">
                                    Is my personal information safe?
                                </button>
                            </h2>
                            <div id="ps2" class="accordion-collapse collapse"
                                data-bs-parent="#privacySafetyAccordion">
                                <div class="accordion-body">
                                    Yes! We only collect basic registration information: <span
                                        class="highlight-text">name, age, gender, and country</span>. This minimal data
                                    helps us provide location-based user listings and improve your chat experience. We
                                    don't ask for sensitive information like email addresses, phone numbers, or detailed
                                    personal data.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ps3">
                                    How do I report inappropriate behavior?
                                </button>
                            </h2>
                            <div id="ps3" class="accordion-collapse collapse"
                                data-bs-parent="#privacySafetyAccordion">
                                <div class="accordion-body">
                                    If someone is being inappropriate, you can immediately <span
                                        class="highlight-text">disconnect from the chat</span> and report the user.
                                    Look for the "Report" button in the chat interface. We take all reports seriously
                                    and have measures in place to prevent abuse of our platform.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ps4">
                                    Can other users see my IP address or location?
                                </button>
                            </h2>
                            <div id="ps4" class="accordion-collapse collapse"
                                data-bs-parent="#privacySafetyAccordion">
                                <div class="accordion-body">
                                    <strong>No, absolutely not!</strong> Other users cannot see your IP address,
                                    location, or any technical information about your connection. All they can see is
                                    what you choose to share in the chat conversation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="faq-category" id="features">
                    <h3 class="category-title">
                        <span class="emoji">✨</span> Features
                    </h3>
                    <div class="accordion" id="featuresAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#f1">
                                    Can I choose who I chat with?
                                </button>
                            </h2>
                            <div id="f1" class="accordion-collapse collapse"
                                data-bs-parent="#featuresAccordion">
                                <div class="accordion-body">
                                    Our platform connects you with <span class="highlight-text">random users</span> -
                                    that's the fun of it! You can't choose specific people to chat with, but if you
                                    don't connect with someone, you can easily end the chat and start a new one to meet
                                    someone else.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#f2">
                                    Is there a time limit on conversations?
                                </button>
                            </h2>
                            <div id="f2" class="accordion-collapse collapse"
                                data-bs-parent="#featuresAccordion">
                                <div class="accordion-body">
                                    No time limits! You can chat for as long as both participants want to continue the
                                    conversation. The chat continues until one person decides to disconnect or logout.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#f3">
                                    Can I share images or files?
                                </button>
                            </h2>
                            <div id="f3" class="accordion-collapse collapse"
                                data-bs-parent="#featuresAccordion">
                                <div class="accordion-body">
                                    Currently, our platform supports <span class="highlight-text">text-based
                                        conversations only</span>. This helps maintain privacy and keeps the platform
                                    safe. You cannot share images, files, or other media through the chat.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#f4">
                                    How do I end a conversation?
                                </button>
                            </h2>
                            <div id="f4" class="accordion-collapse collapse"
                                data-bs-parent="#featuresAccordion">
                                <div class="accordion-body">
                                    You can end a conversation at any time by clicking the <span
                                        class="highlight-text">"Disconnect"</span> or <span
                                        class="highlight-text">"End Chat"</span> button. You can also simply close your
                                    browser tab or logout - remember, the conversation will be automatically deleted
                                    once both users are gone.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Technical Section -->
                <div class="faq-category" id="technical">
                    <h3 class="category-title">
                        <span class="emoji">⚙️</span> Technical
                    </h3>
                    <div class="accordion" id="technicalAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#t1">
                                    What browsers are supported?
                                </button>
                            </h2>
                            <div id="t1" class="accordion-collapse collapse"
                                data-bs-parent="#technicalAccordion">
                                <div class="accordion-body">
                                    Our chat platform works on all modern browsers including <span
                                        class="highlight-text">Chrome, Firefox, Safari, and Edge</span>. We recommend
                                    using the latest version of your browser for the best experience. The platform also
                                    works great on mobile browsers!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#t2">
                                    Why is my connection slow or messages delayed?
                                </button>
                            </h2>
                            <div id="t2" class="accordion-collapse collapse"
                                data-bs-parent="#technicalAccordion">
                                <div class="accordion-body">
                                    Message delays can be caused by your internet connection or high server load. Try
                                    refreshing the page or checking your internet connection. If problems persist, the
                                    issue might be temporary server congestion - try again in a few minutes.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#t3">
                                    Can I use this on my mobile phone?
                                </button>
                            </h2>
                            <div id="t3" class="accordion-collapse collapse"
                                data-bs-parent="#technicalAccordion">
                                <div class="accordion-body">
                                    <strong>Yes!</strong> Our chat platform is fully responsive and works great on
                                    mobile phones and tablets. Just open your mobile browser and visit our website - no
                                    app download required.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#t4">
                                    What happens if I lose my internet connection?
                                </button>
                            </h2>
                            <div id="t4" class="accordion-collapse collapse"
                                data-bs-parent="#technicalAccordion">
                                <div class="accordion-body">
                                    If you lose your internet connection, you'll be disconnected from the chat. When you
                                    reconnect, you'll need to start a new conversation - your previous chat will have
                                    been automatically deleted as per our privacy policy.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support Section -->
                <div class="faq-category" id="support">
                    <h3 class="category-title">
                        <span class="emoji">🤝</span> Support
                    </h3>
                    <div class="accordion" id="supportAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#s1">
                                    How do I contact support?
                                </button>
                            </h2>
                            <div id="s1" class="accordion-collapse collapse"
                                data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    For privacy-related questions,You can reach our support team by emailing <span
                                        class="highlight-text">distingdistingchat@gmail.com</span>. We typically
                                    respond within 24-48 hours.</span>.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#s2">
                                    Is this service free?
                                </button>
                            </h2>
                            <div id="s2" class="accordion-collapse collapse"
                                data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    <strong>Yes, our random chat platform is completely free!</strong> There are no
                                    hidden fees, premium subscriptions, or paid features. We believe in keeping online
                                    communication accessible to everyone.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#s3">
                                    Can I delete my account?
                                </button>
                            </h2>
                            <div id="s3" class="accordion-collapse collapse"
                                data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    Yes, if you created an account, you can delete it at any time from your account
                                    settings. Remember, since we don't store your chat history anyway, deleting your
                                    account just removes your username and email from our system.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#s4">
                                    My question isn't answered here. What should I do?
                                </button>
                            </h2>
                            <div id="s4" class="accordion-collapse collapse"
                                data-bs-parent="#supportAccordion">
                                <div class="accordion-body">
                                    No problem! Send us an email at <span
                                        class="highlight-text">distingdistingchat@gmail.com</span> with your question,
                                    and we'll get back to you as soon as possible. We're always happy to help and
                                    improve our service based on user feedback.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="{{ route('index') }}" class="back-btn">
                        <span>←</span> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for quick navigation links
        document.querySelectorAll('.quick-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Auto-expand first item in each category for better UX
        document.addEventListener('DOMContentLoaded', function() {
            // The first accordion item is already set to show by default
        });
    </script>
</body>

</html>
