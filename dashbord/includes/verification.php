<?php
include "../models/spdo.model.php";
include "../repositories/userRepo.repositorie.php";
$user_controller = new UserRepo();
$user_controller -> getActionServerSide () ->verification ();
