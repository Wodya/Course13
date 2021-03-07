<?php


class Candidate implements INotify
{
    private $Name;
    private $Experience;
    private $Email;

    public function __construct($Name, $Email, $Experience)
    {
        $this->Name = $Name;
        $this->Experience = $Experience;
        $this->Email = $Email;
    }

    public function NotifyNewVacancy($vacancyName): void
    {
        echo "Пользователь {$this->Name} уведомлён о вакансии {$vacancyName} на почту {$this->Email}<BR>";
    }
}