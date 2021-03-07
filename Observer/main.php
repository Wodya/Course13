<?php
include "INotify.php";
include "Candidate.php";
include "VacancyWorker.php";

$vacancyWorker = new VacancyWorker();
$candidate1 = new Candidate("Кандидат 1","cand1@ru", 20);
$vacancyWorker->Subscribe($candidate1);
$candidate2 = new Candidate("Кандидат 2","cand2@ru", 20);
$vacancyWorker->Subscribe($candidate2);

$vacancyWorker->AddNewVacancy("Программист-самоучка");
$vacancyWorker->Unsubscribe($candidate1);
$vacancyWorker->AddNewVacancy("Программист-волшебник");
