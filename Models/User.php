<?php

	class User {
		private $email;
		private $id;
		private $createdAt;

		public function getEmail() {
			return $this->email;
		}

		public function getId() {
			return $this->id;
		}

		public function getCreatedAt() {
			return $this->createdAt;
		}

		public function setEmail($newEmail) {
			$this->email = $newEmail;
		}

		public function setId($newId) {
			$this->id = $newId;
		}

		public function setCreatedAt($newDate) {
			$this->createdAt = $newDate;
		}

		public function __construct($newId, $newEmail, $newDate) {
			$this->setId($newId);
			$this->setEmail($newEmail);
			$this->setCreatedAt($newDate);
		}
	}
?>