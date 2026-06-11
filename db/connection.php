<?php namespace DB;
final class Connection{
	private \PDO $pdo;
	function __construct(string $driver,string $u, #[\SensitiveParameter] string $p=null, string $h=null, string $db=null){
		$h=\String\Format('%s:host=%s',$driver,$h);
		if($db) $h.=';dbname='.$db;
		$this->pdo=new \PDO($h,$u,$p,[\PDO::ATTR_PERSISTENT=>1]);		
	}
	private static function Where(array &$_,?Where $where=null){
		if($where){
			if($s=(string)$where){
				$_[]='WHERE';
				$_[]=$where;
			}
		}
	}
	private static function Order(array &$_,null|Order|array|string $order){
		if($order){
			if(!\is_array($order))
				$order=[$order];
			foreach($order as $a=>$b)
				if(!$order[$a] instanceof Order)
					unset($order[$a]);
			$_[]='ORDER BY';
			$_[]=\String\JoinV(',',$order);
		}		
	}
	function Delete(&$result,string $source,Where $where=null, Order|array|string $order=null,int $limit=0){
		$_=[];
		$_[]='DELETE';
		if($limit) $_[]=\String\Format('TOP (%s)',$limit);
		$_[]='FROM';
		$_[]=$source;
		self::Where($_,$where);
		self::Order($_,$order);
	}
	function Select(&$result,string $source,array $columns=null,?Where $where=null,Order|array|string $order=null,int $limit=0):bool{
		$_=[];
		$_[]='SELECT';
		if($columns){
			foreach($columns as $a=>$b)
				if(!\String\Is($columns[$a]))
					unset($columns[$a]);
				$columns? 
					$_[]=\String\JoinV(',',$columns):
					$_[]='*';
		}else{$_[]='*';}
		$_[]='FROM';
		$_[]=$source;
		self::Where($_,$where);
		self::Order($_,$order);
		if($limit){
			$_[]='LIMIT';	
			$_[]=$limit;}		
		$_=\String\JoinV(\chr(32),$_);
	//	\file_put_contents('R:/Scratch/db_select.txt',$_);
		if($_=$this->pdo->query($_,\PDO::FETCH_NAMED)){{
			$result=$_->fetchAll();
			return !$_->errorInfo()[1];}
		}
	return false;}
}