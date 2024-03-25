<?php 
namespace Calendar;
use PDO;

class Events{
  private $pdo;

  public function __construct(\PDO $pdo){
    $this -> pdo=$pdo ;
  }

  /**
   * recupère les évenement commencant entre deux date
   * @param \DateTime $start 
   * @param \DateTime $end  
   * @return array
   */
  public function getEventsBetween(\DateTime $start, \DateTime $end): array {
    $sql= "select * from events where start BETWEEN '{$start->format('Y-m-d 00:00:00')}' and '{$end->format('Y-m-d 23:59:59')}'ORDER BY start ASC ";
    $statement= $this-> pdo -> query($sql);
    $resultats=$statement->fetchAll();
    return $resultats;
  }


  /**
   * recupère les évenement commencant entre deux date indexé par jour
   * @param \DateTime $start 
   * @param \DateTime $end  
   * @return array
   */
  public function getEventsBetweenByDay(\DateTime $start, \DateTime $end): array {
    $events= $this->getEventsBetween($start, $end);
    $days=[];
    foreach($events as $event) {
      $date= explode( ' ' , $event['start'])[0];
      if (!isset($days[$date])){
        $days[$date]=[$event];
      } else {
        $days [$date][] = $event; 

      }
    }
    return $days;


  }

  /** récupère un évenement 
   * @param  int $id 
   * @return array
   * @throws \Execption
   */
  public function find (int $id): Event {
    $statement =$this->pdo->query("select * from events where id = $id LIMIT 1");
    $statement->setFetchMode(\PDO::FETCH_CLASS,Event::class);
    $result=$statement->fetch();
    if ($result === false){
      throw new \Exception('aucun résultat n\'a été trouvé');
    }
    return $result;
  }

  /**
   * @param Event $event
   * @param array $data
   * @return Event 
   */
  public function hydrate(Event $event, array $data){
    $event->setName($data['name']);
    $event->setDescription($data['description']);
    $event->setStart(\DateTime::createFromFormat('Y-m-d H:i',$data['date'].''.$data['start'])->format('Y-m-d H:i:s'));
    $event->setEnd(\DateTime::createFromFormat('Y-m-d H:i',$data['date'].''.$data['end'])->format('Y-m-d H:i:s'));
    return $event;
  }

  /**
   * crée un evement au niv de la base de donnée 
   * @param Event events
   * @return bool 
   */
  public function create(Event $event): bool {
  $statement= $this ->pdo ->prepare('INSERT INTO events (name,description, start, end) Values (?,?,?,?)');
  return $statement-> execute([
    $event->getName(),
    $event->getDescription(),
    $event->getStart()->Format('Y-m-d H:i:s'),
    $event->getEnd()->Format('Y-m-d H:i:s'),  
  ]);
  }


  /**
   * met a jours un évenement dans la base de donnéee
   * @param Event events
   * @return bool 
   */
  public function update(Event $event): bool {
    $statement= $this ->pdo ->prepare('UPDATE events SET name=?, description=?, start=?, end=? WHERE id=? ');
    return $statement-> execute([
      $event->getName(),
      $event->getDescription(),
      $event->getStart()->Format('Y-m-d H:i:s'),
      $event->getEnd()->Format('Y-m-d H:i:s'),  
      $event->getId()
    ]);
    }

}

?>