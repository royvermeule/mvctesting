<?php
class AboutModels
{
    private Database $db;

    public function __construct(Database $db = new Database)
    {
        $this->db = $db;
    }

    public function getUserInfo(): mixed
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

    public function getMyInfo($id)
    {
        try {
            $this->db->query("SELECT * FROM users WHERE id = :id");
            $this->db->bind(':id', $id, PDO::PARAM_INT);
            return $this->db->single();
        } catch (PDOException $ex) {
            error_log("ERROR : Failed to get user db info from database row called user.", 0);
            die("ERROR : Failed to get user db info from database row called user." . $ex->getMessage());
        }
    }
    /**
     * @param [type] $id
     * @return object
     */
    public function getContact(int $id): object
    {
        try {
            $getSelectContact = "SELECT * FROM users WHERE id = :id";
            $this->db->query($getSelectContact);
            $this->db->bind(':id', $id);
            $result = $this->db->single();
            return $result ?? new ContactEntity();
        } catch (PDOException $ex) {
            error_log("ERROR : Failed to get all info from database is class aboutModel method getContact", 0);
            die("ERROR : Failed to get all info from database is class aboutModel method getContact" . $ex->getMessage());
        }
    }
}
