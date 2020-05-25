<?php

class UsersController extends Users
{
    public function createUser($title,$first_name,$last_name,$city_name,$email,$bedrooms,$tenants,$furniture,$maximum_budget,$contact_number,$move_by,$areas,$employment_status,$job_title,$salary,$lease,$special_conditions,$dss,$pets,$children)
    {
        $this->setUser($title,$first_name,$last_name,$city_name,$email,$bedrooms,$tenants,$furniture,$maximum_budget,$contact_number,$move_by,$areas,$employment_status,$job_title,$salary,$lease,$special_conditions,$dss,$pets,$children);
    }
}