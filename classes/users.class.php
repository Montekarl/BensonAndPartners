<?php
include "dbh.class.php";

class Users extends Dbh
{
    protected function getUser($userId)
    {
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $stmt =$this->connect()->prepare($sql);
        $stmt->execute([$userId]);
        return $result = $stmt->fetch();
    }

    protected function getLatestUserID()
    {
        $sql = "SELECT user_id FROM users WHERE user_id=(SELECT max(user_id) FROM users)";
        $stmt=$this->connect()->query($sql);
        return $stmt->fetch();
    }

    protected function getUsers()
    {
        $sql = "SELECT * FROM users ORDER BY user_id DESC";
        $stmt = $this->connect()->query($sql);
        return $stmt->fetchAll();
    }

    protected function setUser($title,$first_name,$last_name,$city_name,$email,$bedrooms,$tenants,$furniture,$maximum_budget,$contact_number,$move_by,$areas,$employment_status,$job_title,$salary,$lease,$special_conditions,$dss,$pets,$children)
    {
        $sql = "INSERT INTO users(
                  title,
                  first_name,
                  last_name,
                  city_name,
                  email,
                  bedrooms,
                  tenants,
                  furniture,
                  maximum_budget,
                  contact_number,
                  move_by,
                  areas,
                  employment_status,
                  job_title,
                  salary,
                  lease,
                  special_conditions,
                  dss,
                  pets,
                  children) 
                  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt =$this->connect()->prepare($sql);
        $stmt->execute([$title,$first_name,$last_name,$city_name,$email,$bedrooms,$tenants,$furniture,$maximum_budget,$contact_number,$move_by,$areas,$employment_status,$job_title,$salary,$lease,$special_conditions,$dss,$pets,$children]);
    }
}