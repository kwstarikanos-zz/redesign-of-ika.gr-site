<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Hiring;
use App\Models\IndirectlyInsured;
use App\Models\Stamp;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Insured;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DB;
use Exception;


class PagesController extends Controller
{
    public static function announcementsWidget()
    {
        return Announcement::/*whereDay('created_at', date('d'))->*/
        take(5)->get();
    }

    public function index()
    {
        return view('home', ['title' => 'Αρχική σελίδα']);
    }

    public function profile()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);

        $name = Input::get('name');
        $surname = Input::get('surname');
        $business = Input::get('business');
        $business_afm = Input::get('business_afm');
        $act = Input::get('_act');




        if ($insured) {
            if ($act && $act == "_insert_name_surname"){
            if($name && $surname){
                Insured::where(
                    [
                        ['afm', '=', $insured[0]->afm],
                        ['amka', '=', $insured[0]->amka],
                        ['ama', '=', $insured[0]->ama],
                    ]
                )->update(['name' => $name, 'surname' => $surname]);
            }
            else {
                Session::flash('warning', 'Κάποιο από τα πεδία είναι κενά.');
            }
            }
            $category = "Ασφαλισμένος";
            return view('profile', ['title' => 'Προφίλ', 'category' => $category, 'data' => $insured[0]]);
        } elseif ($employer) {

            if ($act && $act == "_insert_name_surname"){
                if($name && $surname){
                    Employer::where(
                        [
                            ['e_id', '=', $employer[0]->e_id],
                        ]
                    )->update(['name' => $name, 'surname' => $surname]);
                    return back();
                }
                else {
                    Session::flash('warning', 'Κάποιο από τα πεδία είναι κενά.');
                }
            }
            if ($act && $act == "_insert_business"){
                if($business){
                    Employer::where(
                        [
                            ['e_id', '=', $employer[0]->e_id],
                        ]
                    )->update(['business' => $business]);
                    return back();
                }
                else {
                    Session::flash('warning', 'Το πεδίο είναι κενό.');
                }
            }
            if ($act && $act == "_insert_business_afm"){
                if($business_afm){
                    Employer::where(
                        [
                            ['e_id', '=', $employer[0]->e_id],
                        ]
                    )->update(['business_afm' => $business_afm]);
                    return back();
                }
                else {
                    Session::flash('warning', 'Το πεδίο είναι κενό.');
                }
            }


            $category = "Εργοδότης";
            return view('profile', ['title' => 'Προφίλ', 'category' => $category, 'data' => $employer[0]]);
        }

    }

    public function password_change()
    {
        return view('underconstruction', ['title' => 'Αλλαγή Συνθηματικού']);
    }


    public function announcements()
    {
        $announcementsToday = Announcement::whereDay('created_at', date('d'))->get();
        $wFrom = Carbon::now()->subWeeks(1)->setTime(0, 0);
        $wTo = Carbon::now()->setTime(0, 0);
        $announcementsWeek = Announcement::
        whereBetween('created_at', array($wFrom->toDateTimeString(), $wTo->toDateTimeString()))->get();
        $mFrom = Carbon::now()->subMonths(1)->setTime(0, 0);
        $mTo = $wFrom->subDay(1);
        $announcementsMonth = Announcement::
        whereBetween('created_at', array($mFrom->toDateTimeString(), $mTo->toDateTimeString()))->get();
        $data = [
            'title' => 'Ανακοινώσεις',
            'announcementsToday' => $announcementsToday,
            'announcementsWeek' => $announcementsWeek,
            'announcementsMonth' => $announcementsMonth,
        ];
        return view('announcements', $data);
    }

    public function faq()
    {
        return view('underconstruction', ['title' => 'Συχνές ερωτήσεις']);
    }

    public function stores()
    {
        return view('underconstruction', ['title' => 'Υποκαταστήματα']);
    }

    public function contact()
    {
        return view('underconstruction', ['title' => 'Επικοινωνία']);
    }

    public function search()
    {
        return view('underconstruction', ['title' => 'Αποτελέσματα Αναζήτησης']);
    }

    public function english()
    {
        return view('underconstruction_english', ['title' => 'English']);
    }

    public function insured()
    {
        return view('insured', ['title' => 'Ασφαλισμένος']);
    }

    public function insured_a1()
    {
        return view('underconstruction', ['title' => 'Πιστοποίηση ασφαλισμένου']);
    }

    public function insured_a2()
    {
        return view('underconstruction', ['title' => 'Ασφαλιστική ικανότητα']);
    }

    public function insured_a3()
    {
        return view('underconstruction', ['title' => 'Ατομικός λογαριασμός ασφάλισης']);
    }

    public function insured_a4()
    {
        if (Auth::check()) {
            $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
            if (!$insured) {
                $insured[0] = null;
            }
        } else {
            $insured[0] = null;
        }
        return view('insured_a4', ['title' => 'Θεμελίωση συνταξιοδοτικού δικαιώματος', 'insured' => $insured[0]]);
    }

    public function insured_a4_results()
    {
        $ama = Input::get('ama');
        $amka = Input::get('amka');
        $afm = Input::get('afm');
        if ($ama && $amka && $afm) {
            $insured = Insured::where(
                [
                    ['afm', '=', $afm],
                    ['amka', '=', $amka],
                    ['ama', '=', $ama],
                ]
            )->first();


            if ($insured) {
                $insured_days = DB::select("SELECT SUM(
           datediff(
               IFNULL(contract_expiry, CURDATE()), hire_date
           )
       ) AS insured_days
FROM hirings
WHERE insured_ama =" . $insured['ama'] . " ");

                return view('insured_a4_results', ['title' => 'Αποτελέσματα', 'insured' => $insured, 'insured_days' => $insured_days]);

            } else {
                Session::flash('warning', 'Ο συνδιασμός των στοιχείων που εισάγατε δεν αντιστοιχει σε κάποιον ασφαλισμένο πολίτη στο σύστημα μας. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
                return $this->insured_a4();
            }

        } else {
            Session::flash('warning', 'Κάποια από τα πεδια ειναι κενα. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
            return $this->insured_a4();
        }
    }

    public function insured_a5()
    {
        return view('underconstruction', ['title' => 'Υποβολή αίτησης συνταξιοδότησης']);
    }

    public function insured_a6()
    {
        return view('underconstruction', ['title' => 'Υπολογισμός βασικού ποσού σύνταξης']);
    }

    public function insured_a7()
    {
        if (Auth::check()) {
            $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
            if (!$insured) {
                $insured[0] = null;
            }
        } else {
            $insured[0] = null;
        }
        return view('insured_a7', ['title' => 'Απογραφή και απόδοση ασφαλιστικής ικανότητας έμμεσα ασφαλισμένων', 'insured' => $insured[0]]);
    }

    public function insured_a7_results()
    {
        $ama = Input::get('ama');
        $amka = Input::get('amka');
        $afm = Input::get('afm');
        $act = Input::get('_act');
        if ($act && $act == "_insert_indirectly_insured") {
            $ama = Input::get('_ama');
            $amka = Input::get('_amka');
            $afm = Input::get('_afm');
        }
        if (($ama && $amka && $afm) or $act ) {
            $insured = Insured::where(
                [
                    ['afm', '=', $afm],
                    ['amka', '=', $amka],
                    ['ama', '=', $ama],
                ]
            )->first();
            if ($insured) {
                if ($act && $act == "_insert_indirectly_insured") {
                    $name = Input::get('name');
                    $surname = Input::get('surname');
                    $birthdate = Input::get('birthdate');
                    $indirect_amka = Input::get('indirect_amka');
                    if ($birthdate && $indirect_amka) {
                        $bd = Carbon::parse($birthdate);
                        $now = Carbon::now();
                        $age = $now->diffInDays($bd);

                        if ($age <= 6480) {
                            try {
                                $IndirectlyInsured = new IndirectlyInsured;
                                $IndirectlyInsured->amka = $indirect_amka;
                                $IndirectlyInsured->name = $name;
                                $IndirectlyInsured->surname = $surname;
                                $IndirectlyInsured->birthdate = $birthdate;
                                $IndirectlyInsured->insured_afm = $afm;
                                $IndirectlyInsured->insured_amka = $amka;
                                $IndirectlyInsured->insured_ama = $ama;
                                $IndirectlyInsured->save();
                                Session::flash('success','Η υποβολή του αιτήματος ασφάλισης έμμεσα ασφαλισμένου μέλους ολοκληρώθηκε με επιτυχία!');
                            } catch (Exception $e) {
                                if (preg_match('/Duplicate entry/', $e->getMessage())) {
                                    Session::flash('danger', 'Διπλή Εγγραφή!');
                                }
                            }
                        } else {
                            Session::flash('warning', 'Το έμμεσα ασφαλιζόμενο μέλος πρέπει να είναι κάτω των 18');
                        }

                    } else {
                        Session::flash('warning', 'Κάποιο από τα πεδία είναι κενά. Πρέπει να συμπληρωθούν απαραίτητα τα πεδία Α.Μ.Κ.Α και Ημερομηνία γέννησης');
                    }
                }
                $indirectly_insured = DB::select("SELECT * FROM indirectly_insured WHERE insured_afm = " . $insured->afm . " AND insured_ama = " . $insured->ama . " AND insured_amka = " . $insured->amka);
                return view('insured_a7_results',
                    [
                        'title' => 'Καρτέλα Έμμεσα Ασφαλισμένων',
                        'insured' => $insured,
                        'indirectly_insured' => $indirectly_insured
                    ]
                );
            } else {
                Session::flash('warning', 'Ο συνδιασμός των στοιχείων που εισάγατε δεν αντιστοιχει σε κάποιον ασφαλισμένο πολίτη στο σύστημα μας. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
                return $this->insured_a7();
            }
        } else {
            Session::flash('warning', 'Κάποια από τα πεδια ειναι κενα. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
            return $this->insured_a7();
        }


    }

    public function insured_a8()
    {
        if (Auth::check()) {
            $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
            if (!$insured) {
                $insured[0] = null;
            }
        } else {
            $insured = null;
        }
        return view('insured_a8', ['title' => 'Βεβαιώσεις', 'insured' => $insured[0]]);
    }

    public function insured_a8_certification(Request $request)
    {
        $certification = Input::get('certification');
        $ama = Input::get('ama');
        $amka = Input::get('amka');
        $afm = Input::get('afm');

        if ($certification && $ama && $amka && $afm) {

            $insured = Insured::where(
                [
                    ['afm', '=', $afm],
                    ['amka', '=', $amka],
                    ['ama', '=', $ama],
                ]
            )->first();
            if ($insured) {
                switch ($certification) {
                    case 'c1':
                        return view('insured_a8_certification',
                            [
                                'title' => 'Βεβαίωση σύνταξης',
                                'insured' => $insured, 'certification' => $certification
                            ]
                        );
                        break;
                    case 'c3':

                        $hirings = DB::select("SELECT
  COUNT(s.s_id) AS 'stamps',
  hire_date,
  e.business
FROM hirings h
  JOIN employers e ON h.h_e_id = e.e_id
  LEFT JOIN stamps s ON
       s.hirings_insured_ama = h.insured_ama
       AND s.hirings_h_e_id = h.h_e_id
       AND  s.hirings_hire_date = h.hire_date
WHERE insured_ama = " . $insured['ama'] . "
GROUP BY s.hirings_h_e_id");
                        $data = array();
                        foreach ($hirings as &$h) {
                            $stamps = Stamp::where(
                                [
                                    ['hirings_hire_date', '=', $h->hire_date],
                                    ['hirings_insured_ama', '=', $insured['ama']]
                                ]
                            )->get();
                            array_push($data, array($h, $stamps));
                        }

                        return view('insured_a8_certification',
                            [
                                'title' => 'Βεβαίωση ενσήμων',
                                'insured' => $insured,
                                'certification' => $certification,
                                'data' => $data
                            ]
                        );
                        break;
                }
            } else {
                Session::flash('warning', 'Ο συνδιασμός των στοιχείων που εισάγατε δεν αντιστοιχει σε κάποιον ασφαλισμένο πολίτη στο σύστημα μας. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
                return $this->insured_a8();
            }
        } else {
            Session::flash('warning', 'Κάποια από τα πεδια ειναι κενα. Παρακαλώ ελέγξτε ξανά τα στοιχεία σας');
            return $this->insured_a8();
        }
    }

    public function employer()
    {
        return view('employer', ['title' => 'Εργοδότης']);
    }

    public function employer_a1()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($insured) {
            return view('no_access', ['title' => 'Ηλεκτρονική Υποβολή Α.Π.Δ.']);
        } elseif ($employer) {
            return view('underconstruction', ['title' => 'Ηλεκτρονική Υποβολή Α.Π.Δ.']);
        }
    }

    public function employer_a2()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($insured) {
            return view('no_access', ['title' => 'Οικονομική Καρτέλα Εργοδότη']);
        } elseif ($employer) {
            return view('underconstruction', ['title' => 'Οικονομική Καρτέλα Εργοδότη']);
        }
    }

    public function employer_a3()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($insured) {
            return view('no_access', ['title' => 'Μαζική Ταυτοποίηση Ασφαλισμένων']);
        } elseif ($employer) {
            return view('underconstruction', ['title' => 'Μαζική Ταυτοποίηση Ασφαλισμένων']);
        }
    }

    public function employer_a4()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($insured) {
            return view('no_access', ['title' => 'Βεβαίωση Ασφαλιστικής Ενημερότητας']);
        } elseif ($employer) {
            return view('underconstruction', ['title' => 'Βεβαίωση Ασφαλιστικής Ενημερότητας']);
        }
    }

    public function employer_a5()
    {
        $insured = DB::select("SELECT *FROM insured WHERE users_id =" . Auth::user()->id);
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($insured) {
            return view('no_access', ['title' => 'Βεβαίωση Ασφαλιστικής Ενημερότητας']);
        } elseif ($employer) {
            $name = Input::get('name');
            $surname = Input::get('surname');
            $jobtitle = Input::get('jobtitle');
            $ama = Input::get('ama');
            $afm = Input::get('afm');
            $amka = Input::get('amka');
            $contract = Input::get('contract');
            $act = Input::get('_act');

            if ($act && $act == "_insert_employee") {
                if ($employer && $ama && $amka && $afm) {
                    $exists = Insured::where(
                        [
                            ['afm', '=', $afm],
                            ['amka', '=', $amka],
                            ['ama', '=', $ama],
                        ]
                    )->count();

                    if ($exists) {
                        Insured::where(
                            [
                                ['afm', '=', $afm],
                                ['amka', '=', $amka],
                                ['ama', '=', $ama],
                            ]
                        )->update(['name' => $name, 'surname' => $surname, 'retired' => 0]);
                    } else {
                        $insured = new Insured();
                        $insured->name = $name;
                        $insured->surname = $surname;
                        $insured->afm = $afm;
                        $insured->ama = $ama;
                        $insured->amka = $amka;
                        $insured->retired = 0;
                        $insured->save();
                    }
                    try {
                        $hiring = new Hiring;
                        $hiring->h_e_id = Auth::user()->id;
                        $hiring->hire_date = Carbon::now();
                        $hiring->insured_afm = $afm;
                        $hiring->insured_ama = $ama;
                        $hiring->insured_amka = $amka;
                        $hiring->jobtitle = $jobtitle;
                        if ($contract) {
                            $hiring->contract_expiry = $contract;
                        }
                        $hiring->save();
                        Session::flash('Η προσθήκη εργαζομένου ολοκληρώθηκε με επιτυχεία!', 'insert ok!');
                    } catch (Exception $e) {
                        if (preg_match('/Duplicate entry/', $e->getMessage())) {
                            Session::flash('danger', 'Διπλή Εγγραφή!');
                        }
                    }
                } else {
                    Session::flash('danger', 'Κάποια από τα πεδια ειναι κενα. Πρέπει να συμπληρώσετε απαραίτητα τα πεδία Α.Μ.Α, Α.Μ.Κ.Α και Α.Φ.Μ.');
                }
            }

            $employees = DB::select("SELECT
  i.name,
  i.surname,
  h.jobtitle,
  i.ama,
  i.afm,
  i.amka,
  h.contract_expiry
FROM hirings h
  JOIN insured i ON h.insured_ama = i.ama
WHERE h.h_e_id = " . $employer[0]->e_id . " AND datediff(IFNULL(contract_expiry, CURDATE() + 2), CURDATE()) > 0");

            return view('employer_a5',
                [
                    'title' => 'Παροχή ενσήμων εργαζομένων',
                    'employer' => $employer[0],
                    'employees' => $employees
                ]
            );
        }
    }

    public function employer_a5_results()
    {
        $afm = Input::get('_afm');
        $act = Input::get('_act');
        $stamp_value = Input::get('stamp_value');
        $employer = DB::select("SELECT *FROM employers WHERE e_id =" . Auth::user()->id);
        if ($employer) {
            $employee = DB::select("SELECT
          i.name,
          i.surname,
          h.jobtitle,
          h.hire_date,
          i.afm,
          i.ama,
          i.amka,
          h.contract_expiry
        FROM hirings h
          JOIN insured i ON h.insured_ama = i.ama
        WHERE h.h_e_id = " . $employer[0]->e_id . " 
        AND datediff(IFNULL(contract_expiry, CURDATE() + 2), CURDATE()) > 0
        AND h.insured_afm = " . $afm);
            if ($employee) {

                if ($act && $act == "_insert_stamp") {
                    if ($stamp_value) {
                        if ($stamp_value > 0) {
                            $stamp = new Stamp;
                            $stamp->value = $stamp_value;
                            $stamp->date = Carbon::now();
                            $stamp->hirings_h_e_id = Auth::user()->id;
                            $stamp->hirings_hire_date = $employee[0]->hire_date;
                            $stamp->hirings_insured_afm = $afm;
                            $stamp->hirings_insured_ama = $employee[0]->ama;
                            $stamp->hirings_insured_amka = $employee[0]->amka;
                            $saved = $stamp->save();
                            if ($saved)
                                Session::flash('success', 'Η καταχώρηση σας πραγματοποιήθηκε με επιτυχία!');
                            else
                                Session::flash('danger', 'Η καταχώρηση σας δεν πραγματοποιήθηκε. Παρακαλώ προσπαθήστε ξανα αργότερα!');
                        } else {
                            Session::flash('danger', 'Παρακαλώ εισάγετε ένα έγκυρο ποσό ενσήμων');
                        }
                    } else {
                        Session::flash('warning', 'Το πεδίο είναι κενό παρακαλώ προσδιορίστε το ποσό του ενσήμου');
                    }
                }

                $total_stamps = DB::select("SELECT h.hire_date AS 'hire_date', COUNT(s.s_id) AS 'stamps'
FROM stamps s
  JOIN hirings h ON s.hirings_insured_afm = h.insured_afm
WHERE s.hirings_insured_afm = " . $afm . " AND s.hirings_h_e_id = " . $employer[0]->e_id . " AND datediff(IFNULL(h.contract_expiry, CURDATE() + 2), CURDATE()) > 0
GROUP BY s.hirings_h_e_id");

                if ($total_stamps) {
                    $stamp_history = DB::select("SELECT s.date, s.value
FROM stamps s
  JOIN hirings h ON s.hirings_insured_afm = h.insured_afm
WHERE s.hirings_insured_afm = " . $afm . " AND s.hirings_h_e_id = " . $employer[0]->e_id . " AND datediff(IFNULL(h.contract_expiry, CURDATE() + 2), CURDATE()) > 0");
                }

                $data = [
                    'title' => 'Καρτέλα εργαζομένου',
                    'employee' => $employee,
                    'total_stamps' => $total_stamps ? $total_stamps[0] : null,
                    'employer' => $employer[0],
                    'stamp_history' => $total_stamps ? $stamp_history : null,
                ];

                return view('employer_a5_results', $data);

            } else {
                Session::flash('danger', 'Ουπς! κάτι πήγε στραβά! Παρακαλώ δοκιμάστε αργότερα!');
                return $this->employer_a5();
            }
        } else {
            Session::flash('danger', 'Ουπς! κάτι πήγε στραβά! Παρακαλώ δοκιμάστε αργότερα!');
            return $this->employer_a5();
        }
    }

    public function debtor()
    {
        return view('underconstruction', ['title' => 'Οφειλέτης']);
    }

    public function coperator()
    {
        return view('underconstruction', ['title' => 'Πιστοποιημένος φορέας']);
    }

    public function care()
    {
        return view('underconstruction', ['title' => 'Φροντίδα συνταξιούχων']);
    }

    public function kepa()
    {
        return view('underconstruction', ['title' => 'Χρήστης υπηρεσιών ΚΕ.Π.Α.']);
    }

    public function help()
    {
        return view('underconstruction', ['title' => 'Βοηθεια']);
    }

    public function terms()
    {
        return view('underconstruction', ['title' => 'Όροι Χρήσης ιστοχώρου']);
    }

    public function about()
    {
        return view('underconstruction', ['title' => 'Για εμάς']);
    }

    public function sitemap()
    {
        return view('underconstruction', ['title' => 'Sitemap']);
    }

    public function newsletter()
    {
        return view('underconstruction', ['title' => 'Ενημερώσεις']);
    }
}
