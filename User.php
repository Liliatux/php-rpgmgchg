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

		public function __construct($newId, $newEmail, $newDate) {
			$this->id = $newId;
			$this->email = $newEmail;
			$this->createdAt = $newDate;
		}
	}
?>