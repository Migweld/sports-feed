<?php
namespace FloDesign\SportsFeed;


interface FormulaOneRepositoryInterface
{
    public function getChampionshipSchedule($year);
    public function getResult($year, $round);
    public function getCountdown($round);
    public function getCircuit($year, $round);
    public function getQualifying($year, $round);
}