<?php

class VacancyWorker
{
    /** INotify[] $subscribers **/
    private $subscribers = [];
    public function Subscribe(INotify $subscriber) : void
    {
        $this->subscribers[] = $subscriber;
    }
    public function Unsubscribe(INotify $subscriber) : void
    {
        array_splice($this->subscribers, array_search($subscriber, $this->subscribers), 1);
    }

    public function AddNewVacancy($vacancyName) : void
    {
        echo "Добавлена новая вакансия {$vacancyName}<BR>";

        foreach ($this->subscribers as $subscriber){
            $subscriber->NotifyNewVacancy($vacancyName);
        }
    }

}