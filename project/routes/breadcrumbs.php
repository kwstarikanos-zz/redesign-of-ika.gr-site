<?php

function p($params)
{
    /*    echo "<pre>";
        var_dump($params);
        echo "</pre>";*/
}

// home
Breadcrumbs::register('home', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->push($params[0], route('home'));
});

// home > login
Breadcrumbs::register('login', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('login'));
});

// home > register
Breadcrumbs::register('register', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('register'));
});

// home > profile
Breadcrumbs::register('profile', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('profile'));
});

// home > profile > password-change
Breadcrumbs::register('password_change', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('profile', 'Προφίλ');
    $breadcrumbs->push($params[0], route('password_change'));
});

// home > announcements
Breadcrumbs::register('announcements', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('announcements'));
});

// home > faq
Breadcrumbs::register('faq', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('faq'));
});

// home > stores
Breadcrumbs::register('stores', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('stores'));
});

// home > contact
Breadcrumbs::register('contact', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('contact'));
});

// home > search
Breadcrumbs::register('search', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('search'));
});

// home > english
Breadcrumbs::register('english', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('english'));
});

// home > insured
Breadcrumbs::register('insured', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('insured'));
});

// home > Insured > insured.a1
Breadcrumbs::register('insured.a1', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a1'));
});

// home > Insured > insured.a2
Breadcrumbs::register('insured.a2', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a2'));
});

// home > Insured > insured.a3
Breadcrumbs::register('insured.a3', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a3'));
});

// home > Insured > insured.a4
Breadcrumbs::register('insured.a4', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a4'));
});

// home > Insured > insured.a4 > insured.a4.certification
Breadcrumbs::register('insured.a4.results', function ($breadcrumbs, ...$params) {
    $breadcrumbs->parent('insured.a4', 'Θεμελίωση συνταξιοδοτικού δικαιώματος');
    $breadcrumbs->push($params[0], route('insured.a4.results'));
});

// home > Insured > insured.a5
Breadcrumbs::register('insured.a5', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a5'));
});

// home > Insured > insured.a6
Breadcrumbs::register('insured.a6', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a6'));
});

// home > Insured > insured.a7
Breadcrumbs::register('insured.a7', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a7'));
});

// home > Insured > insured.a7.results
Breadcrumbs::register('insured.a7.results', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured.a7', 'Απογραφή και απόδοση ασφαλιστικής ικανότητας έμμεσα ασφαλισμένων');
    $breadcrumbs->push($params[0], route('insured.a7.results'));
});

// home > Insured > insured.a8
Breadcrumbs::register('insured.a8', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('insured', 'Ασφαλισμένος');
    $breadcrumbs->push($params[0], route('insured.a8'));
});

// home > Insured > insured.a8 > insured.a8.certification
Breadcrumbs::register('insured.a8.certification', function ($breadcrumbs, ...$params) {
    $breadcrumbs->parent('insured.a8', 'Βεβαιώσεις');
    $breadcrumbs->push($params[0], route('insured.a8.certification'));
});

// home > employer
Breadcrumbs::register('employer', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('employer'));
});

// home > employer > employer.a1
Breadcrumbs::register('employer.a1', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('employer', 'Εργοδότης');
    $breadcrumbs->push($params[0], route('employer.a1'));
});

// home > employer > employer.a2
Breadcrumbs::register('employer.a2', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('employer', 'Εργοδότης');
    $breadcrumbs->push($params[0], route('employer.a2'));
});

// home > employer > employer.a3
Breadcrumbs::register('employer.a3', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('employer', 'Εργοδότης');
    $breadcrumbs->push($params[0], route('employer.a3'));
});

// home > employer > employer.a4
Breadcrumbs::register('employer.a4', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('employer', 'Εργοδότης');
    $breadcrumbs->push($params[0], route('employer.a4'));
});

// home > employer > employer.a5
Breadcrumbs::register('employer.a5', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('employer', 'Εργοδότης');
    $breadcrumbs->push($params[0], route('employer.a5'));
});

// home > employer > employer.a5 > employer.a5.results
Breadcrumbs::register('employer.a5.results', function ($breadcrumbs, ...$params) {
    $breadcrumbs->parent('employer.a5', 'Παροχή ενσήμων εργαζομένων');
    $breadcrumbs->push($params[0], route('employer.a5.results'));
});

// home > deptor
Breadcrumbs::register('debtor', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('debtor'));
});

// home > coperator
Breadcrumbs::register('coperator', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('coperator'));
});

// home > deptor
Breadcrumbs::register('care', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('care'));
});

// home > deptor
Breadcrumbs::register('kepa', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('kepa'));
});

// home > help
Breadcrumbs::register('help', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('help'));
});

// home > terms
Breadcrumbs::register('terms', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('terms'));
});

// home > about
Breadcrumbs::register('about', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('about'));
});

// home > sitemap
Breadcrumbs::register('sitemap', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('sitemap'));
});

// home > newsletter
Breadcrumbs::register('newsletter', function ($breadcrumbs, ...$params) {
    p($params);
    $breadcrumbs->parent('home', 'Αρχική σελίδα');
    $breadcrumbs->push($params[0], route('newsletter'));
});