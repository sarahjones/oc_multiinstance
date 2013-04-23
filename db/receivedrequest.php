<?php
/**
* ownCloud - MultiInstance App
*
* @author Sarah Jones
* @copyright 2013 Sarah Jones sarahe.e.p.jones@gmail.com
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

namespace OCA\MultiInstance\Db;

use OCA\AppFramework\Db\Entity;

class ReceivedRequest extends Entity{

	public $id;
	public $type;
	public $sendingLocation;
	public $addedAt;
	public $field1;

	public function __construct($typeOrFromRow, $id=null, $sendingLocation=null, $addedAt=null, $field1=null){
		if($id === null){
			$this->fromRow($typeOrFromRow);
		}
		else {
			$this->setId($id);
			$this->setType($typeOrFromRow);
			$this->setSendingLocation($location);
			$this->setAddedAt($addedAt);
			$this->setField1($field1);
		}
	}


}
