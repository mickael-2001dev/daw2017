<?php  

class MailModel extends Model {

	public function getMail () {
		$list_mail = [];
		$sql = "SELECT * FROM mail";
		$results= $this->ExecuteQuery($sql, array());
        
        foreach ($results as $row) {
        	$list_mail[] = new Mail (
        		$row['mail'],
        		$row['id']
        	);
        }

        return $list_mail;
	}

	public function insertMail($mail) {
		$sql = "INSERT INTO mail(mail) VALUES(:mail)";

		if($this->ExecuteCommand($sql,[':mail'=>$mail])) {
			return true;
		} else {
			return false;
		}
	}

}