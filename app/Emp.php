<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{

    protected  $primaryKey = 'id';
    protected $table = 'emp';
    protected $fillable = ['id', 'fname', 'lname', 'email', 'address', 'gender', 'dob', 'mobileno', 'education', 'bloodgrp', 'emp_per_name', 'emp_per_mob', 'status', 'roles', 'acc_name', 'acc_no', 'bank_name', 'branch', 'ifsc_code', 'join_date', 'pan_no', 'adhar_no', 'upload_adhar', 'upload_pan', 'upload_resume', 'designation'];
}

