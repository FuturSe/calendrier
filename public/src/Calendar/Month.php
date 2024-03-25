<?php
namespace Calendar;

class Month{
    public $days=['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
    private $months=['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre', 'Octobre', 'Novembre', 'Décembre'];
    public $month;
    public $year;

    /**
     * @throws \Exception 
     */
    public function __construct(?int $month=null, ?int $year=null)
    {
        if ($month==null || $month<1 || $month>12 ){
            $month= intval(date(format: 'm'));
        }

        if ($year== null){
            $year=intval(date(format: 'Y'));
        }
             
        if($month<1 || $month > 12){
            throw new \Exception("le mois $month n'est pas valide");
        
        }
        if ($year < 1970){
            throw new \Exception("l'année  $year est inférieur a 1970");
        }
        $this-> month =$month;
        $this-> year =$year;

    }
    /**
     * ça renvoie le premier jour du mois 
     * @return \DateTime
     */
    public function getStartingDay(): \DateTime {
        return new \DateTime ("{$this-> year}-{$this->month}-01");
    }

    /**
     * retourne le mois en toute lettre 
     * @return string 
     */
    public function toString(): string {
        return $this->months[ $this -> month - 1 ] . ' ' . $this ->year;

        
    }
    /**
     * renvoie le nombre de semaine dans le mois 
     * @return int
     */
    public function getWeeks (): int {
        $start= $this->getStartingDay();
        $end = (clone $start)->modify('+1 month -1 day');
        $startWeek=intval($start->format(('W')));
        $endWeek=intval($end->format(('W')));
        if ($endWeek===1){
            $endWeek= intval((clone $end)->modify('-7 day')->format('W'))+1;
        }
        $weeks= $endWeek - $startWeek +1 ;
        
        if ($weeks < 0 ){
            $weeks = intval( $end->format('W'));
        }
        return $weeks;
    }

    /**
     * est ce que le jour est dans le mois en cours
     * @return bool
     * @param \DateTime
     */
    public function withinMonth(\DateTime $date):bool{
        return $this->getStartingDay()->format('Y-m')==$date->format('Y-m');

    }
    /**
     * renvoie le mois suivant
     * @return Month 
     */
    public function nextMonth(): Month{
        $month= $this -> month +1;
        $year=$this->year;
        if($month > 12) {
            $month=1;
            $year+=1;
        }
        return new Month ($month, $year);
    }

    /**
     * renvoie le mois précédent
     * @return Month
     */
    public function previoustMonth(): Month{
        $month= $this -> month -1;
        $year=$this->year;
        if($month<1){
            $month=12;
            $year-=1;
        }
        return new Month ($month, $year);
    }
}