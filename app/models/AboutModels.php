<?php
    Class AboutModels
    {
        private Database $db;

        public function __construct(Database $db = new Database)
        {
            $this->db = $db;
        }

        public function getUserInfo() : mixed
        {
            try {
                $getUserInfoQuery = "SELECT * FROM users";
                $this->db->query($getUserInfoQuery);
                $result = $this->db->resultSet();
                return $result;
            } catch (PDOException $ex) {
                error_log("ERROR : Failed to get all applicant from database is class ApplicantModel method getApplicants", 0);
                die("ERROR : Failed to get all applicant from database is class ApplicantModel method getApplicants" . $ex->getMessage());
            }
        }

        public function getMyInfo()
        {
            try {
                $getMyInfoQuery = "SELECT * FROM users WHERE id = 1";
                $this->db->query($getMyInfoQuery);
                $result = $this->db->resultSet();
                return $result;
            } catch (PDOException $ex) {
                error_log("ERROR : Failed to get all applicant from database is class ApplicantModel method getApplicants", 0);
                die("ERROR : Failed to get all applicant from database is class ApplicantModel method getApplicants" . $ex->getMessage());
            }
        }
    }