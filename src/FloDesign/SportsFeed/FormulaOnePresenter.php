<?php
namespace FloDesign\SportsFeed;


class FormulaOnePresenter
{
    public function __construct(FormulaOneRepositoryInterface $F1)
    {
        $this->repo = $F1;
    }

    /**
     * Collects and formats data for presentation to a frontend
     *
     * @param $year Year of the championship. Defaults to current year
     */
    public function formatChampionship($year = 'current', $round = null)
    {
        $presenter = [];
        $presenter['schedule'] = $this->repo->getChampionshipSchedule($year);

    }
}