<?php

declare(strict_types=1);

$root = dirname(__DIR__);

$replacements = [
    'Our tools are easy to use and affordable, so you can start improving your
                                            website\'s SEO today.' => 'De-Weboo offers web design, custom development, SEO, branding, and ongoing support. Every project starts with a free consultation to understand your goals.',
    'Our tools are easy to use and affordable, so you can start improving your
                                            website\'s SEO today.' => 'De-Weboo offers web design, custom development, SEO, branding, and ongoing support. Every project starts with a free consultation to understand your goals.',

    'Nor is there anyone who loves or pursues or desires to obtain pain of
                                            itself, because it is pain, occasionally
                                            circumstances occur in which toil and pain can procure him some great
                                            pleasure.' => 'Most website projects take 4–12 weeks depending on scope, content readiness, and integrations. We share a detailed timeline and milestones before development begins.',

    'How does it generate make responses?' => 'What services does De-Weboo offer?',
    'Do I get all the demos and templates with?' => 'Do you provide website maintenance after launch?',
    'How do you find different criteria in your process?' => 'How does your project process work?',
    'What do I need to apply for an account?' => 'How much does a new website cost?',
    'I don\'t have a traditional AI background, can I still find an AI job?' => 'Can De-Weboo help improve my Google rankings?',
    'Have any question?' => 'Frequently asked questions',
    'Things you need to
                            know about us' => 'Answers about working with De-Weboo',
    '019 25648 62598' => '+92 336 7770349',
    'Call us free' => 'Call us today',

    'Our faq\'s' => 'FAQs',
    'Our faq’s' => 'FAQs',

    'Fully committed to the success company emotions from confusion to exasper' => 'End-to-end delivery with dedicated support from kickoff through launch and beyond',
    'Explore Service' => 'View service',

    'Designer' => 'Lead Designer',
    'Engineer' => 'Full-Stack Developer',

    'Page Not Found' => '404 – Page Not Found',
    'Oops! Page not found' => 'Sorry, this page could not be found',
];

foreach (glob($root . '/*.php') as $file) {
    if (str_starts_with(basename($file), 'build-')) {
        continue;
    }
    $content = file_get_contents($file);
    $original = $content;
    foreach ($replacements as $from => $to) {
        $content = str_replace($from, $to, $content);
    }
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo basename($file) . "\n";
    }
}

echo "Pass 2 done.\n";
